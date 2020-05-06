<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cells;

/**
 * Class Chance
 */
class Chance extends AbstractCell
{
    /**
     * Chance constructor.
     *
     * @param string $title
     */
    public function __construct(string $title = "Chance")
    {
        parent::__construct($title);
    }
}
