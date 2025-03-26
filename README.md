# Beerstro Project

## Overview

The **Beerstro** project is a web application developed primarily using PHP, CSS, and JavaScript. It comprises various scripts and stylesheets to create a functional web interface.

## Features

- **User Authentication**: Includes scripts for user login (`connexion.php`), registration (`inscription.php`), and logout (`logout.php`).
- **Shopping Cart Management**: Provides functionality to add items to the cart (`ajouter_panier.php`), view the cart (`panier.php`), remove items (`supprimer_article.php`), and clear the cart (`vider_panier.php`).
- **User Account Information**: Allows users to view and manage their account details through `information_account.php`.
- **Product Display**: Features pages like `beer.php` for showcasing products.
- **Modular Design**: Utilizes separate header (`header.php`), footer (`footer.php`), and main content (`main.php`) files for consistent layout and easier maintenance.
- **Styling**: Incorporates multiple CSS files (`beer.css`, `footer.css`, `header.css`, `main.css`, `panier.css`, `styles.css`) to ensure a cohesive and responsive design.
- **Client-Side Interactivity**: Enhances user experience with JavaScript functionalities via `script.js`.

## Project Structure

The project directory is organized as follows:

- **Root Directory**: Contains primary PHP scripts for various functionalities.
- **`database` Directory**: Presumably intended for database-related files or scripts.
- **`images` Directory**: Likely stores image assets used throughout the application.

## Getting Started

To set up and run the Dev_web project locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/EagleOfFire/Dev_web.git
   ```
2. **Set Up a Local Server**: Use a local development server like XAMPP or WAMP that supports PHP and MySQL.
3. **Configure the Database**: Import any necessary database files from the `database` directory into your local MySQL server.
4. **Adjust Configuration Settings**: Ensure that database connection settings in the PHP scripts match your local setup.
5. **Run the Application**: Place the project files in your server's root directory and access the application via your web browser.

## Dependencies

- **PHP**: Server-side scripting language for backend logic.
- **MySQL**: Database management system for storing user and product data.
- **Apache/Nginx**: Web server to serve the application.

## Contributing

Contributions to the Dev_web project are welcome. To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes with descriptive messages.
4. Push your branch to your forked repository.
5. Submit a pull request detailing your changes.
