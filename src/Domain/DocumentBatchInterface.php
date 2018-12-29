<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain;

interface DocumentBatchInterface
{
    /**
     * @return DocumentInterface
     */
    public function getCurrent(): DocumentInterface;

    /**
     * @return DocumentInterface|null
     */
    public function getNext(): ?DocumentInterface;

    /**
     * @return bool
     */
    public function hasNext(): bool;
}