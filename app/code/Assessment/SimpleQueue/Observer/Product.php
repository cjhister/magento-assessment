<?php

namespace Assessment\SimpleQueue\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\MessageQueue\PublisherInterface;

/**
 * Class Product
 * @package Assessment\SimpleQueue\Observer
 */
class Product implements ObserverInterface
{
    /**
     * @var PublisherInterface
     */
    private $_publisher;
    /**
     * @var LoggerInterface
     */
    private $_logger;
    /**
     * Data constructor.
     * @param PublisherInterface $publisher
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        PublisherInterface $publisher,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_publisher = $publisher;
        $this->_logger = $logger;
    }
    /**
     * Captures the sku from the observer and publishes to the queue
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        try{
            $product = $observer->getProduct();
            $sku = $product->getSku();
            $this->_publisher->publish('sku.logger', $sku);
        } catch (\Exception $e) {
        }
    }
}