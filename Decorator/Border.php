<?php

require_once __DIR__ . '/Display.php';
abstract class Border extends Display
{
    protected Display $display;  // この飾り枠が包んでいる中身

    protected function __construct(Display $display) {
        $this->display = $display;
    }
}