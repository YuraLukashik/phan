<?php

class A {
    // @var int
    const ALPHA = 42;

    public function str() : string {
        return 'string';
    }

    public function instance() : A {
        return $this;
    }
}

class B {
    public function __construct() {
        $str = 'string';

        $a = new A;

        $alpha = A::$alpha;
        $str = $a->str();
        $this->a = $a->instance();
    }
}
