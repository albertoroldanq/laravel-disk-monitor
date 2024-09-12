<?php

use Albertoroldanq\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Albertoroldanq\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake('local');
    Storage::fake('anotherDisk');
});

it('will record the file count for a single disk', function () {
    $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    $this->assertEquals(0, $entry->file_count);

    Storage::put('test.txt', 'test');
    $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    $this->assertEquals(1, $entry->file_count);
});

it('will record the file count for multiple disks', function () {
    config()->set('disk-monitor.disk_names', ['local', 'anotherDisk']);
    Storage::disk('anotherDisk')->put('test.txt', 'text');

    $this->artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entries = DiskMonitorEntry::get();
    $this->assertCount(2, $entries);

    $this->assertEquals('local', $entries[0]->disk_name);
    $this->assertEquals(0, $entries[0]->file_count);

    $this->assertEquals('anotherDisk', $entries[1]->disk_name);
    $this->assertEquals(1, $entries[1]->file_count);
});

