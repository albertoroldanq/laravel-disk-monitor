<?php

namespace Albertoroldanq\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Albertoroldanq\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Albertoroldanq\DiskMonitor\DiskMonitor::class;
    }
}
