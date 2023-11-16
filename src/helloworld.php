<?php

namespace ghspacescloud;

class HelloWorld
{
    public static function sayHello()
    {
        exec('whoami', $output);
        return $output[0];
    }
}
