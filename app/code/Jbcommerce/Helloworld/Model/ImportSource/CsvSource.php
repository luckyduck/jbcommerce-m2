<?php

namespace Jbcommerce\Helloworld\Model\ImportSource;

use Jbcommerce\Helloworld\Api\ImportSourceInterface;

class CsvSource implements ImportSourceInterface
{
    public function getImportData()
    {
        // - get input directory (config)
        // - scan for new files
        // - process and return data

        return ['name' => 'TEST'];
    }
}
