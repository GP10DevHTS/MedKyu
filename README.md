# MedKyu
web application for hostpital management tailored for kyambogo university medical centre


## Table of Contents

1. [Project Overview](#project-overview)
2. [Features](#features)
3. [Technologies Used](#technologies-used)
4. [Installation](#installation)
5. [Configuration](#configuration)
6. [Database Setup](#database-setup)
7. [Running the Application](#running-the-application)
8. [Testing](#testing)
9. [Deployment](#deployment)
10. [Usage](#usage)
11. [User Roles and Permissions](#user-roles-and-permissions)
12. [API Documentation](#api-documentation)
13. [Front-end Overview](#front-end-overview)
14. [Back-end Overview](#back-end-overview)
15. [Security](#security)
16. [Performance Optimization](#performance-optimization)
17. [Error Handling](#error-handling)
18. [Logging](#logging)
19. [Monitoring](#monitoring)
20. [Backup and Restore](#backup-and-restore)
21. [Maintenance](#maintenance)
22. [Troubleshooting](#troubleshooting)
23. [Contributing](#contributing)
24. [License](#license)


## 1. Project Overview

MedKyu is a web application designed to manage the hospital operations of Kyambogo University Medical Centre. It facilitates patient management, appointment scheduling, medical records, billing, and reporting.


## 2. Features

- Patient Registration and Management
- Appointment Scheduling
- Medical Records Management
- Billing and Invoicing
- Reporting and Analytics
- User Management (Admins, Doctors, Nurses, Staff)
- Inventory Management
- Notifications and Alerts

## 3. Technologies Used

- Framework: Laravel
- Front-end: Livewire, Jetstream, HTML, CSS, JavaScript
- Database: MySQL
- Authentication: Laravel Jetstream
- Deployment: Docker
- CI/CD: GitHub Actions
- Testing: PHPUnit

## 4. Installation

To install the project locally, follow these steps:

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/medkyu.git

2. Navigate to the project directory:
    cd medkyu

3. Install the dependencies:
    - ```composer install```
    - ```npm install```

## 5. Configuration
Set up your environment variables by copying .env.example to .env and updating the necessary values:
```cp .env.example .env```

Generate an application key:
```php artisan key:generate```

## 6. Database Setup
To set up the MySQL database:

1. Create a new MySQL database.

2. Update the .env file with your database credentials:
```DB_CONNECTION=mysql```
```DB_HOST=127.0.0.1```
```DB_PORT=3306```
```DB_DATABASE=medkyu```
```DB_USERNAME=root```
```DB_PASSWORD=password```

3. Run the database migrations:
    ```php artisan migrate```

## 7. Running the Application
To run the application locally:

1. Start the development server:
    ```php artisan serve```

2. Start the frontend development server:
    ```npm run dev```

The application will be available at ```http://localhost:8000```.

## 8. Testing
Run the tests using:

```php artisan test```

## 9. Deployment
Deploy the application using Docker:

1. Build the Docker image:
```docker build -t medkyu .```
2. Run the Docker container:
```docker run -p 8000:8000 medkyu```

For server deployment, consider using services of [hollytechsolnz.com]("htpps:hollytechsoln.com") .


##10. Usage
After starting the application, you can log in with the following default credentials:

    Admin: admin@kyu.ac.ug / adminpassword
    Doctor: doctor@kyu.ac.ug / doctorpassword
    Nurse: nurse@kyu.ac.ug / nursepassword


## 11. User Roles and Permissions
MedKyu supports different user roles with specific permissions:

    Admin: Full access to all features.
    Doctor: Access to patient records, appointments, and medical notes.
    Nurse: Access to patient care tasks and inventory.
    Staff: Limited access based on assigned duties.


## 12. API Documentation
The API documentation is available at ```http://localhost:8000/api-docs``` when the application is running.

## 13. Front-end Overview
The front-end is built with Livewire and Laravel Jetstream and consists of the following main components:

Dashboard
Patient Management
Appointment Scheduling
Medical Records
Billing
User Management

## 14. Back-end Overview
The back-end is built with Laravel and includes:

RESTful API endpoints
Authentication and Authorization with Jetstream
Database interactions using Eloquent ORM

## 15. Security
Authentication using Laravel Jetstream
Password hashing with bcrypt
HTTPS for secure communication
## 16. Performance Optimization
Caching with Laravel Cache
Database indexing
Load balancing
## 17. Error Handling
Centralized error handling is implemented to catch and respond to errors consistently across the application.


## 18. Logging
Logging is implemented using Laravel's built-in logging features. Logs are stored in the storage/logs/ directory.

## 19. Monitoring
Application performance and health are monitored using tools like Laravel Telescope.

## 20. Backup and Restore
Database backups are automated using Laravel Backup package. Backup scripts are located in the scripts/ directory.

## 21. Maintenance
Regular maintenance tasks include:

Updating dependencies
Database optimization
Security patches
## 22. Troubleshooting
Common issues and their solutions are documented in the docs/troubleshooting.md file.

## 23. Contributing
We welcome contributions! Please see our CONTRIBUTING.md file for guidelines on how to contribute to this project.

## 24. License
This project is licensed under the MIT License. See the LICENSE file for more details.


This `README.md` file should provide a comprehensive guide to understanding, setting up, and contributing to the MedKyu project, with sections tailored to Laravel, Livewire, and Jetstream.











