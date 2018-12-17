<?php

namespace App;

use Illuminate\Support\Facades\Session;
use Colloquy\IdentifierResolverInterface;

class SessionIdentifierResolver implements IdentifierResolverInterface
{
    /**
     * Get a unique string that identifies a context. In this case, it returns
     * a session id. Context will be preserved for the session duration.
     * A controller instance is passed in to provide flexibility.
     *
     * @param  mixed $controller A controller instance
     * @return string
     */
    public function get($controller): string
    {
        return Session::getId();
    }
}
