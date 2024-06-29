
# HMS-SSD (Hospital Management System - South Sudan)

HMS-SSD is a Hospital Management System tailored for healthcare facilities in South Sudan. This system aims to streamline administrative processes, enhance patient care, and improve overall efficiency within healthcare institutions.

## Technologies Used

This project is developed using the following technologies:

-   Laravel: A powerful PHP framework known for its elegant syntax and expressive features.
-   Jetstream: A Laravel application scaffolding designed to provide a starting point for new projects with authentication, two-factor authentication, session management, and more.
-   Livewire: A full-stack framework for Laravel that makes building dynamic interfaces simple without leaving the comfort of Laravel.

## Prerequisites

Before you begin setting up HMS-SSD, ensure you have the following prerequisites installed:

1.  **PHP**: Make sure you have PHP installed on your system. You can download it from the [official PHP website](https://www.php.net/downloads.php).
    
2.  **Composer**: Composer is a dependency manager for PHP. You can install Composer by following the instructions on the Composer website.
    
3.  **Node.js and NPM**: Node.js is required for compiling assets. You can download and install Node.js from the official Node.js website. NPM comes bundled with Node.js.
    
4.  **Database**: You need to have a database server installed. This project is compatible with MySQL, PostgreSQL, SQLite, and SQL Server. Make sure you have the necessary database software installed and running.

#### i however recommend using XAMPP since it comes with php and the mysql server pakaged together and works on both linux and windows. the system will by default be set to use these.
    

## Installation

Follow these steps to set up HMS-SSD:

1.  Clone the repository:
```https://github.com/GP10DevHTS/hms-ssd.git```
3. Navigate into the project directory:
```cd hms-ssd```
4. Install PHP dependencies:
```composer install```
5. Install NPM dependencies:
```npm install && npm run dev```
6. Copy the `.env.example` file to `.env`:
```cp .env.example .env```
7. Generate an application key:
```php artisan key:generate```
8. Configure your `.env` file with your database credentials and other settings.
9. Migrate the database:
```php artisan migrate```
10. Seed the database with sample data (optional):
```php artisan db:seed```  this will fill the database with some basic required data
11. Serve the application: 
```php artisan serve```


Now you can access the application in your web browser at `http://localhost:8000`.

## Contributing
Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue but not a pull request.