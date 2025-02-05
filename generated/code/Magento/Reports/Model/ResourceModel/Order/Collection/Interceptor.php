<?php
namespace Magento\Reports\Model\ResourceModel\Order\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Order\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Order\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\DB\Helper $coreResourceHelper, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Sales\Model\Order\Config $orderConfig, \Magento\Sales\Model\ResourceModel\Report\OrderFactory $reportOrderFactory, \Magento\Framework\DB\Adapter\AdapterInterface $connection = null, \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $entitySnapshot, $coreResourceHelper, $scopeConfig, $storeManager, $localeDate, $orderConfig, $reportOrderFactory, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function checkIsLive($range)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkIsLive');
        if (!$pluginInfo) {
            return parent::checkIsLive($range);
        } else {
            return $this->___callPlugins('checkIsLive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLive');
        if (!$pluginInfo) {
            return parent::isLive();
        } else {
            return $this->___callPlugins('isLive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareSummary($range, $customStart, $customEnd, $isFilter = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareSummary');
        if (!$pluginInfo) {
            return parent::prepareSummary($range, $customStart, $customEnd, $isFilter);
        } else {
            return $this->___callPlugins('prepareSummary', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDateRange($range, $customStart, $customEnd, $returnObjects = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDateRange');
        if (!$pluginInfo) {
            return parent::getDateRange($range, $customStart, $customEnd, $returnObjects);
        } else {
            return $this->___callPlugins('getDateRange', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addItemCountExpr()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItemCountExpr');
        if (!$pluginInfo) {
            return parent::addItemCountExpr();
        } else {
            return $this->___callPlugins('addItemCountExpr', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function calculateTotals($isFilter = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calculateTotals');
        if (!$pluginInfo) {
            return parent::calculateTotals($isFilter);
        } else {
            return $this->___callPlugins('calculateTotals', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function calculateSales($isFilter = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calculateSales');
        if (!$pluginInfo) {
            return parent::calculateSales($isFilter);
        } else {
            return $this->___callPlugins('calculateSales', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDateRange($fromDate, $toDate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDateRange');
        if (!$pluginInfo) {
            return parent::setDateRange($fromDate, $toDate);
        } else {
            return $this->___callPlugins('setDateRange', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreIds($storeIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreIds');
        if (!$pluginInfo) {
            return parent::setStoreIds($storeIds);
        } else {
            return $this->___callPlugins('setStoreIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function groupByCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'groupByCustomer');
        if (!$pluginInfo) {
            return parent::groupByCustomer();
        } else {
            return $this->___callPlugins('groupByCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function joinCustomerName($alias = 'name')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinCustomerName');
        if (!$pluginInfo) {
            return parent::joinCustomerName($alias);
        } else {
            return $this->___callPlugins('joinCustomerName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOrdersCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrdersCount');
        if (!$pluginInfo) {
            return parent::addOrdersCount();
        } else {
            return $this->___callPlugins('addOrdersCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addRevenueToSelect($convertCurrency = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRevenueToSelect');
        if (!$pluginInfo) {
            return parent::addRevenueToSelect($convertCurrency);
        } else {
            return $this->___callPlugins('addRevenueToSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addSumAvgTotals($storeId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addSumAvgTotals');
        if (!$pluginInfo) {
            return parent::addSumAvgTotals($storeId);
        } else {
            return $this->___callPlugins('addSumAvgTotals', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function orderByTotalAmount($dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'orderByTotalAmount');
        if (!$pluginInfo) {
            return parent::orderByTotalAmount($dir);
        } else {
            return $this->___callPlugins('orderByTotalAmount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function orderByOrdersCount($dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'orderByOrdersCount');
        if (!$pluginInfo) {
            return parent::orderByOrdersCount($dir);
        } else {
            return $this->___callPlugins('orderByOrdersCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function orderByCustomerRegistration($dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'orderByCustomerRegistration');
        if (!$pluginInfo) {
            return parent::orderByCustomerRegistration($dir);
        } else {
            return $this->___callPlugins('orderByCustomerRegistration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function orderByCreatedAt($dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'orderByCreatedAt');
        if (!$pluginInfo) {
            return parent::orderByCreatedAt($dir);
        } else {
            return $this->___callPlugins('orderByCreatedAt', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        if (!$pluginInfo) {
            return parent::getSelectCountSql();
        } else {
            return $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addCreateAtPeriodFilter($period)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCreateAtPeriodFilter');
        if (!$pluginInfo) {
            return parent::addCreateAtPeriodFilter($period);
        } else {
            return $this->___callPlugins('addCreateAtPeriodFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAddressFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAddressFields');
        if (!$pluginInfo) {
            return parent::addAddressFields();
        } else {
            return $this->___callPlugins('addAddressFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToSearchFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToSearchFilter');
        if (!$pluginInfo) {
            return parent::addFieldToSearchFilter($field, $condition);
        } else {
            return $this->___callPlugins('addFieldToSearchFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToSearchFilter($attributes, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToSearchFilter');
        if (!$pluginInfo) {
            return parent::addAttributeToSearchFilter($attributes, $condition);
        } else {
            return $this->___callPlugins('addAttributeToSearchFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addBillingAgreementsFilter($agreements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBillingAgreementsFilter');
        if (!$pluginInfo) {
            return parent::addBillingAgreementsFilter($agreements);
        } else {
            return $this->___callPlugins('addBillingAgreementsFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSelectCountSql(\Magento\Framework\DB\Select $countSelect)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSelectCountSql');
        if (!$pluginInfo) {
            return parent::setSelectCountSql($countSelect);
        } else {
            return $this->___callPlugins('setSelectCountSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToSelect($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToSelect');
        if (!$pluginInfo) {
            return parent::addAttributeToSelect($attribute);
        } else {
            return $this->___callPlugins('addAttributeToSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToFilter($attribute, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToFilter');
        if (!$pluginInfo) {
            return parent::addAttributeToFilter($attribute, $condition);
        } else {
            return $this->___callPlugins('addAttributeToFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToSort($attribute, $dir = 'asc')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToSort');
        if (!$pluginInfo) {
            return parent::addAttributeToSort($attribute, $dir);
        } else {
            return $this->___callPlugins('addAttributeToSort', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPage($pageNum, $pageSize)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPage');
        if (!$pluginInfo) {
            return parent::setPage($pageNum, $pageSize);
        } else {
            return $this->___callPlugins('setPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds($limit = null, $offset = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        if (!$pluginInfo) {
            return parent::getAllIds($limit, $offset);
        } else {
            return $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCriteria()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchCriteria');
        if (!$pluginInfo) {
            return parent::getSearchCriteria();
        } else {
            return $this->___callPlugins('getSearchCriteria', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSearchCriteria');
        if (!$pluginInfo) {
            return parent::setSearchCriteria($searchCriteria);
        } else {
            return $this->___callPlugins('setSearchCriteria', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalCount');
        if (!$pluginInfo) {
            return parent::getTotalCount();
        } else {
            return $this->___callPlugins('getTotalCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTotalCount($totalCount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTotalCount');
        if (!$pluginInfo) {
            return parent::setTotalCount($totalCount);
        } else {
            return $this->___callPlugins('setTotalCount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setItems(array $items = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItems');
        if (!$pluginInfo) {
            return parent::setItems($items);
        } else {
            return $this->___callPlugins('setItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchItem');
        if (!$pluginInfo) {
            return parent::fetchItem();
        } else {
            return $this->___callPlugins('fetchItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        if (!$pluginInfo) {
            return parent::getMainTable();
        } else {
            return $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMainTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMainTable');
        if (!$pluginInfo) {
            return parent::setMainTable($table);
        } else {
            return $this->___callPlugins('setMainTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelect');
        if (!$pluginInfo) {
            return parent::getSelect();
        } else {
            return $this->___callPlugins('getSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToSelect($field, $alias = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToSelect');
        if (!$pluginInfo) {
            return parent::addFieldToSelect($field, $alias);
        } else {
            return $this->___callPlugins('addFieldToSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addExpressionFieldToSelect($alias, $expression, $fields)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addExpressionFieldToSelect');
        if (!$pluginInfo) {
            return parent::addExpressionFieldToSelect($alias, $expression, $fields);
        } else {
            return $this->___callPlugins('addExpressionFieldToSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeFieldFromSelect($field, $isAlias = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeFieldFromSelect');
        if (!$pluginInfo) {
            return parent::removeFieldFromSelect($field, $isAlias);
        } else {
            return $this->___callPlugins('removeFieldFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllFieldsFromSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllFieldsFromSelect');
        if (!$pluginInfo) {
            return parent::removeAllFieldsFromSelect();
        } else {
            return $this->___callPlugins('removeAllFieldsFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setModel($model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setModel');
        if (!$pluginInfo) {
            return parent::setModel($model);
        } else {
            return $this->___callPlugins('setModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModelName');
        if (!$pluginInfo) {
            return parent::getModelName();
        } else {
            return $this->___callPlugins('getModelName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setResourceModel($model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setResourceModel');
        if (!$pluginInfo) {
            return parent::setResourceModel($model);
        } else {
            return $this->___callPlugins('setResourceModel', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceModelName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceModelName');
        if (!$pluginInfo) {
            return parent::getResourceModelName();
        } else {
            return $this->___callPlugins('getResourceModelName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        if (!$pluginInfo) {
            return parent::getResource();
        } else {
            return $this->___callPlugins('getResource', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        if (!$pluginInfo) {
            return parent::getTable($table);
        } else {
            return $this->___callPlugins('getTable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function join($table, $cond, $cols = '*')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'join');
        if (!$pluginInfo) {
            return parent::join($table, $cond, $cols);
        } else {
            return $this->___callPlugins('join', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setResetItemsDataChanged($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setResetItemsDataChanged');
        if (!$pluginInfo) {
            return parent::setResetItemsDataChanged($flag);
        } else {
            return $this->___callPlugins('setResetItemsDataChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetItemsDataChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetItemsDataChanged');
        if (!$pluginInfo) {
            return parent::resetItemsDataChanged();
        } else {
            return $this->___callPlugins('resetItemsDataChanged', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save();
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addBindParam($name, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBindParam');
        if (!$pluginInfo) {
            return parent::addBindParam($name, $value);
        } else {
            return $this->___callPlugins('addBindParam', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        if (!$pluginInfo) {
            return parent::getIdFieldName();
        } else {
            return $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection(\Magento\Framework\DB\Adapter\AdapterInterface $conn)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnection');
        if (!$pluginInfo) {
            return parent::setConnection($conn);
        } else {
            return $this->___callPlugins('setConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        if (!$pluginInfo) {
            return parent::getConnection();
        } else {
            return $this->___callPlugins('getConnection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSize');
        if (!$pluginInfo) {
            return parent::getSize();
        } else {
            return $this->___callPlugins('getSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectSql($stringMode = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectSql');
        if (!$pluginInfo) {
            return parent::getSelectSql($stringMode);
        } else {
            return $this->___callPlugins('getSelectSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        if (!$pluginInfo) {
            return parent::setOrder($field, $direction);
        } else {
            return $this->___callPlugins('setOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        if (!$pluginInfo) {
            return parent::addOrder($field, $direction);
        } else {
            return $this->___callPlugins('addOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unshiftOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unshiftOrder');
        if (!$pluginInfo) {
            return parent::unshiftOrder($field, $direction);
        } else {
            return $this->___callPlugins('unshiftOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        if (!$pluginInfo) {
            return parent::addFieldToFilter($field, $condition);
        } else {
            return $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function distinct($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'distinct');
        if (!$pluginInfo) {
            return parent::distinct($flag);
        } else {
            return $this->___callPlugins('distinct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        if (!$pluginInfo) {
            return parent::load($printQuery, $logQuery);
        } else {
            return $this->___callPlugins('load', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        if (!$pluginInfo) {
            return parent::loadWithFilter($printQuery, $logQuery);
        } else {
            return $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData();
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetData');
        if (!$pluginInfo) {
            return parent::resetData();
        } else {
            return $this->___callPlugins('resetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadData');
        if (!$pluginInfo) {
            return parent::loadData($printQuery, $logQuery);
        } else {
            return $this->___callPlugins('loadData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function printLogQuery($printQuery = false, $logQuery = false, $sql = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'printLogQuery');
        if (!$pluginInfo) {
            return parent::printLogQuery($printQuery, $logQuery, $sql);
        } else {
            return $this->___callPlugins('printLogQuery', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterToMap($filter, $alias, $group = 'fields')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilterToMap');
        if (!$pluginInfo) {
            return parent::addFilterToMap($filter, $alias, $group);
        } else {
            return $this->___callPlugins('addFilterToMap', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function joinExtensionAttribute(\Magento\Framework\Api\ExtensionAttribute\JoinDataInterface $join, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinExtensionAttribute');
        if (!$pluginInfo) {
            return parent::joinExtensionAttribute($join, $extensionAttributesJoinProcessor);
        } else {
            return $this->___callPlugins('joinExtensionAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemObjectClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemObjectClass');
        if (!$pluginInfo) {
            return parent::getItemObjectClass();
        } else {
            return $this->___callPlugins('getItemObjectClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter($field, $value, $type = 'and')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        if (!$pluginInfo) {
            return parent::addFilter($field, $value, $type);
        } else {
            return $this->___callPlugins('addFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilter');
        if (!$pluginInfo) {
            return parent::getFilter($field);
        } else {
            return $this->___callPlugins('getFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLoaded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoaded');
        if (!$pluginInfo) {
            return parent::isLoaded();
        } else {
            return $this->___callPlugins('isLoaded', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        if (!$pluginInfo) {
            return parent::getCurPage($displacement);
        } else {
            return $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageNumber');
        if (!$pluginInfo) {
            return parent::getLastPageNumber();
        } else {
            return $this->___callPlugins('getLastPageNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageSize');
        if (!$pluginInfo) {
            return parent::getPageSize();
        } else {
            return $this->___callPlugins('getPageSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstItem');
        if (!$pluginInfo) {
            return parent::getFirstItem();
        } else {
            return $this->___callPlugins('getFirstItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastItem');
        if (!$pluginInfo) {
            return parent::getLastItem();
        } else {
            return $this->___callPlugins('getLastItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        if (!$pluginInfo) {
            return parent::getItems();
        } else {
            return $this->___callPlugins('getItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnValues($colName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnValues');
        if (!$pluginInfo) {
            return parent::getColumnValues($colName);
        } else {
            return $this->___callPlugins('getColumnValues', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsByColumnValue');
        if (!$pluginInfo) {
            return parent::getItemsByColumnValue($column, $value);
        } else {
            return $this->___callPlugins('getItemsByColumnValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemByColumnValue');
        if (!$pluginInfo) {
            return parent::getItemByColumnValue($column, $value);
        } else {
            return $this->___callPlugins('getItemByColumnValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        if (!$pluginInfo) {
            return parent::addItem($item);
        } else {
            return $this->___callPlugins('addItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeItemByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItemByKey');
        if (!$pluginInfo) {
            return parent::removeItemByKey($key);
        } else {
            return $this->___callPlugins('removeItemByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllItems');
        if (!$pluginInfo) {
            return parent::removeAllItems();
        } else {
            return $this->___callPlugins('removeAllItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        if (!$pluginInfo) {
            return parent::clear();
        } else {
            return $this->___callPlugins('clear', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function walk($callback, array $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walk');
        if (!$pluginInfo) {
            return parent::walk($callback, $args);
        } else {
            return $this->___callPlugins('walk', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function each($objMethod, $args = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'each');
        if (!$pluginInfo) {
            return parent::each($objMethod, $args);
        } else {
            return $this->___callPlugins('each', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataToAll($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataToAll');
        if (!$pluginInfo) {
            return parent::setDataToAll($key, $value);
        } else {
            return $this->___callPlugins('setDataToAll', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCurPage($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurPage');
        if (!$pluginInfo) {
            return parent::setCurPage($page);
        } else {
            return $this->___callPlugins('setCurPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPageSize($size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageSize');
        if (!$pluginInfo) {
            return parent::setPageSize($size);
        } else {
            return $this->___callPlugins('setPageSize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setItemObjectClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemObjectClass');
        if (!$pluginInfo) {
            return parent::setItemObjectClass($className);
        } else {
            return $this->___callPlugins('setItemObjectClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNewEmptyItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewEmptyItem');
        if (!$pluginInfo) {
            return parent::getNewEmptyItem();
        } else {
            return $this->___callPlugins('getNewEmptyItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml();
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($arrRequiredFields = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($arrRequiredFields);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        if (!$pluginInfo) {
            return parent::toOptionArray();
        } else {
            return $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionHash');
        if (!$pluginInfo) {
            return parent::toOptionHash();
        } else {
            return $this->___callPlugins('toOptionHash', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($idValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        if (!$pluginInfo) {
            return parent::getItemById($idValue);
        } else {
            return $this->___callPlugins('getItemById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIterator');
        if (!$pluginInfo) {
            return parent::getIterator();
        } else {
            return $this->___callPlugins('getIterator', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        if (!$pluginInfo) {
            return parent::count();
        } else {
            return $this->___callPlugins('count', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlag');
        if (!$pluginInfo) {
            return parent::getFlag($flag);
        } else {
            return $this->___callPlugins('getFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($flag, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFlag');
        if (!$pluginInfo) {
            return parent::setFlag($flag, $value);
        } else {
            return $this->___callPlugins('setFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasFlag');
        if (!$pluginInfo) {
            return parent::hasFlag($flag);
        } else {
            return $this->___callPlugins('hasFlag', func_get_args(), $pluginInfo);
        }
    }
}
