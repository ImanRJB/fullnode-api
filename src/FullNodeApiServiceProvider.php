<?php

namespace FullNodeApi;

use Illuminate\Support\ServiceProvider;

class FullNodeApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        // For load config files
        if (file_exists(__DIR__ . '/../src/config/getblock.php')) {
            $this->mergeConfigFrom(__DIR__ . '/../src/config/getblock.php', 'getblock');
        }

        if (file_exists(__DIR__ . '/../src/config/endpoints.php')) {
            $this->mergeConfigFrom(__DIR__ . '/../src/config/endpoints.php', 'endpoints');
        }
    }
}
