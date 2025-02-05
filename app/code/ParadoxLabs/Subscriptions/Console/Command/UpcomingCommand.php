<?php
/**
 * Paradox Labs, Inc.
 * http://www.paradoxlabs.com
 * 717-431-3330
 *
 * Need help? Open a ticket in our support system:
 *  http://support.paradoxlabs.com
 *
 * @author      Ryan Hoerr <info@paradoxlabs.com>
 * @license     http://store.paradoxlabs.com/license.html
 */

namespace ParadoxLabs\Subscriptions\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * UpcomingCommand Class
 */
class UpcomingCommand extends Command
{
    /**
     * @var \ParadoxLabs\Subscriptions\Model\Cron\Bill
     */
    protected $command;

    /**
     * @var \Magento\Framework\App\State
     */
    protected $appState;

    /**
     * @var \ParadoxLabs\Subscriptions\Model\Config
     */
    protected $config;

    /**
     * Constructor
     *
     * @param \ParadoxLabs\Subscriptions\Model\Cron\Upcoming $command
     * @param \Magento\Framework\App\State $appState
     * @param \ParadoxLabs\Subscriptions\Model\Config $config
     */
    public function __construct(
        \ParadoxLabs\Subscriptions\Model\Cron\Upcoming $command,
        \Magento\Framework\App\State $appState,
        \ParadoxLabs\Subscriptions\Model\Config $config
    ) {
        parent::__construct();

        $this->command = $command;
        $this->appState = $appState;
        $this->config = $config;
    }

    /**
     * Set up command
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('subscriptions:upcoming')
             ->setDescription('Display, but do not bill, outstanding subscriptions (dry run)');

        parent::configure();
    }

    /**
     * Checks whether the command is enabled or not in the current environment.
     *
     * @return bool
     */
    public function isEnabled()
    {
        if ($this->config->moduleIsActive()) {
            return parent::isEnabled();
        }

        return false;
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->appState->setAreaCode(\Magento\Framework\App\Area::AREA_CRONTAB);

        $output->writeln((string)__('<success>Upcoming subscriptions:</success>'));

        $startTime = microtime(true);

        $this->command->setConsoleOutput($output);
        $this->command->displayUpcomingSubscriptions();
    }
}
