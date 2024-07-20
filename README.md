# User_Management_System
## Quick Presentation
This is a project made to test my skills using PHP, Laravel, Breeze and Blade using notions of Cybersecurity. It was done in a week! It is a simple system where ordinary users can log in, register, see their data in the User Interface, as well as unlock their own email in case of making a mistake in the password several times by sending an unlock button to the desired email. While admin users must log in, manage all users by listing in the Dashboard (deleting or unblocking users with locked accounts). In addition to creating new admin users.
## How To Set Up And Run The Project Locally ##
### Requirements 
 - PHP 8 version;
 - Composer;
 - Node.js and npm (for compiling assets);
 - Git (Not essential);

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

### Run the Project
After all these instructions, every time you run the code, make sure you let them use these commands and leave them open in the Command Prompt:

**cd User_Management_System**

**npm run dev**

**php artisan serve**

## How to Run
On the **http://localhost:8000** screen, to advance through the system, you need to click on one of the two buttons in the upper right corner of the screen called **Log In or Register**, so you go to the system screen!
