## Health To Go

Project for Health 2 Go Project

### Installation Process
    
- `git clone https://github.com/Swiftfoxit/h2go.git`
- `cd h2go`
- `git checkout dev`
- `composer install`
- `copy .env.example .env` | then change database credential
- `php artisan key:generate`
- `php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"`
- `php artisan vendor:publish --provider="Appzcoder\LaravelAdmin\LaravelAdminServiceProvider"`
- `php artisan vendor:publish --provider="Arcanedev\LogViewer\LogViewerServiceProvider"`
- `php artisan migrate:fresh --seed`
- `php artisan passport:install`
- `php artisan serve`