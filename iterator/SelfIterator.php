<?php

interface SelfIterator {
    public function hasNext(): bool;
    public function next();
}