<?php

namespace AlbertoRoldanQ\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlbertoRoldanQ\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlbertoRoldanQ\DiskMonitor\DiskMonitor::class;
    }
}
