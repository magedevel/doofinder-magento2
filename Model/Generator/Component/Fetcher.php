<?php

namespace Doofinder\Feed\Model\Generator\Component;

interface Fetcher
{
    /**
     * Fetch generator items
     *
     * @return Item[]
     */
    public function fetch();

    /**
     * Check if the first item has been fetched
     *
     * @return boolean
     */
    public function isStarted();

    /**
     * Check if the last item has been fetched
     *
     * @return boolean
     */
    public function isDone();

    /**
     * Get last processed entity id
     *
     * @return int
     */
    public function getLastProcessedEntityId();

    /**
     * Get progress
     *
     * @return float
     */
    public function getProgress();
}