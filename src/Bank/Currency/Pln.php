<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Bank\Currency;

use pasuli\Bank\AbstractCurrency;

/**
 * Class Pln
 */
class Pln extends AbstractCurrency
{
    /**
     * Pln constructor.
     *
     * @param string $code
     * @param string $print
     */
    public function __construct($code = 'PLN', $print = 'zł')
    {
        $this->code = $code;
        $this->print = $print;
    }
}
