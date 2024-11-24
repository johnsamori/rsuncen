<?php

namespace PHPMaker2025\rsuncen2025;

// Action type
enum ActionType: string
{
    case POSTBACK = "P";
    case REDIRECT = "R";
    case AJAX = "A";
    case MULTIPLE = "M";
    case SINGLE = "S";
    case CUSTOM = "C";
}
