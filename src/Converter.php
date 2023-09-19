<?php
/**
 * User: Rubillex
 * Date: 19.09.2023 18:26
 */

namespace Rubillex\YaTailsCoords;

use Rubillex\YaTailsCoords\DTO\TailDTO;

final class Converter
{
    public static function CoordsToTailsTranslate($lat, $lon): TailDTO
    {
        $latitude = $lat * M_PI / 180;
        $longitude = $lon * M_PI / 180;

        $Rn = 6378137;
        $e = 0.0818191908426;
        $esinLat = $e * sin($latitude);

        $tanTemp = tan(M_PI / 4 + $latitude / 2);
        $powTemp = pow(tan(M_PI / 4 + asin($esinLat) / 2), $e);
        $U = $tanTemp / $powTemp;

        $merkatLat = $Rn * log($U);
        $merkatLon = ($Rn * $longitude);
        $equatorLength = 40075016.685578488;
        $worldSize = pow(2, 31);
        $a = $worldSize / $equatorLength;
        $b = $equatorLength / 2;

        $tailX = floor((($b + $merkatLon) * $a) / 256);
        $tailY = floor((($b - $merkatLat) * $a) / 256);

        return new TailDTO(
            $tailX,
            $tailY
        );
    }
}