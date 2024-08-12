# User_Management_System
<br> 
<img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="Bandeira dos Estados Unidos" width="60" />

## Quick Presentation
This is a project made to test my skills using PHP, Laravel, Breeze and Blade using notions of Cybersecurity. It was done in a week! It is a simple system where ordinary users can log in, register, see their data in the User Interface, as well as unlock their own email in case of making a mistake in the password several times by sending an unlock button to the desired email. While admin users must log in, manage all users by listing in the Dashboard (deleting or unblocking users with locked accounts). In addition to creating new admin users.
## How To Set Up And Run The Project Locally ##
### Requirements 
 - PHP 8 version;
 - Composer with Laravel;
 - Node.js (v20.15) and npm (for compiling assets);
 - Git;
 - SQLite for database;

### Begin
The command lines shown below were made with users who use Windows operating systems in mind, so use the Command Prompt to carry out these commands (only the **"Clone The Repository"** commands that should be done in Git Bash instead of the Command Prompt).

At the end of the instructions on how to set up, there are instructions on how to run the project, so read everything to avoid problems.
### Clone the Repository
In the Git Bash in the desired directory, do:

**git clone https://github.com/marcosgustavo7/User_Management_System.git**

**cd User_Management_System**

### Install dependencies
Install PHP dependencies using Composer:

**composer install**

Install the JavaScript dependencies using npm:

**npm install**

**npm run dev**

### Set Up the Environment
Create an .env file at the root of the project, copy all the code from .env.example, and paste everything inside the .env file. Or if you think is better, you can paste this at Command Prompt:

**copy .env.example .env**

**php artisan key:generate**

### Migrate and Populate the Database
I've decided to keep the **database.sqlite** file (file where the SQL data is kept) in the "database" folder for an easy use of the application, so you just need to Run the migrations to create the database tables:

**php artisan migrate**

### Run the Development Server
Start the Laravel development server with the command:

**php artisan serve**

This will start a local development server. Open your browser and go to http://localhost:8000 to run the application.
### Authentication with Breeze

**php artisan breeze:install**

**npm install**

**npm run dev**

**php artisan migrate**

### Run the Project
After all these instructions, every time you run the code, make sure you let them use these commands and leave them open in the Command Prompt:

**cd User_Management_System**

**npm run dev**

**php artisan serve**

## How to Run
On the **http://localhost:8000** screen, to advance through the system, you need to click on one of the two buttons in the upper right corner of the screen called **Log In or Register**, so you go to the system screen!

Since I kept the **database.sqlite** file in the "database" folder, the database is already populated with some admin users for log in screen since it is not possible to create them in the registration screen, so I will leave their log in information below:

**Name: Administrador01**

E-mail: AdminExample@gmail.com

Password: @dminExample12


**Name: Administrator02**

E-mail: AdminExample2@gmail.com

Password: @dminExample12


**Name: Administrator03**

E-mail: AdminExample3@gmail.com

Password: @dminExample12


#### Some commom users:


**Name: Chris Redfield**

E-mail: ChrisRedfield@outlook.com

Password: R3sidentEvil@12


**Name: Carl Jonhson**

E-mail: CarlJohnson@gmail.com

Password: LikeV1deoG4mes@@

<br> <br> <br>
<img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg"  alt="Bandeira do Brasil" width="60" /> 

## Apresentação Rápida
Esse é um projeto feito para testar minhas habilidades usando PHP, Laravel, Breeze e Blade usando noções de CyberSegurança. Isso foi feito em uma semana. É um sistema simples aonde usuários podem se logar, registrar, ver os dados de usa conta na Interface do Usuário, além de desbloquear seu próprio e-mails em caso de muitas falhas ao tentar a senha por meio de um e-mail com botão de desbloqueio. Enquanto os usuários administradores podem fazer login, gerenciar todos os usuários por meio de um Dashboard aonde podem deletar ou desbloquear os usuários com contas bloqueadas. Também podem criar novos usuários administradores.

## Como Configurar e Rodar o Sistema Localmente ##
### Requisitos
 - PHP versão 8;
 - Composer com Laravel;
 - Node.js (v20.15) e npm (para compilação);
 - Git;
 - SQLite para o banco de dados;

### Início

As linhas de comando mostradas abaixo foram feitas pensando nos usuários que usam sistemas operacionais Windows, então use o Prompt de Comando para executar esses comandos (apenas os comandos **"Clonar o Repositório"** que devem ser feitos no Git Bash em vez do Prompt de comando).

Ao final das instruções de configuração, há instruções de como executar o projeto, então leia tudo para evitar problemas.
### Clonar o Repositório
No Git Bash, no diretório desejado, faça:

**git clone https://github.com/marcosgustavo7/User_Management_System.git**

**cd User_Management_System**

### Instalar Dependencias
Instale as dependencias de PHP usando o Composer:

**composer install**

Instale as dependencias de JavaScript usando npm:

**npm install**

**npm run dev**

### Configure o Ambiente
Crie um arquivo __.env__ na raiz do projeto, copie todo o código de __.env.example__ e cole tudo dentro do arquivo __.env__. Ou se achar melhor, você pode colar isto via prompt de comando:

**copy .env.example .env**

**php artisan key:generate**

### Migrar e Preencher o Banco de Dados
Decidi manter o arquivo **database.sqlite** (arquivo onde ficam os dados SQL) na pasta __"database"__ para facilitar a utilização da aplicação, então basta executar as migrações para criar o banco de dados tabelas:

**php artisan migrate**

### Rode o Servidor de Desenvolvimento
Inicie o servidor de desenvolvimento do Laravel usando:

**php artisan serve**

Isso iniciará um servidor de desenvolvimento local. Abra seu navegador e acesse __http://localhost:8000__ para executar o aplicativo.
### Autenticação Com Breeze

**php artisan breeze:install**

**npm install**

**npm run dev**

**php artisan migrate**

### Rode o Projeto
Após todas essas instruções, toda vez que você executar o código, certifique-se de deixá-los usar estes comandos e deixá-los abertos no Prompt de Comando:

**cd User_Management_System**

**npm run dev**

**php artisan serve**

## How to Run
Na tela **http://localhost:8000**, para avançar pelo sistema, você precisa clicar em um dos dois botões no canto superior direito da tela chamado **Log In ou Register**, então você vai para a tela do sistema!

Como mantive o arquivo **database.sqlite** na pasta "database", o banco de dados já está preenchido com alguns usuários administradores para tela de login pois não é possível criá-los na tela de cadastro, então deixarei seus informações de login abaixo:

**Nome: Administrador01**

E-mail: AdminExample@gmail.com

Senha: @dminExample12


**Nome: Administrator02**

E-mail: AdminExample2@gmail.com

Senha: @dminExample12


**Nome: Administrator03**

E-mail: AdminExample3@gmail.com

Senha: @dminExample12


#### Alguns Usuários Comuns:


**Nome: Chris Redfield**

E-mail: ChrisRedfield@outlook.com

Senha: R3sidentEvil@12


**Nome: Carl Jonhson**

E-mail: CarlJohnson@gmail.com

Senha: LikeV1deoG4mes@@

