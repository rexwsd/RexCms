<?php


namespace App\Extension\Log\Processors;


use Monolog\Handler\StreamHandler;

class CustomHandler extends StreamHandler
{
    protected function write(array $record)
    {
        parent::write($record);
    }
}
