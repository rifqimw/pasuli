<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Entity\Cells;

/**
 * Class CommunityChest
 */
class CommunityChest extends AbstractCell
{
    /**
     * CommunityChest constructor.
     *
     * @param string $title
     */
    public function __construct(string $title = "Community chest")
    {
        parent::__construct($title);
    }
}
