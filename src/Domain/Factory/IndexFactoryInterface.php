<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain\Factory;

use MTheProgrammer\ElasticIndexer\Api\IndexInterface;

interface IndexFactoryInterface
{
    /**
     * @return IndexInterface
     */
    public function create(): IndexInterface;
}
