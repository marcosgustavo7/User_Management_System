# User_Management_System
## How To Set Up And Run The Project Locally ##
### Requirements 
 - PHP asasas
 - Composer;
 - Node.js and npm (for compiling assets);
 - Git (Not essential);

### Begin
The command lines shown below were made with users who use Windows operating systems in mind, so use the Command Prompt to carry out these commands (only the **"Clone The Repository"** commands that should be done in Git Bash instead of the Command Prompt).
   
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

### Create the SQLite File
Create a "database.sqlite" file in the "database" folder. You can create this file manually or by using the following command in the Command Prompt:

**cd database**

**echo > database.sqlite**

### Migrate and Populate the Database
Run the migrations to create the database tables:

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

