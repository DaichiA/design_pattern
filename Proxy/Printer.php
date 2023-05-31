<?php

namespace DesignPattern\Proxy;

require_once __DIR__ . '/Printable.php';
class Printer implements Printable
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->heavyJob('Printerインスタンス (' . $name .') を生成中');
    }

    public function setPrinterName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrinterName(): string
    {
        return $this->name;
    }

    // 名前付きで表示
    public function print(string $string): void
    {
        echo '===' . $this->name . "===\n";
        echo $string . "\n";
    }

    public function heavyJob(string $msg)
    {
        echo $msg . "\n";
        for ($i = 0; $i < 5; $i++) {
            sleep(1);
            echo '.';
        }
        echo "完了\n";
    }
}