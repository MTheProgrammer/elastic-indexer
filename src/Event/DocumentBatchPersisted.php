<?php
declare(strict_types=1);

use MTheProgrammer\ElasticIndexer\Domain\DocumentBatchInterface;

/**
 * Event dispatched after Document Batch has been indexed
 */
class DocumentBatchPersisted
{
    /**
     * @var DocumentBatchInterface
     */
    private $document;

    /**
     * @param DocumentBatchInterface $document
     */
    public function __construct(DocumentBatchInterface $document)
    {
        $this->document = $document;
    }

    /**
     * @return DocumentBatchInterface
     */
    public function getDocument(): DocumentBatchInterface
    {
        return $this->document;
    }
}