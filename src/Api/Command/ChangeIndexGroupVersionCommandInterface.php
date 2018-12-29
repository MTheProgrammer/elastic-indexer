<?php
declare(strict_types=1);

use MTheProgrammer\ElasticIndexer\Domain\IndexGroupVersionInterface;

interface ChangeIndexGroupVersionCommandInterface
{
    public function getVersion(): IndexGroupVersionInterface;
}
