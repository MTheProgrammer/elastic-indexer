<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Api;

use MTheProgrammer\ElasticIndexer\Domain\DocumentBatchInterface;
use MTheProgrammer\ElasticIndexer\Domain\DocumentInterface;
use MTheProgrammer\ElasticIndexer\Domain\IndexMappingInterface;

interface IndexInterface
{
    /**
     * @param DocumentBatchInterface $documentBatch
     * @return void
     */
    public function persistDocumentBatch(DocumentBatchInterface $documentBatch): void;

    /**
     * @param DocumentInterface $document
     * @return void
     */
    public function updateDocument(DocumentInterface $document): void;

    /**
     * @return void
     */
    public function create(): void;

    /**
     * @return void
     */
    public function delete(): void;

    /**
     * @param IndexMappingInterface $indexMapping
     * @return void
     */
    public function updateMapping(IndexMappingInterface $indexMapping): void;
}
