<?php

namespace App\Enum;

use App\Traits\EnumValues;

/** Ship:lenght of ship*/
enum Ship: int
{
    use EnumValues;
    case CRUISER = 3;
    case SUBMARINE = 2;
    case CORVETTE = 1;
}
