<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain;

interface IndexGroupVersionInterface
{
    /**
     * @return int
     */
    public function getCurrentVersion(): int;
}