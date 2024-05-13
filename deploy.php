<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config
set('repository', 'git@github.com:radoslavtomas/artwife.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('prod')
    ->set('hostname', '172.104.238.155')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/html/artwife-prod')
    ->set('branch', 'main');

// Hooks
/**
 * Main deploy task.
 */
desc('Deploys your project');
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:config:cache',
    'artisan:route:cache',
    'artisan:view:cache',
//    'artisan:event:cache',
//    'artisan:migrate',
    'deploy:publish',
]);

after('deploy:failed', 'deploy:unlock');
