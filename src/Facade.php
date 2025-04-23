<?php

namespace Angell007\HablameSms;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @see \Angell007\HablameSms\Client
 * @method static array sendMessage(string $phoneNumbers, string $sms, string $datetime = null, bool $flash = false, bool $priority = false)
 */
class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hablame-sms';
    }
}
