<?php

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
     * Description cell
     * 
     * @var string
     */
    protected $desc;

    /**
     * Cell constructor.
     *
     * @param string $title
     * @param string $desc
     */
    public function __construct(string $title, string $desc)
    {
        $this->title = $title;
        $this->desc = $desc;
    }
}
