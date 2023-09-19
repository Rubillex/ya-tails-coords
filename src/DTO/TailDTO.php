<?php
/**
 * User: Rubillex
 * Date: 19.09.2023 18:26
 */

namespace Rubillex\YaTailsCoords\DTO;

class TailDTO
{
    public function __construct(
        protected float $tailX,
        protected float $tailY,
    )
    {
    }

    public function getTailX(): float
    {
        return $this->tailX;
    }

    public function getTailY(): float
    {
        return $this->tailY;
    }

    public function toArray(): array
    {
        return [
            'tail_x' => $this->tailX,
            'tail_y' => $this->tailY,
        ];
    }
}
