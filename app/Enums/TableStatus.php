<?php

namespace App\Enums;


enum TableStatus:String 
{
    case Pending = 'Pending';
    case Avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
}