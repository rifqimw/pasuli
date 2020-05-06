<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity;

/**
 * Class Character
 */
abstract class Character
{
    const CAR = 'car';
    const SHIP = 'ship';

    /**
     * Get list
     *
     * @return array
     */
    public static function getList(): array
    {
        return [
            static::CAR,
            static::SHIP,
        ];
    }
}
