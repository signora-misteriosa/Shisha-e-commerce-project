# Shisha — Luxury Bag E-Commerce Website

A full-stack web application for a luxury handbag online store, built with PHP, MySQL, HTML, and CSS. The project includes a customer-facing storefront and a complete admin dashboard for product and order management.

---

## Features

### Storefront
- Responsive design with mobile and desktop layouts
- Navigation menu with categories (Women, Men) and subcategories
- Product listing page with images, descriptions, and pricing
- Product detail page with image gallery and color attributes
- Search functionality
- User registration and login system with session management

### Admin Dashboard
- Secure login — only authenticated users can access the dashboard
- **Products:** View, add, edit, and delete products
- **Orders:** View and manage customer orders with status tracking
- **Users:** View and manage registered users

---

## Tech Stack

| Layer     | Technology              |
|-----------|-------------------------|
| Frontend  | HTML5, CSS3, Bootstrap 5 |
| Backend   | PHP 8                   |
| Database  | MySQL 8                 |
| Design    | Figma (mockups included) |

---

## Database Schema

The database (`shisha`) contains the following tables:

- `users` — registered customers (id, full name, email, hashed password)
- `produs` — products (id, name, description, price)
- `imagini_produs` — product images (supports multiple images per product, with a main image flag)
- `atribute_produse` — product attributes (e.g. color variants)
- `comenzi` — orders (id, date, user, status)
- `com_produse` — order–product junction table
- `comenzi_produse` — view joining orders with product details

Passwords are stored using PHP's `password_hash()` (bcrypt).

---

## Project Structure

```
pfinal/
├── proiectfinal.php       # Main storefront page
├── proiectfinal.html      # Static version of the storefront
├── p6.html                # Product detail page
├── index.php              # Admin dashboard — Products
├── users.php              # Admin dashboard — Users
├── comenzi.php            # Admin dashboard — Orders
├── edit_prod.php          # Edit product
├── edit_com.php           # Edit order
├── produs_nou.php         # Add new product
├── login.php              # Login page
├── registration.php       # Registration page
├── logout.php             # Logout handler
├── database.php           # Database connection
├── shishadb.sql           # MySQL database dump
├── style.css              # Main stylesheet (storefront)
├── style_dashboard.css    # Admin dashboard stylesheet
├── style_registration.css # Login/register stylesheet
├── Figma mockups/         # UI design mockups (PDF)
└── *.png / *.jpg          # Product and UI images
```

---

## Setup & Installation

### Prerequisites
- PHP 8+
- MySQL 8+
- A local server environment (e.g. XAMPP, WAMP, or MAMP)

### Steps

1. **Clone or download** this repository into your server's web root (e.g. `htdocs/` for XAMPP).

2. **Import the database:**
   - Open phpMyAdmin (or your preferred MySQL client)
   - Create a new database named `shisha`
   - Import `pfinal/shishadb.sql`

3. **Configure the database connection** in `database.php`:
   ```php
   $conn = mysqli_connect("localhost", "your_user", "your_password", "shisha");
   ```

4. **Start your local server** and navigate to:
   ```
   http://localhost/pfinal/proiectfinal.php
   ```

5. **Access the admin dashboard** at:
   ```
   http://localhost/pfinal/index.php
   ```

---

## Screenshots

**Homepage**:
<img width="1000" height="5398" alt="_C__downloads_info_shisha_shishaweb_proiectfinal html" src="https://github.com/user-attachments/assets/2c072de5-3fde-45c7-83da-c6b9c5937e9a" />

**Product Page**:
<img width="1400" height="2546" alt="_C__downloads_info_shisha_shishaweb_p6 html" src="https://github.com/user-attachments/assets/a1e61e7f-7d4c-4f4e-8c86-c05dbde40ecf" />

**Homepage (Mobile)**:

<img width="270" height="7620" alt="_C__downloads_info_shisha_shishaweb_proiectfinal html(iPhone 12 Pro)" src="https://github.com/user-attachments/assets/ef591d1d-a499-4f21-a88c-e79088d9c8bb" />


> Figma design mockups are available in the `Figma mockups/` folder.

---

## Notes

- This project was developed as a university web development assignment.
