# Ladakh-Bike-Rental
# Bike Rental Management System

## Project Overview
This is a Bike Rental Management System built using PHP and MySQL. Users can register, log in, and perform various actions related to bike rentals. This project is designed to run locally using the XAMPP server.

## Requirements
- XAMPP Server (with Apache and MySQL enabled)
- Web Browser

## Installation and Setup

### Step 1: Download the Project
1. Clone the repository or download the project as a ZIP file:
   ```bash
   git clone <https://github.com/urgyannurboo/Ladakh-Bike-Rental>
   ```
2. Extract the downloaded ZIP file if necessary.

### Step 2: Set Up the Database
1. Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin` in your browser.
2. Create a new database named `bikerental`.
3. Import the provided SQL file:
   - Click on the `bikerental` database.
   - Go to the **Import** tab.
   - Select the SQL file named `bikerental.sql` from the project folder.
   - Click **Go** to import the database structure and data.

### Step 3: Configure XAMPP
1. Start the XAMPP Control Panel.
2. Ensure that **Apache** and **MySQL** services are running.

### Step 4: Place Project Files
1. Copy the entire project folder into the XAMPP `htdocs` directory. By default, this is located at:
   ```
   C:\xampp\htdocs
   ```
2. Rename the folder to `bikerental` (optional).

### Step 5: Access the Application
1. Open your web browser and navigate to:
   ```
   http://localhost/bikerental
   ```
2. The application should now be accessible.

## Features
- User Registration and Login
- Bike Rental Management
- Admin Panel for Managing Users and Rentals

## Notes
- Ensure that the database name is exactly `bikerental` to avoid errors.
- The SQL file (`bikerental.sql`) must be imported correctly for the application to function.
- For password hashing, MD5 is used. Ensure secure passwords are stored in production.

## Troubleshooting
1. **Cannot Connect to Database:**
   - Verify that MySQL is running in XAMPP.
   - Check the database configuration in the PHP code (`config.php` or similar file).
2. **404 Error:**
   - Ensure the project folder is in the `htdocs` directory.
   - Check the URL for typos.
3. **PHP Errors:**
   - Ensure the required PHP extensions are enabled in the XAMPP PHP configuration file (`php.ini`).

## Contributing
Feel free to fork this repository and contribute by submitting pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

## Contact
For any queries or support, feel free to contact the project owner.

