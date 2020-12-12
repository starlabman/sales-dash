<?php
namespace App\Service;

class Stats
{
    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    public static function newOrders() : int
    {
        return rand(5, 100);

    }

    public static function salesAmount() : int
    {
        return rand(100, 1000);

    }

    public static function satisfactions() : int
    {
        return rand(90, 100);

    }

}