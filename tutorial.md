# Deploy do projeto

## Projeto Laravel

## Banco de Dados

### Ferramentas (⛔✅)

#### Web

- Retool ([https://silv4b.retool.com/](https://silv4b.retool.com/)) ⛔
- Render ([https://render.com/](https://render.com/)) ⛔
- Railway ([https://railway.app/dashboard](https://railway.app/dashboard)) ⛔
- PlaneScale [https://planetscale.com/](https://planetscale.com/) ⛔
- DB4Free [https://www.db4free.net/](https://www.db4free.net/index.php?language=pt) ⛔
- Free MySQL Hosting [https://www.freemysqlhosting.net/](https://www.freemysqlhosting.net/) ✅

### Problema do Vercel com HTTP e HTTPS

Em `AppServiceProvider.php` use:

```php
public function boot(): void
{
    Paginator::useBootstrapFive();
    Schema::defaultStringLength(191);
    resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https'); // adiciona essa linha
}
```

e roda

`php artisan route:clear && composer dumpautoload`
