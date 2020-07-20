<?php

namespace Jbcommerce\Helloworld\Cron;

class Cron
{
    private $_import;
    private $_logger;

    public function __construct(
        \Jbcommerce\Helloworld\Model\Import $import,
        \Psr\Log\LoggerInterface $logger,
        string $name = null
    )
    {
        $this->_import = $import;
        $this->_logger = $logger;

        parent::__construct($name);
    }

    public function execute()
    {
        $this->_logger->info('Starting import');
        $this->_import->execute();
    }
}
