<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Fresns\PluginManager\Commands;

use Fresns\PluginManager\Support\Process;
use Illuminate\Console\Command;

class PluginComposerUpdateCommand extends Command
{
    protected $signature = 'plugin:composer-update';

    protected $description = 'Update all plugins composer package';

    public function handle()
    {
        $httpProxy = config('app.http_proxy');

        $process = Process::run(<<<"SHELL"
            export httpProxy=$httpProxy
            echo "Owner:" `whoami`
            echo "Path:" \$PATH
            echo "Proxy:" \$httpProxy
            echo ""
            echo `which php`
            echo `php -v`
            echo ""
            echo `which composer`
            echo `composer --version`
            echo ""
            echo `which git`
            echo `git --version`
            echo ""
            echo "# Composer Diagnose"
            echo ""
            composer diagnose
            echo ""
            echo "# Fresns Plugin Command"
            echo ""
            composer update
        SHELL, $this->output);

        if (! $process->isSuccessful()) {
            $this->error('Failed to install packages, calc composer.json hash value fail');

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
