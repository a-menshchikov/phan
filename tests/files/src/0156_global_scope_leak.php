<?php

class C1 {}

$c = new C1;

class C2 {
    function f(string $s) : int {
        if (false) {
            $c = $s;
        }
        return $c;  // Phan infers that the above branch is never taken
    }
}
