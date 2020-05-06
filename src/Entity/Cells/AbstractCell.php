<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cells;

/**
 * Class Cell
 */
class AbstractCell
{
    /**
     * Title cell
     *
     * @var string
     */
    protected $title;

    /**
     * Cell constructor.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
