<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Bank;

/**
 * Class Price
 */
class Price
{
    /**
     * Integer price
     *
     * @var int
     */
    private $price;

    /**
     * Currency
     *
     * @var AbstractCurrency
     */
    private $currency;

    /**
     * Price constructor.
     *
     * @param int              $price
     * @param AbstractCurrency $currency
     */
    public function __construct(int $price, AbstractCurrency $currency)
    {
        $this->price = $price;
        $this->currency = $currency;
    }

    /**
     * Create price from float
     *
     * @param float            $amount
     * @param AbstractCurrency $currency
     *
     * @return static
     */
    public static function fromFloat(float $amount, AbstractCurrency $currency)
    {
        return new static(
            (int) ($amount * 100),
            $currency
        );
    }
}
