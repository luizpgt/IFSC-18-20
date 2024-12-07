# README

Trabalho final (conclusão do curso) do técnico.

Tema: "Tecnologias Assistivas"

O grupo trabalhou no Projeto Integrador, desenvolvendo a ideia da solução em 2019. O Trabalho Integrador implementou a solução (este trabalho).

Por motivos de histórico, os commits do repositório original foram salvos em `git.log`: 

```sh
git log > git.log
```

Este trabalho foi apresentado pelo grupo em vídeo, porém o arquivo de foi perdido.

## Como clonar este projeto em sua máquina

- Clone este projeto para sua pasta www/htdocs:
```
git clone https://github.com/OtakuaErmo/talkeasy.git
```
- Entre (cd) na pasta clonada e digite os seguintes comandos:
````
composer install
php -r "copy('.env.example', '.env');"
php artisan key:generate
````
- Navegue entre os diretórios e configure o arquivo .env com as informações do seu banco;
- Após configurado, utilize os comandos:
````
php artisan migrate
php artisan db:seed
````