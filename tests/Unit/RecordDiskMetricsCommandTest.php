<?php

use Albertoroldanq\DiskMonitor\Commands\RecordDiskMetricsCommand;

use function Pest\Laravel\artisan;

it('outputs a string', function () {

    artisan(RecordDiskMetricsCommand::class)->expectsOutput('All done');
});
