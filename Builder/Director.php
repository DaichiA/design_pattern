<?php

namespace DesignPattern\Builder;

require_once 'Builder.php';

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder) {
        $this->builder = $builder;
    }

    public function construct(): void {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems([
            'おはようございます。',
            'こんにちは。',
        ]);
        $this->builder->makeString('夜に');
        $this->builder->makeItems([
            'こんばんは。',
            'おやすみなさい。',
            'さようなら。',
        ]);
        $this->builder->close();
    }
}