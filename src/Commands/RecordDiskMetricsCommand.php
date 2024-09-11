<?php

namespace AlbertoRoldanQ\DiskMonitor\Commands;

use Illuminate\Console\Command;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'record-disk-metrics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
