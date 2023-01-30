<?php

namespace App\Enums;

enum TableStatus: string
{
  case Complicated = 'Complicated';
  case Available = 'Available';
  case Unavailable = 'Unavailable';
}