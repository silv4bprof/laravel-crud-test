# Deploy do projeto

## Projeto Laravel

CRUD simples com Laravel e MySQL

## Banco de Dados

### Ferramentas (⛔✅)

### Ferramenta Web

- Free MySQL Hosting [https://www.freemysqlhosting.net/](https://www.freemysqlhosting.net/) ✅

### Ferramentas Desktop

- [MySQL Workbench](https://www.mysql.com/products/workbench/) ✅
- [JetBrains Datagrip](https://www.jetbrains.com/datagrip/) ✅
- [Visual Studio Code](https://code.visualstudio.com/) ✅

## Passo a passo

### 1. Criando banco de dados MySQL Free (online)

- Usar o Free MySQL Hosting [https://www.freemysqlhosting.net/](https://www.freemysqlhosting.net/)
- Criar o banco de dados com um email acessível e atualizar os dados no .env

### 2. Subir o front (em Laravel) para a versel

- Com o projeto no github.
- Acessar a versel e seguir o tutorial a seguir [nesse link](https://dev.to/snehalkadwe/deploy-laravel-application-using-vercel-42de).
- Mudar versão do node para 18x, de acordo com:

```bash
    -> Node 18.x / PHP 8.2.x (meu caso)
       Node 18.x / PHP 8.1.x
       Node 18.x / PHP 8.0.x
       Node 18.x / PHP 7.4.x
```

### 3. Problema do Vercel com HTTP e HTTPS

O projeto Laravel pode estar configurado apenas para o padrão HTTP, porém, no boot, configure o mesmo para usar o padrão HTTPS.

Em `AppServiceProvider.php` use:

```php
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Schema::defaultStringLength(191);
        resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https'); // adiciona essa linha
    }
```

e executar `php artisan route:clear && composer dumpautoload`

Fim!
