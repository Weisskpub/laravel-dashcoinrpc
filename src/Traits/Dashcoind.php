<?php

namespace Weisskpub\Dashcoin\Traits;

trait Dashcoind
{
    public function dashcoind()
    {
        return app('dashcoind');
    }
}
