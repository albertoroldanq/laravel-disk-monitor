<?php

namespace Albertoroldanq\DiskMonitor\Commands;

use Albertoroldanq\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

class RecordDiskMetricsCommand extends Command
{
    public $signature = 'disk-monitor:record-metrics';

    public $description = 'Record the metrics of a disk';

    public function handle(): int
    {
        collect(config('disk-monitor.disk_names'))
        ->each(fn(string $diskName) => $this->recordMetrics($diskName));

        $this->comment('All done');

        return self::SUCCESS;
    }

    protected function recordMetrics(string $diskName): void
    {
        $this->info("Reocrding metrics for disk `{$diskName}`...");
        $disk = Storage::disk($diskName);

        $fileCount = count(Storage::disk($diskName)->allFiles());

        DiskMonitorEntry::create([
            'disk_name' => $diskName,
            'file_count' => $fileCount,
        ]);

        $fileCount = count($disk->allFiles());
    }
}
