<?php

namespace Mstfkhazaal\FilamentTitleWithSlug;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mstfkhazaal\FilamentTitleWithSlug\Commands\FilamentTitleWithSlugCommand;
use Mstfkhazaal\FilamentTitleWithSlug\Testing\TestsFilamentTitleWithSlug;

class FilamentTitleWithSlugServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-title-with-slug';

    public static string $viewNamespace = 'filament-title-with-slug';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }
        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('filament-title-with-slug', __DIR__ . '/../resources/dist/filament-title-with-slug.css')->loadedOnRequest(),
        ], 'filament-title-with-slug');
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );


        // Testing
        Testable::mixin(new TestsFilamentTitleWithSlug());
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-title-with-slug', __DIR__ . '/../resources/dist/components/filament-title-with-slug.js'),
            Css::make('filament-title-with-slug-styles', __DIR__ . '/../resources/dist/filament-title-with-slug.css'),
            //Js::make('filament-title-with-slug-scripts', __DIR__ . '/../resources/dist/filament-title-with-slug.js'),
        ];
    }

    protected function getAssetPackageName(): ?string
    {
        return 'mstfkhazaal/filament-title-with-slug';
    }

}
