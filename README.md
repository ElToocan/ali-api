# 🛍️ E-commerce API

This project is a robust e-commerce API built with Laravel, designed to provide a solid backend for managing customers, categories, and orders. It includes user authentication, authorization, and CRUD operations for core entities. The API leverages Laravel Sanctum for authentication and Spatie Laravel-permission for role-based access control, ensuring secure and scalable operations.

## 🚀 Key Features

- **User Authentication:** Secure user registration and login using Laravel Sanctum. 🔑
- **Customer Management:** Create, read, update, and delete customer records. 👤
- **Category Management:** Manage product categories with full CRUD functionality. 🗂️
- **Order Management:** Create, retrieve, and modify orders, including adding products. 🛒
- **Role-Based Access Control:** Fine-grained control over API access using Spatie Laravel-permission. 🛡️
- **API Versioning:** Organized API structure with versioning (v1). 🏷️
- **Policy-Based Authorization:** Utilizes Laravel Policies for authorization logic. 🚦
- **Debug Logging:** Includes middleware for logging requests and responses in debug mode. 🐞

## 🛠️ Tech Stack

- **Backend:**
    - PHP
    - Laravel Framework
- **Database:**
    - Configurable (MySQL, PostgreSQL, SQLite) - defined in `config/database.php`
- **Authentication:**
    - Laravel Sanctum
- **Authorization:**
    - Spatie Laravel-permission
- **HTTP Client:**
    - Any HTTP client (e.g., Postman, Insomnia, curl)
- **Other:**
    - Composer (for dependency management)
    - Artisan CLI (for Laravel commands)

## 📦 Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- A database server (MySQL, PostgreSQL, or SQLite)
- Node.js and npm (if you plan to work with frontend assets)

### Installation

1.  Clone the repository:

    ```bash
    git clone <repository-url>
    cd <repository-name>
    ```

2.  Install Composer dependencies:

    ```bash
    composer install
    ```

3.  Copy the `.env.example` file to `.env` and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

4.  Generate an application key:

    ```bash
    php artisan key:generate
    ```

5.  Configure your database connection in the `.env` file:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6.  Run database migrations:

    ```bash
    php artisan migrate
    ```

7.  Seed the database (optional, but recommended for initial setup):

    ```bash
    php artisan db:seed
    ```

8.  Install Passport (if needed, though Sanctum is primarily used):

    ```bash
    php artisan passport:install
    ```

### Running Locally

1.  Start the Laravel development server:

    ```bash
    php artisan serve
    ```

    This will typically start the server at `http://127.0.0.1:8000`.

2.  Access the API endpoints using an HTTP client like Postman or Insomnia.

## 📂 Project Structure

```
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── API/
│   │   │   │   └── AuthController.php
│   │   │   └── v1/
│   │   │       ├── CategoryController.php
│   │   │       ├── CustomerController.php
│   │   │       └── OrderController.php
│   │   ├── Kernel.php
│   │   ├── Middleware/
│   ├── Models/
│   │   ├── Category.php
│   │   ├── Customer.php
│   │   ├── Order.php
│   │   ├── OrderLines.php
│   │   ├── Product.php
│   │   └── User.php
│   ├── Policies/
│   │   ├── CategoryPolicy.php
│   │   └── OrderPolicy.php
│   ├── Providers/
│   │   └── AppServiceProvider.php
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   └── permission.php
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── routes/
│   ├── api.php
│   └── web.php
├── storage/
├── tests/
├── composer.json
├── .env
├── .gitignore
└── README.md
```

## 📬 Contact

For questions or feedback, please contact Pino Gabriele at gabriele.pno@gmail.com.

💖 Thanks for checking out this project! We hope it helps you build amazing e-commerce applications.

