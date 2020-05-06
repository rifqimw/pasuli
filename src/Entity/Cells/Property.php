<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cells;

use pasuli\Bank\Price;

/**
 * Class PropertyCell
 */
class Property extends AbstractCell
{
    /**
     * Property street
     *
     * @var string
     */
    protected $street;

    /**
     * Property price
     *
     * @var Price
     */
    protected $price;

    /**
     * PropertyCell constructor.
     *
     * @param string $title
     * @param string $street
     * @param Price  $price
     */
    public function __construct(string $title, string $street, Price $price)
    {
        parent::__construct($title);

        $this->street = $street;
        $this->price = $price;
    }
}
