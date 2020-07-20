<?php

namespace Jbcommerce\Helloworld\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Import extends Command
{
    private $_import;

    public function __construct(
        \Jbcommerce\Helloworld\Model\Import $import,
        string $name = null
    )
    {
        $this->_import = $import;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('jbcommerce:import');
        $this->setDescription('Run product import');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Starting...</info>');
        $this->_import->execute();
        $output->writeln('<info>Finished...</info>');
    }
}
