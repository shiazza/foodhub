# FoodHub 🍲

![Laravel](https://laravel.com/img/logomark.min.svg)

**Cari resep, punya resep? Disini tempatnya!**

FoodHub is a Laravel-based web application that allows users to browse, upload, and interact with cooking recipes. Built with Laravel 10 and Bootstrap, this platform is perfect for food enthusiasts who want to share and discover new recipes!

---

## Features 🚀

- **Browse Recipes**: Discover a variety of recipes shared by other users.
- **Upload Recipes**: Share your own culinary creations with the community.
- **Comment on Recipes**: Engage with others by leaving comments on recipes.

---

## Requirements 💻

- **PHP**: 8.1 or higher
- **MySQL**: 8.0
- **Composer**: Latest version

---

## Installation ⚙️

Follow these steps to set up FoodHub on your local machine:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/foodhub.git
   cd foodhub
   ```

2. **Set up the environment file**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials:
     ```plaintext
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

3. **Insert the database**:
   - Use the SQL dump provided to create and set up the database schema:
     ```sql
     -- Run the provided SQL in phpMyAdmin or directly in MySQL
     ```

4. **Install dependencies**:
   ```bash
   composer install
   ```

5. **Run migrations** (if needed):
   ```bash
   php artisan migrate
   ```

6. **Run the application**:
   ```bash
   php artisan serve
   ```

---

Happy cooking! 👨‍🍳👩‍🍳