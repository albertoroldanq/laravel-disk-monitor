<?php

use Albertoroldanq\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Albertoroldanq\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Support\Facades\Storage;


it('will record the file count for a disk', function() {
    $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();

    $this->assertEquals(0, $entry->file_count);

    Storage::put('test.txt', 'test');
    $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();

    $this->assertEquals(1, $entry->file_count);
});
