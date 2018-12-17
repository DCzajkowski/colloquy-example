<?php

namespace App;

use BadMethodCallException;
use Colloquy\ColloquyAnnotations;

trait ColloquyContexts
{
    public function __call($method, $arguments)
    {
        if (!method_exists($this, $method)) {
            throw new BadMethodCallException(vsprintf('Call to undefined method %s::%s()', [
                get_class($this),
                $method,
            ]));
        }

        ColloquyAnnotations::handle($this, $method);

        return $this->{$method}(...$arguments);
    }

    public function __destruct()
    {
        ColloquyAnnotations::endTransaction($this);
    }
}
