<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cells;

use pasuli\Bank\Price;

/**
 * Class IncomeTax
 */
class IncomeTax extends AbstractCell
{
    /**
     * Description
     *
     * @var string
     */
    protected $description;

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
     * @param string $description
     * @param Price  $price
     */
    public function __construct(string $title, string $description, Price $price)
    {
        parent::__construct($title);

        $this->description = $description;
        $this->price = $price;
    }
}
