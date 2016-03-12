<?php namespace Sanatorium\Hooks\Providers;

use Cartalyst\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function boot()
    {
        // Register blade hook widget
        $this->registerBladeHookWidget();
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        // Register the manager
        $this->bindIf('sanatorium.hooks.manager', 'Sanatorium\Hooks\Repositories\HookRepository');
    }

    /**
     * Register the Blade @hook widget.
     *
     * @return void
     */
    protected function registerBladeHookWidget()
    {
        $this->app['blade.compiler']->directive('hook', function ($value) {
            return "<?php echo Widget::make('sanatorium/hooks::hook.show', array$value); ?>";
        });
    }
}
