<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli;

use pasuli\Factory\BoardFactory;

/**
 * Class Game
 */
class Game
{
    /** @var Board */
    private $board;

    public function __construct(BoardFactory $boardFactory)
    {
        $this->board = $boardFactory->build();
    }
}
