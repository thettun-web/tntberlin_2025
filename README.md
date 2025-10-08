# **Trading News Website**

Welcome to the Trading News website, a dynamic platform for financial news and analysis built with the Laravel framework. This application allows registered users to publish articles, read content from other authors, and engage in discussions through a commenting system.

## **✨ Features**

* **User Authentication**: Secure registration and login for users.  
* **Article Management**: Registered users can create, read, update, and delete their own articles.  
* **Admin Privileges**: A designated admin user can edit or delete *any* article.  
* **Commenting System**: Logged-in users can post comments on articles.  
* **Authorization**: Implemented using Laravel Gates to ensure users can only manage their own content, while admins have full control.  
* **Database Seeding**: Comes with a pre-configured seeder to create an admin account and 10+ fake users for easy testing.

## **🛠️ Tech Stack**

* **Backend**: Laravel 12  
* **Frontend**: Tailwind CSS  
* **Database**: SQLite (by default)  
* **Build Tool**: Vite

## **🚀 Getting Started**

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### **1\. Prerequisites**

* PHP 8.2+  
* Composer  
* Node.js & npm  
* A local development environment (e.g., Laravel Herd, Laragon, XAMPP)

### **2\. Installation**

**1\. Clone the repository:**

git clone \[https://github.com/thettun-web/tntberlin\_2025.git\](https://github.com/thettun-web/tntberlin\_2025.git)  
cd tntberlin\_2025

**2\. Install PHP dependencies:**

composer install

**3\. Install JavaScript dependencies:**

npm install

**4\. Create your environment file:**  
Copy the example environment file.  
cp .env.example .env

**5\. Generate an application key:**

php artisan key:generate

**6\. Set up the database:**  
This project is configured to use SQLite by default. Simply create an empty file in the database directory.  
touch database/database.sqlite

**7\. Run migrations and seed the database:**  
This command will build your database structure and populate it with an admin account and fake data for testing.  
php artisan migrate:fresh \--seed

### **3\. Running the Application**

You have two options for running the application, depending on your needs.

#### **Option 1: Development Mode (Recommended)**

This is the best option while you are actively coding. It uses Vite's Hot Module Replacement (HMR) to instantly update your CSS and JavaScript as you make changes.

**1\. Start the Vite development server:**  
Open a new terminal window and run:  
npm run dev

Keep this terminal running in the background.

**2\. Start the PHP development server:**  
In another terminal window, run:  
php artisan serve

Your website will now be available at http://127.0.0.1:8000.

#### **Option 2: Production Build Mode (Optional)**

If you don't want to run npm run dev continuously, you can create a one-time production build of your assets. This is less convenient for development but useful for testing the final build.

**1\. Build your assets:**  
Run this command once.  
npm run build

This compiles all your CSS and JS into an public/build directory.

**2\. Start the PHP development server:**  
You only need to run the PHP server now.  
php artisan serve

Your website will be available, but you will need to re-run npm run build every time you make a change to your CSS or JS files.

## **🔑 Admin Credentials**

The database seeder creates a default admin account with the following credentials:

* **Email**: admin@admin.com  
* **Password**: password

## **📦 Data Structure**

The application's database is structured around three core models with the following relationships:

* **User**: Has many Articles, has many Comments.  
* **Article**: Belongs to one User (author), has many Comments.  
* **Comment**: Belongs to one User (author), belongs to one Article.