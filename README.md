# 🚀 Projeto Estudos Laravel

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

Um ambiente completo para estudos de **Laravel com PHP**, utilizando **Docker** para facilitar a configuração e manter tudo isolado do seu sistema operacional.

---

## 📦 Serviços do Ambiente

Este projeto utiliza **Docker Compose** para orquestrar os serviços:

| Serviço        | Tecnologias                      | Acesso |
|----------------|----------------------------------|--------|
| **App**        | Apache + PHP 8.2 + Laravel       | http://localhost:8080 |
| **DB**         | MySQL 8.0                        | Porta 3306 |
| **phpMyAdmin** | Interface visual para o banco    | http://localhost:8081 |

---

## ⚙️ Pré-requisitos

Antes de tudo, instale:

- Docker  
- Docker Compose  
- Git  

---

## 🚀 Como Rodar o Projeto

```bash
1. CLONAR PROJETO
git clone https://github.com/SEU_USUARIO/projetoEstudosLaravel.git
cd projetoEstudosLaravel

🔹 2. Configure o arquivo .env

Crie seu .env baseado no exemplo:

cp .env.example .env

    O .env já está configurado para usar o host db como banco MySQL dentro do Docker.

🔹 3. Suba os containers

docker compose up -d

🔹 4. Instale as dependências do Laravel

docker compose exec app composer install

🔹 5. Gere a chave da aplicação e rode as migrations

docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate

🛠️ Comandos Úteis
▶️ Rodar migrations

docker compose exec app php artisan migrate

🛠️ Criar Controller

docker compose exec app php artisan make:controller NomeDoController

🐚 Entrar no terminal do container

docker compose exec app bash

⛔ Parar containers

docker compose stop

📁 Estrutura Recomendada do Projeto

projetoEstudosLaravel/
│
├── src/                # Código fonte do Laravel
├── docker/             # Configurações dos containers
├── docker-compose.yml
├── .env.example
└── README.md
