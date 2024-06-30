<?php

namespace App\Enums;

enum TableStatus: String
{
    case Pending = 'Pending';
    case Available = 'Available'; 
    case Unavailable = 'Unavailable'; 
}
