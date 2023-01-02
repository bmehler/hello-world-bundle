<?php

namespace Bmehler\HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BmehlerHelloWorldBundle extends Bundle
{
     function __construct() {
        $text = "Hello, Jeny!";
        print $text;
    }
}