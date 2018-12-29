<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain;

interface DocumentInterface
{
    /**
     * @return array
     */
    public function getPayload(): array;
}
