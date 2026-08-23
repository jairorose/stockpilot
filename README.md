# StockPilot

StockPilot is an inventory management application built with Laravel, PHP, and MySQL. It lets you track stock items, including quantities and minimum stock thresholds, for any type of product. Adding a new product type doesn't require any code changes: you simply add it as a new item.

This project was built as a personal / portfolio project, based on a real inventory need for a business.

## Features (v1.0)

- **Authentication** — secure login system
- **Item management (CRUD)** — create, view, edit, and delete stock items
- **Dashboard** — a quick overview of the total number of items and which items are currently below their minimum stock level ("low stock")

## Coming soon

The following features are planned for an upcoming release and are **not yet part of this version**:

- **User registration** — support for multiple users, each managing their own separate set of items
- **Stock mutations** — stock quantities will no longer be edited directly through the item form. Instead, increases and decreases will be logged as individual mutations (e.g. purchase, sale, correction), giving you a full history of how and why stock levels changed over time

## Tech stack

- [Laravel](https://laravel.com/) (PHP framework)
- MySQL
- Blade templates

## Getting started (local setup)

### Prerequisites

- PHP (8.1 or higher recommended)
- [Composer](https://getcomposer.org/)
- Node.js & npm
- MySQL, or Docker if you'd rather run MySQL in a container
- Git

### 1. Clone the repository

```bash
git clone https://github.com/jairorose/stockpilot.git
cd stockpilot
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Configure your environment

```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and fill in your database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, etc.).

### 4. Set up the database

If you don't already have a MySQL server running, you can spin one up quickly with Docker:

```bash
docker run --name stockpilot-mysql \
  -e MYSQL_ROOT_PASSWORD=secret \
  -e MYSQL_DATABASE=stockpilot \
  -p 3306:3306 \
  -d mysql:8
```

Then run the migrations:

```bash
php artisan migrate
```

### 5. Create a user

Registration isn't available yet, so you'll need to create your first user manually via Tinker:

```bash
php artisan tinker
```

```php
App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('password'),
]);
```

### 6. Build frontend assets and start the server

```bash
npm run build
php artisan serve
```

Visit `http://127.0.0.1:8000`, log in with the account you just created, and you're in.

## Usage

Once logged in, you can:

- Add new items from the **Items** overview, including a name, SKU, unit, and minimum stock level
- Edit or delete existing items
- Check the **Dashboard** for a quick overview of your total item count and which items have dropped below their minimum stock level

## Roadmap

- [ ] User registration with separated items per user
- [ ] Stock mutations (increase/decrease via logged mutations instead of direct edits)
- [ ] Mutation history per item