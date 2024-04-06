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
            export http_proxy=$httpProxy https_proxy=$httpProxy
            echo http_proxy=\$http_proxy
            echo https_proxy=\$https_proxy
            echo "current user:" `whoami`
            echo "home path permission is:" `ls -ld ~`
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
