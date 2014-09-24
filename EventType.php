<?php
/**
 * @copyright Copyright (c) 2014 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\google\maps;


class EventType
{
    const DEFAULT_EVENT = 'DEFAULT';
    const DEFAULT_ONCE = 'DEFAULT_ONCE';
    const DOM = 'DOM';
    const DOM_ONCE = 'DOM_ONCE';

    public static function getIsValid($value)
    {
        return in_array(
            $value,
            [
                static::DEFAULT_EVENT,
                static::DEFAULT_ONCE,
                static::DOM,
                static::DOM_ONCE
            ]
        );
    }
} 