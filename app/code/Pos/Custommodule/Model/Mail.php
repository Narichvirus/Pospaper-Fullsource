<?php
namespace Pos\Custommodule\Model;

use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\Area;
use Magento\Contact\Model\ConfigInterface;

class Mail implements CustommoduleMailInterface
{
    /**
     * @var ConfigInterface
     */
    private $contactsConfig;

    /**
     * @var TransportBuilder
     */
    private $transportBuilder;

    /**
     * @var StateInterface
     */
    private $inlineTranslation;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * Initialize dependencies.
     *
     * @param ConfigInterface $contactsConfig
     * @param TransportBuilder $transportBuilder
     * @param StateInterface $inlineTranslation
     * @param StoreManagerInterface|null $storeManager
     */
    public function __construct(
        ConfigInterface $contactsConfig,
        TransportBuilder $transportBuilder,
        StateInterface $inlineTranslation,
        StoreManagerInterface $storeManager = null
    ) {
        $this->contactsConfig = $contactsConfig;
        $this->transportBuilder = $transportBuilder;
        $this->inlineTranslation = $inlineTranslation;
        $this->storeManager = $storeManager ?: ObjectManager::getInstance()->get(StoreManagerInterface::class);
    }

    /**
     * Send email from contact form
     *
     * @param string $replyTo
     * @param array $variables
     * @return void
     */
    public function send($replyTo, array $variables)
    {
        /** @see \Magento\Contact\Controller\Index\Post::validatedParams() */
        $replyToName = !empty($variables['data']['fullname']) ? $variables['data']['fullname'] : null;
        $copyTo = null;
        if($variables['data']['copyto']) {
            $copyTo = $variables['data']['billingemail'];
        }

        $this->inlineTranslation->suspend();
        try {
            $transport = $this->transportBuilder
                ->setTemplateIdentifier('volume_inquiry_template')
                ->setTemplateOptions(
                    [
                        'area' => Area::AREA_FRONTEND,
                        'store' => $this->storeManager->getStore()->getId()
                    ]
                )
                ->setTemplateVars($variables)
                ->setFrom($this->contactsConfig->emailSender())
                ->addTo('manderson@pospaper.com')
                //->addTo('info@designcoil.com')
                ->setReplyTo($replyTo, $replyToName)
                ->getTransport();

            $transport->sendMessage();

            if($copyTo) {
                $transport = $this->transportBuilder
                    ->setTemplateIdentifier('volume_inquiry_template')
                    ->setTemplateOptions(
                        [
                            'area' => Area::AREA_FRONTEND,
                            'store' => $this->storeManager->getStore()->getId()
                        ]
                    )
                    ->setTemplateVars($variables)
                    ->setFrom($this->contactsConfig->emailSender())
                    ->addTo($copyTo)
                    ->setReplyTo($replyTo, $replyToName)
                    ->getTransport();

                $transport->sendMessage();
            }
        } finally {
            $this->inlineTranslation->resume();
        }
    }
}
