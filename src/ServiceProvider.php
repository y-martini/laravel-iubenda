<?php

namespace YMartini\Laravel\Iubenda;

use Illuminate\Support;

class ServiceProvider extends Support\ServiceProvider
{
  public function boot(): void
  {
  }

  public function register(): void
  {
    $this->config();
  }

  private function config(): void
  {
    $this->publishes(
      [
        __DIR__.'/../config/iubenda.php' => Support\Facades\App::configPath('iubenda.php'),
      ],
      ['config', 'iubenda', 'iubenda-config']
    );

    $this->mergeConfigFrom(__DIR__.'/../config/iubenda.php', 'iubenda');
  }
}
