<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Bank\Currency;

use pasuli\Bank\AbstractCurrency;

/**
 * Class Eur
 */
class Eur extends AbstractCurrency
{
    /**
     * Pln constructor.
     *
     * @param string $code
     * @param string $print
     */
    public function __construct($code = 'EUR', $print = '€')
    {
        $this->code = $code;
        $this->print = $print;
    }
}
