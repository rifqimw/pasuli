<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity;

use pasuli\Bank\Price;

/**
 * Class Player
 */
class Player
{
    /**
     * Character type
     *
     * @var string
     */
    private $characterType;

    /**
     * Player name
     *
     * @var string
     */
    private $name;

    /**
     * Balance
     *
     * @var Price
     */
    private $balance;
}
