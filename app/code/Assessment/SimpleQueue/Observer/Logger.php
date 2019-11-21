<?php

namespace Assessment\SimpleQueue\Observer;

class Logger
{
    /**
     * @var Constant CONSUMER_LOG
     */
    const CONSUMER_LOG = '/var/log/consumer.log';
    /**
     * @var LoggerInterface
     */
    private $_logger;
    /**
     * Data constructor.
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }

    /**
     * Runs the consumerLog method
     * @param $message
     */
    public function execute($message)
    {
        try{
            $this->consumerLog($message);
        } catch (\Exception $e) {
            $this->_logger->debug('Error: ' . $e->getMessage());
        }
    }
    /**
     * Logs data to the consumer log file
     * @param $data
     */
    private function consumerLog($data)
    {
        // Could have used Monolog implementation but this is a bit quicker to implement
        // TODO: implement Monolog implementation
        $writer = new \Zend\Log\Writer\Stream(BP . self::CONSUMER_LOG);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($data);
    }
}