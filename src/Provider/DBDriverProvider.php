<?php
namespace MS\DBServer\Provider;


define('DS',DIRECTORY_SEPARATOR);

class DBDriverProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('MS_DEBUG')){
            $Path=[
            'mod'=>base_path(implode(DS,['msdb','src'])),
            'route'=>base_path(implode(DS,['msdb','src','Routes']))
            ];

        }else{
            $Path=[
                'mod'=>base_path(implode(DS,['msllp','msdb-server','src'])),
                'route'=>base_path(implode(DS,['msllp','msdb-server','src','Routes']))
            ];
        }

        $this->loadRoutesFrom(implode(DS,[$Path['route'],'web.php']));
        $this->loadRoutesFrom(implode(DS,[$Path['route'],'api.php']));
     }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //$this->loadMigrationsFrom(__DIR__.'/path/to/migrations');

    }
}


