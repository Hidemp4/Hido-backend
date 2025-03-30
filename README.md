## REQUISITOS

 * PHP 8.2 ou superior;
 * MySQL 8 ou superior;
 * Composer;
 * Node.js 20 ou superior;

## COMO RODAR O PROJETO BAIXADO
Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Gerar a chave.
```
php artisan key:generate
```

Executar as migrations para criar o banco e as tabelas.
```
php artisan migrate
```

Executar a seed para cadastrar o usuário teste no banco de dados.
```
php artisan db:seed
```

Iniciar o projeto baixado.
```
php artisan serve
```
Acessar o projeto:
```
http://127.0.0.1:8000
```

Usuário: admin@gmail.com<br>
Senha: 123456#A
