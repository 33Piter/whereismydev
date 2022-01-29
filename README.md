Where is my dev? é uma aplicação web feita em Laravel e tem objetivo de listar desenvolvedores na API do GitHub.


Instalação:
- git clone https://github.com/33Piter/whereismydev.git
- cd whereismydev
- composer install
- cp .env.example .env
- ./vendor/bin/sail up -d
- ./vendor/bin/sail npm install
- ./vendor/bin/sail npm run prod
- ./vendor/bin/sail artisan key:gen
- ./vendor/bin/sail artisan migrate:fresh --seed
- ./vendor/bin/sail artisan storage:link
- ./vendor/bin/sail artisan sweetalert:publish
- ./vendor/bin/sail artisan whereismydev:search (comando para buscar desenvolvedores na api do GitHub)
- ./vendor/bin/sail artisan horizon
- configure o mailtrap


Credenciais para teste:
- user: admin@whereismydev.com
- pass: password

Comando para criar usuários:
- ./vendor/bin/sail artisan make:filament-user (crie um email com @whereismydev.com para poder fazer login)

**Acesse a rota /admin para acessar o painel.**


A Fazer:
- ver perfil do dev
- busca dev com autocomplete
- crud de usuários
- testes
- readme
- seeds dos developers para teste
- jetstream
- supervisor
- customizar home

Incrementos:
- comando artisan de busca na api do GitHub com parâmetros para busca
- fazer busca na api do GitHub pelo dashboard
