<?php

function getTicket()
{
    $cart = FetchCart::selectCart();
    return $cart;
}