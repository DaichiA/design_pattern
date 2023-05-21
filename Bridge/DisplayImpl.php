<?php

abstract class DisplayImpl
{
    public abstract function rawOpen(): void;
    public abstract function rawPrint(): void;
    public abstract function rawClose(): void;
}