<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Bank\Currency;

use pasuli\Bank\AbstractCurrency;

/**
 * Class Usd
 */
class Usd extends AbstractCurrency
{
    /**
     * Usd constructor.
     *
     * @param string $code
     * @param string $print
     */
    public function __construct($code = 'USD', $print = '$')
    {
        $this->code = $code;
        $this->print = $print;
    }
}
