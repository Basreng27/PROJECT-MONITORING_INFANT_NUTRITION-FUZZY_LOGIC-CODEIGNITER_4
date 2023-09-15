<?php

namespace App\Helpers;

function format_indo($date)
{
    $date_indo = date("d-m-Y", strtotime($date));

    return $date_indo;
}
