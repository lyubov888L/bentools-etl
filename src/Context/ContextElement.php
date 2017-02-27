<?php

namespace BenTools\ETL\Context;

class ContextElement implements ContextElementInterface {

    private $id;
    private $extractedData;
    private $transformedData;
    private $skip = false;
    private $stop = false;
    private $flush = false;

    /**
     * @inheritDoc
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @inheritDoc
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function setExtractedData($data): void {
        $this->extractedData = $data;
    }

    /**
     * @inheritDoc
     */
    public function getExtractedData() {
        return $this->extractedData;
    }

    /**
     * @inheritDoc
     */
    public function setTransformedData($data): void {
        $this->transformedData = $data;
    }

    /**
     * @inheritDoc
     */
    public function getTransformedData() {
        return $this->transformedData;
    }

    /**
     * @inheritDoc
     */
    public function skip(): void {
        $this->skip = true;
    }

    /**
     * @inheritDoc
     */
    public function stop(bool $flush = true): void {
        $this->stop = true;
        $this->flush = $flush;
    }

    /**
     * @inheritDoc
     */
    public function flush(): void {
        $this->flush = true;
    }

    /**
     * @inheritDoc
     */
    public function shouldSkip(): bool {
        return $this->skip;
    }

    /**
     * @inheritDoc
     */
    public function shouldStop(): bool {
        return $this->stop;
    }

    /**
     * @inheritDoc
     */
    public function shouldFlush(): bool {
        return $this->flush;
    }
}