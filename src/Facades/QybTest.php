<?php
namespace Qyb\Facades;

use Illuminate\Support\Facades\Facade;

class QybTest extends Facade{
    protected static function getFacadeAccessor()
    {
        return "QybTest";
    }
}

