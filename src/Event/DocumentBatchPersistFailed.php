<?php
declare(strict_types=1);

use MTheProgrammer\ElasticIndexer\Domain\DocumentBatchInterface;

/**
 * Event dispatched when there was issue during Document Batch indexing
 */
class DocumentBatchPersistFailed
{
    /**
     * @var DocumentBatchInterface
     */
    private $documentBatch;

    /**
     * @var string
     */
    private $reason;

    /**
     * @param DocumentBatchInterface $documentBatch
     * @param string $reason
     */
    public function __construct(DocumentBatchInterface $documentBatch, string $reason)
    {
        $this->documentBatch = $documentBatch;
        $this->reason = $reason;
    }

    /**
     * @return DocumentBatchInterface
     */
    public function getDocumentBatch(): DocumentBatchInterface
    {
        return $this->documentBatch;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
}