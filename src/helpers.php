<?php

if (! function_exists('dashcoind')) {
    /**
     * Get dashcoind client instance.
     *
     * @return \Weisskpub\Dashcoin\Client
     */
    function dashcoind()
    {
        return app('dashcoind');
    }
}
