# Deploy do projeto

## Projeto Laravel

## Banco de Dados

### Ferramentas (⛔✅)

#### Web

- Free MySQL Hosting [https://www.freemysqlhosting.net/](https://www.freemysqlhosting.net/) ✅

### Desktop

- [MySQL Workbench](https://www.mysql.com/products/workbench/)
- [JetBrains Datagrip](https://www.jetbrains.com/datagrip/)

### Criando banco de dados MySQL Free (online)

- Usar o Free MySQL Hosting [https://www.freemysqlhosting.net/](https://www.freemysqlhosting.net/)
- Criando o banco de dados com um email acessível e atualizar os dados no .env

### Preparando para subir na Vercel

- [Nesse link](https://dev.to/snehalkadwe/deploy-laravel-application-using-vercel-42de)
- Mudar versão do node para 18x, de acordo com:

```bash
    -> Node 18.x / PHP 8.2.x (meu caso)
       Node 18.x / PHP 8.1.x
       Node 18.x / PHP 8.0.x
       Node 18.x / PHP 7.4.x
```

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
