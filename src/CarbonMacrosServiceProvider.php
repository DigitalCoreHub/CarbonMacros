<?php

namespace DigitalCoreHub\CarbonMacros;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Carbon\Carbon;

class CarbonMacrosServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('carbon-macros')
            ->hasTranslations();
    }

    public function packageBooted()
    {
        $this->registerMacros();
    }

    protected function registerMacros()
    {
        /*
        *   now() fonksiyonunun da macro'yu desteklemesi için
        *   For the now() function to also support macros
        */

        Carbon::macro('greet', function () {
            $hour = $this->format('H');

            if ($hour < 12) {
                return __('carbon-macros::messages.good_morning');
            }

            if ($hour < 18) {
                return __('carbon-macros::messages.good_day');
            }

            return __('carbon-macros::messages.good_evening');
        });
    }
}
