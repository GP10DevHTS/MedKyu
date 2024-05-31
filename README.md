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




