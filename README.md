# Bank Management System

## Overview
This project is a web-based Bank Management System designed to facilitate user account creation, money transfers, and transaction logging. The system ensures secure and efficient management of user accounts and transactions, providing a reliable platform for basic banking operations.

## Features
- **User Management**: Create, view, and manage user accounts.
- **Money Transfer**: Securely transfer money between user accounts.
- **Transaction Logs**: Maintain a detailed log of all transactions.
- **Responsive Design**: Optimized for both desktop and mobile devices.
- **Contact Form**: Users can contact the support team.

## Repository Structure
The repository is organized into several directories and files, each serving a specific purpose:

### CSS Files
- **footer.css**: Styles for the footer section of the web pages.
- **index.css**: General styles for the homepage, including layout, buttons, and containers.
- **navbar.css**: Styles for the navigation bar, ensuring a consistent look and feel across the site.

### JavaScript Files
- **navscroll.js**: Manages the functionality of the drop-down menu in the navigation bar.

### PHP Files
- **dbconnect.php**: Establishes a connection to the MySQL database, essential for all database operations.
- **footer.php**: Contains the HTML and PHP code for the footer section, included in multiple pages.
- **navbar.php**: Contains the HTML and PHP code for the navigation bar, included in multiple pages.

### HTML/PHP Pages
- **allusers.php**: Displays a list of all users and their details.
- **create_user.php**: Provides a form for creating new user accounts.
- **transfer_money.php**: Allows users to transfer money to other accounts.
- **transfer_log.php**: Displays a log of all money transfer transactions.
- **contact.php**: Contains a contact form for users to send messages to the support team.

## Database Schema
The system uses a MySQL database with the following key tables:
- **Users**: Stores user details such as userID, name, email, and balance.
- **Transactions**: Logs all transactions with details like transactionID, senderID, receiverID, amount, and date.

## System Requirements
- **Server**: Apache or any compatible web server
- **Database**: MySQL
- **Languages**: PHP, HTML, CSS, JavaScript
- **Frameworks/Libraries**: None required

## Installation
1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/bank-management-system.git
