<div align="center">
    <p>
        <img src="public/assets/whereismydev-logo.png" alt="where is my dev? logo" width="180" />
    </p>
    <p>
        <!-- uncomment after enabled workflow -->
        <!--
        <a href="https://github.com/33Piter/whereismydev/actions/workflows/laravel.yml">
            <img src="https://github.com/33Piter/whereismydev/actions/workflows/laravel.yml/badge.svg?branch=main" alt="Laravel" style="max-width:100%;" />
        </a>
        -->
        <a href="https://github.com/33Piter/whereismydev/blob/main/LICENSE">
            <img alt="GitHub" src="https://img.shields.io/github/license/33Piter/whereismydev" alt="License" style="max-width:100%;" />
        </a>
        <a href="https://github.com/33Piter/whereismydev/commits/main">
            <img src="https://img.shields.io/github/last-commit/33Piter/whereismydev" alt="GitHub last commit" style="max-width:100%;" />
        </a>
        <img src="https://img.shields.io/github/repo-size/33Piter/whereismydev" alt="Repo Size" />
        <img src="https://img.shields.io/github/downloads/33Piter/whereismydev/total" alt="Total Downloads" style="max-width:100%;" />
    </p>
</div>

<div align="center">
    <p>
        <!-- base64 flags are available at https://www.phoca.cz/cssflags/ -->
        <!-- pt-BR> -->
        <!-- uncoment if implement documentation in other language
        <a href="docs/README_pt-BR.md">
            <img height="20px" src="https://img.shields.io/badge/Português (BR)-gray.svg?logo=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHjSURBVHjaYmRIZkCAfwwMf2DkLzCCMyDoBwNAALEAlTVGN/5nYPj//x8Q/P3/9++/vzZa31gY/mw5z/Tn3x8g98+f37///fn99/eq2lUAAQTS8J/h/7NPz/9C5P79WRj89f9/zv//fztLvPVezPzrz+8/f3//+vtLhl8GaANAAIE1/P8PVA1U6qn7NVTqb1XVpAv/JH7/+a/848XmtpBlj39PO8gM1PP7z2+gqwACiAnoYpC9TF9nB34NVf5z4XpoZJbEjJKfWaEfL7KLlbaURKj8Opj08RfIVb+BNgAEEBPQW1L8P+b6/mb6//s/w+/+nc4F0/9P2cj65xdHc+p/QR39//9/AdHJ9A/60l8YvjIABBAT0JYH75jStv75zwCSMBY8BXTMxXv/21ezfHj9X5/3BESDy5JfBy7/ZuBnAAggkA1//vx594kpaCnLloe/smLaVT9/ff3y/+/P/w+u/+JuW7fhwS/tSayPXrOycrEyfGQACCAWoA1//oOCDIgm72fu4vy6b4LD/9/S/3///s9+S28yy+9/LEAf//kLChVgCAEEEEjD7z9/JHgkQeHwD8gUjV79O9r6CzPLv6lr1OUFwWH9Fxjcv//9BcYoA0AAMTI4ImIROUYRMf2XARkABBgA8kMvQf3q+24AAAAASUVORK5CYII=" alt="BR flag in base64" />
        </a>
        -->
    </p>
    <p>
        <a href="#sobre">Sobre</a> |
        <a href="#tecnologias">Tecnologias</a> |
        <a href="#instalação">Instalação</a> |
        <a href="#comandos">Comandos</a> |
        <a href="#a-fazer">A Fazer</a>
    </p>
</div>

## Sobre

Where is my dev? é uma aplicação web feita em Laravel e tem objetivo de listar desenvolvedores na API do GitHub.

### Tecnologias

- **TALL Stack**
- **PHP 8.1**
- **Laravel Framework 8**
- **Laravel Sail (Docker)**
- **Laravel Horizon**
- **Redis**
- **MySQL**
- **Filament**

<br />

## Instalação

- `git clone https://github.com/33Piter/whereismydev.git`
- `cd whereismydev`
- `composer install`
- `cp .env.example .env`
- `sail up -d`
- `sail npm install`
- `sail npm run prod`
- `sail artisan key:gen`
- `sail artisan migrate:fresh --seed`
- `sail artisan storage:link`
- `sail artisan horizon:publish`
- `sail artisan sweetalert:publish`
- Gere um personal access token do GitHub (https://github.com/settings/tokens/new) e insira no .env (em `GITHUB_TOKEN`)
- `sail artisan whereismydev:search` (comando para buscar desenvolvedores na api do GitHub)
- `sail artisan horizon`
- Configure o mailtrap

<br />



## Credenciais para teste
- user: admin@whereismydev.com
- pass: password

## Comandos

### Comando para criar usuários
- `sail artisan make:filament-user` (crie um email com @whereismydev.com para poder fazer login)

**Acesse a rota /admin para acessar o painel.**

### Comando para buscar desenvolvedores
- `sail artisan whereismydev:search`

### Comando para limpar os desenvolvedores
- `sail artisan whereismydev:clear`

## A Fazer
- Ver perfil do dev
- Busca dev com autocomplete
- CRUD de usuários (admin)
- Testes
- Seed/Factory dos developers para teste
- Jetstream
- Supervisor
- Customizar home

## Incrementos planejados
- Fazer busca na api do GitHub pelo dashboard
