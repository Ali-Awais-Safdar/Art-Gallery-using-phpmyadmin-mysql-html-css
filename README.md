# Art Gallery Project

This project involves creating an art gallery database using MySQL with specific business rules. The database was designed to follow best practices, including normalization up to the 3rd Normal Form (3NF). The database was later integrated with a dynamic website using PHP, HTML, and CSS. The project also features an ERD (Entity-Relationship Diagram) that outlines the structure of the database, which is included in the repository.

## Features

- **MySQL Database**: The database follows 3rd Normal Form (3NF) and includes business rules implemented with triggers.
- **PHP Integration**: The database is connected to a PHP file, which is then incorporated into the HTML structure of the website.
- **Dynamic Website**: A fully functional dynamic art gallery website that displays data from the MySQL database.
- **phpMyAdmin**: The MySQL database was managed using phpMyAdmin for ease of development and testing.
- **Local Testing**: The project was initially tested using XAMPP, linking the website to a local server for testing purposes.

## Repository Files

- `arts_exhibition.php` - PHP file handling art exhibitions functionality.
- `artworks.php` - PHP file handling artwork display and management.
- `artworks_front.css` - CSS file for styling the artworks front page.
- `artworks_front.php` - PHP file for displaying the front-end of artworks.
- `customer.php` - PHP file for handling customer-related operations.
- `customer1.css` - CSS file for customer page styling.
- `customer1.php` - PHP file for customer data display.
- `customer_con.php` - PHP file for customer-related connections.
- `databaseprojectsql.sql` - SQL file containing the database schema and triggers.
- `exhibition1_front.php` - PHP file for front-end exhibition display.
- `exhibitions.css` - CSS file for exhibition page styling.
- `exhibitions.php` - PHP file handling exhibitions operations.
- `index.html` - HTML file serving as the homepage for the website.
- `order1.php`, `order2.php`, `order1_front.php`, `order2_front.php` - PHP files for handling and displaying orders.
- `style.css` - Main CSS file for overall website styling.
- `logo.png`, `background1.jpg`, `background2.jpg`, `background3.jpg`, `painting.jpg` - Images used in the website's layout and design.

## ERD (Entity-Relationship Diagram)

The ERD is included in the repository (`ERD.png` or as a similar file) and showcases the relationships between the various tables in the database.

## How to Set Up

1. Clone the repository or download the source code.
2. Import the `databaseprojectsql.sql` file into your MySQL database using phpMyAdmin or command line.
3. Configure your PHP server (e.g., using XAMPP) to connect to the MySQL database.
4. Launch the `index.html` page on your local server to view the art gallery website.
5. Test the functionality of the website, including viewing exhibitions, artworks, and handling customer orders.

## Tools Used

- **MySQL** for database management.
- **phpMyAdmin** for MySQL database interface and management.
- **PHP** for server-side scripting and database connectivity.
- **HTML/CSS** for front-end design.
- **XAMPP** for local testing and hosting of the website.

## Acknowledgments

This project demonstrates database normalization, business rule implementation with triggers, and PHP-MySQL integration to create a dynamic art gallery website.
