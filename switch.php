<?php

$paymentstatus = 'paid';
// switch uses loose comparison == and requires break
// switch lets you use multiple statements for a case
switch ($paymentstatus) {
    case 'paid':
        echo 'the payment status is paid';
        // do something else
        // do another thing
        break;
    case 'pending':
        echo 'the payment status is pending';
        break;
    case 'failed':
    case 'rejected':
    case 'cancelled':
        echo 'the payment status is failed';
        break;
    default:
        echo 'the payment status is unknown';
        break;
}
echo '<br>';
// php 8.0 only
// match uses strict comparison === and doesn't require break
// match does not allow multiple statements for a case
$paymentStatusDisplay = match($paymentstatus) {
    'paid' => 'the payment status is paid',
    'pending' => 'the payment status is pending',
    'failed', 'rejected', 'cancelled' => 'the payment status is failed',
    default => 'the payment status is unknown',
};

echo $paymentStatusDisplay;