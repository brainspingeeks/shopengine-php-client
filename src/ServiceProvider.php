<?php namespace SSB\Api;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $configPath = __DIR__ . '/../config/shopengine-api.php';
        $this->mergeConfigFrom($configPath, 'shopengine');

        $this->app->bind('ShopEngineApiClient', function ($app) {
            $apiUrl = config('shopengine-api.apiUrl');
            $privateKey = config('shopengine-api.privateKey');
            $shop = config('shopengine-api.shop');
            $debug = !\App::environment(['testing', 'production']);

            return new LaravelClient($apiUrl, $privateKey, $shop, $debug);
        });

        if (class_exists('Barryvdh\Debugbar\LaravelDebugbar')) {
            $debugbar = $this->app->make('debugbar');
            try {
                $debugbar->addCollector(new ApiCollector());
            }
            catch (\Exception $e) {

            }
        }
    }

    public function boot()
    {
        $configPath = __DIR__ . '/../config/shopengine-api.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    protected function getConfigPath()
    {
        return config_path('shopengine-api.php');
    }

    protected function publishConfig($configPath)
    {
        $this->publishes([$configPath => config_path('shopengine-api.php')], 'config');
    }
}