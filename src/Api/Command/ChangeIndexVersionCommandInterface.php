<?php
declare(strict_types=1);

use MTheProgrammer\ElasticIndexer\Domain\IndexVersionInterface;

interface ChangeIndexVersionCommandInterface
{
    public function getVersion(): IndexVersionInterface;
}
