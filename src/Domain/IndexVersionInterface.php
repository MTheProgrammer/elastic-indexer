<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain;

interface IndexVersionInterface
{
    /**
     * @return int
     */
    public function getCurrentVersion(): int;
}