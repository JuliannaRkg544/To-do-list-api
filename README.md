<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📋 To-Do List API
API de uma to-do list desenvolvida com Laravel. 

## 📡 Rotas
- `/get-all-tasks` → Rota que busca todas as tarefas de um usuário
- `/get-task-byId/{taskid}` → Rota busca task única pelo id
- `/create-task` →  Rota que cria uma task
- `/update-task/{taskid}` → Rota que atualiza campo descrição ou título de uma task 
- `/update-task-done/{taskid}` → Rota que atualiza status da task, para feita ou não feita
- `/delete-task/{taskid}` → Rota que deleta task

## ⚡ Como executar o projeto
```bash
1️⃣ Clonar repositório
git clone https://github.com/JuliannaRkg544/To-do-list-api.git

2️⃣ Caminhar para pasta
cd ./api-laravel

3️⃣ Instalar dependências do laravel
composer i

4️⃣ Rodar servidor 
php artisan serve
```

