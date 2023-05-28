<?php

namespace DesignPattern\Observer;

abstract class NumberGenerator
{
    private array $observers;

    // Observerを追加する
    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    // Observerを削除する
    public function deleteObserver(Observer $observer)
    {
        $this->observers = array_diff($this->observers, [$observer]);
        $this->observers = array_values($this->observers);
    }

    // Observerへ通知する
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    // 数を取得する
    public abstract function getNumber(): int;

    // 数を生成する
    public abstract function execute(): void;
}