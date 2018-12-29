<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Api;

interface ElasticSearchConfigInterface
{
    /**
     * @return string[]
     */
    public function getHosts(): array;
}
