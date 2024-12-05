<?

namespace BlaiseBueno\LaravelServiceRepository\Providers;

use BlaiseBueno\LaravelServiceRepository\Repositories\BaseRepository;
use BlaiseBueno\LaravelServiceRepository\Repositories\Interfaces\EloquentInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // 
    }

    public function boot()
    {
        $this->app->bind(EloquentInterface::class, BaseRepository::class);
    }
}