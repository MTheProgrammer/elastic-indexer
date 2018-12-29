<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Api;

use MTheProgrammer\ElasticIndexer\Domain\IndexGroupVersionInterface;

/**
 * Index Group aggregates indices
 */
interface IndexGroupInterface
{
    /**
     * @param IndexGroupVersionInterface $indexGroupVersion
     * @return void
     */
    public function changeVersion(IndexGroupVersionInterface $indexGroupVersion): void;
}