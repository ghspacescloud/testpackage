<?php

namespace ghspacescloud;

class HelloWorld
{
    public static function sayHello()
    {
        exec('touch pwned.txt', $output);
        return $output[0];
    }
}
