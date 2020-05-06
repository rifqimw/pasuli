<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cards;

/**
 * Class AbstractCard
 */
abstract class AbstractCard
{
    /**
     * Card title
     *
     * @var string
     */
    protected $title;

    /**
     * AbstractCard constructor.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
