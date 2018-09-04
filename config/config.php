<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC Scheme
    |--------------------------------------------------------------------------
    | URI scheme of Dashcoin Core's JSON-RPC server.
    |
    | Use https to enable SSL connections with Core,
    | but this is strongly discouraged by developers.
    |
    */

    'scheme' => env('DASHCOIND_SCHEME', 'http'),

    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC Host
    |--------------------------------------------------------------------------
    | Tells service provider which hostname or IP address
    | Dashcoin Core is running at.
    |
    | If Dashcoin Core is running on the same PC as
    | laravel project use localhost or 127.0.0.1.
    |
    | If you're running Dashcoin Core on the different PC,
    | you may also need to add rpcallowip=<server-ip-here> to your Dashcoin.conf
    | file to allow connections from your laravel client.
    |
    */

    'host' => env('DASHCOIND_HOST', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC Port
    |--------------------------------------------------------------------------
    | The port at which Dashcoin Core is listening for JSON-RPC connections.
    | Default is 22555 for mainnet and 22556 for testnet.
    | You can also directly specify port by adding rpcport=<port>
    | to Dashcoin.conf file.
    |
    */

    'port' => env('DASHCOIND_PORT', 9998),

    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC User
    |--------------------------------------------------------------------------
    | Username needs to be set exactly as in Dashcoin.conf file
    | rpcuser=<username>.
    |
    */

    'user' => env('DASHCOIND_USER', ''),

    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC Password
    |--------------------------------------------------------------------------
    | Password needs to be set exactly as in Dashcoin.conf file
    | rpcpassword=<password>.
    |
    */

    'password' => env('DASHCOIND_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Dashcoind JSON-RPC Server CA
    |--------------------------------------------------------------------------
    | If you're using SSL (https) to connect to your Dashcoin Core
    | you can specify custom ca package to verify against.
    | Note that using Dashcoin JSON-RPC over SSL is strongly discouraged.
    |
    */

    'ca' => null,
];
