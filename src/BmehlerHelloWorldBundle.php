<?php

namespace Bmehler\HelloWorldBundle;

use Bmehler\HelloWorldBundle\DependencyInjection\BmehlerHelloWorldExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BmehlerHelloWorldBundle extends Bundle
{
    public function getContainerExtension(): BmehlerHelloWorldExtension
    {
        return new BmehlerHelloWorldExtension();
    }
}