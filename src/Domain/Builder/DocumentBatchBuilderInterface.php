<?php
declare(strict_types=1);

namespace MTheProgrammer\ElasticIndexer\Domain\Builder;

use MTheProgrammer\ElasticIndexer\Domain\DocumentBatchInterface;
use MTheProgrammer\ElasticIndexer\Domain\DocumentInterface;

interface DocumentBatchBuilderInterface
{
    /**
     * @param DocumentInterface $document
     * @return void
     */
    public function add(DocumentInterface $document): void;

    /**
     * @return DocumentBatchInterface
     */
    public function build(): DocumentBatchInterface;
}