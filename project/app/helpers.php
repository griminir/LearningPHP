<?php
declare(strict_types=1);

function formatCurrency(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formateDate(string $date): string
{
    return date('j M, Y', strtotime($date));
}