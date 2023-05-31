<?php

namespace DesignPattern\Proxy;

require_once __DIR__ . '/Printer.php';
require_once __DIR__ . '/Printable.php';

class PrinterProxy implements Printable
{
    private string $name;
    private ?Printer $real;

    public function __construct(string $name) {
        $this->name = $name;
        $this->real = null;
    }

    public function setPrinterName(string $name): void {
        if ($this->real != null) {
            $this->real->setPrinterName($name); // 「本人」にも設定する
        }
        $this->name = $name;
    }

    public function getPrinterName(): string {
        return $this->name;
    }

    public function print(string $string): void {
        $this->realize();
        $this->real->print($string);
    }

    // 「本人」を生成
    private function realize(): void {
        if ($this->real == null) {
            $this->real = new Printer($this->name);
        }
    }
}