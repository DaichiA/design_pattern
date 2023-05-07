<?php

// Iterableが予約語なのでSelfIterableにした
interface SelfIterable {
    public function iterator(): SelfIterator;
}
