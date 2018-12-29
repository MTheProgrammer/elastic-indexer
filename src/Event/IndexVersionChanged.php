<?php
declare(strict_types=1);

use MTheProgrammer\ElasticIndexer\Domain\IndexVersionInterface;

/**
 * Event dispatched when index version has been changed
 */
class IndexVersionChanged
{
    /**
     * @var IndexVersionInterface
     */
    private $indexVersion;

    /**
     * @param IndexVersionInterface $indexVersion
     */
    public function __construct(IndexVersionInterface $indexVersion)
    {
        $this->indexVersion = $indexVersion;
    }

    /**
     * @return IndexVersionInterface
     */
    public function getIndexVersion(): IndexVersionInterface
    {
        return $this->indexVersion;
    }
}