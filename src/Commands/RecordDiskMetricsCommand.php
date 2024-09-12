<?php

namespace Albertoroldanq\DiskMonitor\Commands;

use Albertoroldanq\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of a disk';

    public function handle(): int
    {
        $this->comment('Recording metrics...');

        $diskName = config('disk-monitor.disk_name');
        $fileCount = count(Storage::disk($diskName)->allFiles());

        DiskMonitorEntry::create([
           'disk_name' => $diskName,
            'file_count' => $fileCount,
        ]);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
