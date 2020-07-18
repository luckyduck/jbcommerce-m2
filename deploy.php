<?php

namespace Deployer;
require_once __DIR__ . '/vendor/rafaelstz/deployer-magento2/deploy.php';

// Project
set('application', 'My Project Name');
set('repository', 'git@github.com:luckyduck/jbcommerce-m2.git');
set('default_stage', 'staging');
//set('languages', 'en_US pt_BR');
set('verbose', '-v');

// Env Configurations
set('php', '/usr/local/bin/php70');
set('magerun', '/usr/bin/n98-magerun2');
set('composer', '/usr/local/bin/composer');

// Project Configurations
host('hetzner4')
    ->hostname('hetzner4')
    ->user('www-data')
    ->port(222)
    ->set('deploy_path', '/home/httpd/deployer-medienreich/src')
    ->set('branch', 'master')
    ->set('is_production', 1)
    ->stage('staging')
    ->roles('master')
    ->configFile('~/.ssh/config')
    ->identityFile('~/.ssh/id_rsa')
    ->addSshOption('UserKnownHostsFile', '/dev/null')
    ->addSshOption('StrictHostKeyChecking', 'no');

set('release_path', "{{deploy_path}}");
desc('Deploying...');
task('deploy', [
    'deploy:info',
    'deploy:lock',
    'magento:maintenance:enable',
    'git:update_code',
    'composer:install',
    'deploy:magento',
    'magento:maintenance:disable',
    'deploy:unlock',
    'success'
]);
