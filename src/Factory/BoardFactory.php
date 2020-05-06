<?php
/**
 * @license Sergii Akimov <akimovpost@icloud.com>
 */

namespace pasuli\Factory;

use pasuli\Bank\Currency\Eur;
use pasuli\Bank\Price;
use pasuli\Entity\Board;
use pasuli\Entity\Cards\Chance;
use pasuli\Entity\Cards\CommunityChest;
use pasuli\Entity\Cells as Cells;

/**
 * Class BoardFactory
 */
class BoardFactory
{
    /**
     * Build board
     *
     * @return Board
     */
    public function build()
    {
        $board = new Board();

        $this
            ->addCells($board)
            ->addCards($board);

        return $board;
    }

    /**
     * Add cells
     *
     * @param Board $board
     *
     * @return BoardFactory
     */
    protected function addCells(Board $board): self
    {
        $currency = new Eur();

        $board->addCell(new Cells\Action('Start'));
        $board->addCell(new Cells\Property('Warszawa', 'Al. Jerozolimskie', Price::fromFloat(60, $currency)));
        $board->addCell(new Cells\CommunityChest());
        $board->addCell(new Cells\Property('Warszawa', 'Ul. Marszałkowska', Price::fromFloat(60, $currency)));
        $board->addCell(new Cells\IncomeTax('Income tax', 'Pay 200', Price::fromFloat(200, $currency)));
        $board->addCell(new Cells\Property('Reading railroad', '', Price::fromFloat(200, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(100, $currency)));
        $board->addCell(new Cells\Chance());
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(100, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(120, $currency)));

        $board->addCell(new Cells\Action('Jail'));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(140, $currency)));
        $board->addCell(new Cells\Property('Electric', '', Price::fromFloat(150, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(140, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(160, $currency)));
        $board->addCell(new Cells\Property('Railroad', '', Price::fromFloat(200, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(180, $currency)));
        $board->addCell(new Cells\CommunityChest());
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(180, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(200, $currency)));

        $board->addCell(new Cells\Action("Free Parking"));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(220, $currency)));
        $board->addCell(new Cells\Chance());
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(220, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(240, $currency)));
        $board->addCell(new Cells\Property('Railroad', '', Price::fromFloat(200, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(260, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(260, $currency)));
        $board->addCell(new Cells\Property('Water', '', Price::fromFloat(150, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(280, $currency)));

        $board->addCell(new Cells\Action("Go to jail"));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(300, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(300, $currency)));
        $board->addCell(new Cells\CommunityChest());
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(320, $currency)));
        $board->addCell(new Cells\Property('Railroad', '', Price::fromFloat(200, $currency)));
        $board->addCell(new Cells\Chance());
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(350, $currency)));
        $board->addCell(new Cells\IncomeTax('Income tax', 'Pay 200', Price::fromFloat(100, $currency)));
        $board->addCell(new Cells\Property('Prop', 'Prop', Price::fromFloat(400, $currency)));

        return $this;
    }

    protected function addCards(Board $board): self
    {
        $board->addChanceCard(new Chance("Get 50 from bank"));
        $board->addCommunityCard(new CommunityChest("Get 100 from bank"));

        return $this;
    }
}
