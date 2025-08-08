# ![Inventrify Logo](public/images/Inventrify-48x48.png) Inventrify

A modern and intuitive **Inventory Management System** built with PHP and Tailwind CSS. Inventrify helps businesses efficiently track products, manage orders, monitor stock levels, and streamline their inventory operations.



## ✨ Features

- **📊 Dashboard Overview** - Real-time inventory statistics and key metrics
- **📦 Product Management** - Add, edit, and track products with detailed information
- **🛒 Order Management** - Handle customer orders with status tracking
- **📋 Category Organization** - Organize products into categories
- **🏢 Supplier Management** - Manage supplier information and relationships
- **📈 Reports & Analytics** - Generate insightful inventory reports
- **🔍 Search & Filter** - Quickly find products and orders
- **📱 Responsive Design** - Works seamlessly on desktop and mobile devices
- **🎨 Modern UI** - Clean and intuitive interface built with Tailwind CSS

## 🛠️ Tech Stack

### Backend

- **PHP** - Server-side scripting language
- **File-based Architecture** - Simple routing system without frameworks

### Frontend

- **HTML5** - Semantic markup
- **Tailwind CSS v4+** - Utility-first CSS framework with custom theme
- **JavaScript (Vanilla)** - Interactive UI components
- **Font Awesome** - Icon library for UI elements
- **Google Fonts (Poppins)** - Typography

### Development Tools

- **Node.js & npm** - Package management and build tools
- **Tailwind CLI** - CSS compilation and optimization
- **Git** - Version control

### Server Requirements

- **LAMP/XAMPP/Laragon** - Local development environment
- **Apache** - Web server
- **PHP 7.4+** - Server-side processing

## 🚀 Getting Started

Follow these steps to set up Inventrify on your local machine:

### Prerequisites

Before you begin, ensure you have the following installed:

- **XAMPP/Laragon/LAMP** - Local development environment
- **Node.js** (v14 or higher) - [Download here](https://nodejs.org/)
- **Git** - [Download here](https://git-scm.com/)

### Installation

#### 1. Clone the Repository

```bash
git clone https://github.com/xrtvann/Inventrify.git
cd Inventrify
```

#### 2. Install Dependencies

```bash
npm install
```

#### 3. Set Up Local Server

**For Laragon Users:**

1. Move the project folder to `C:\laragon\www\inventrify`
2. Start Laragon
3. The application will be available at `http://inventrify.test` or `http://localhost/inventrify`

**For XAMPP Users:**

1. Move the project folder to `C:\xampp\htdocs\inventrify`
2. Start Apache in XAMPP Control Panel
3. The application will be available at `http://localhost/inventrify`

**For LAMP Users (Linux):**

1. Move the project folder to `/var/www/html/inventrify`
2. Ensure Apache is running
3. The application will be available at `http://localhost/inventrify`

#### 4. Configure Document Root

**Important:** Configure your web server's document root to point to the `public` directory:

- **Document Root:** `/path/to/inventrify/public`
- **URL:** `http://localhost` or `http://inventrify.test`

This ensures proper routing and security by keeping source files outside the web-accessible directory.

#### 5. Build CSS Assets

**For Development (with auto-rebuild):**

```bash
npm run dev
```

**For Production (minified):**

```bash
npm run build
```

#### 6. Access the Application

Open your web browser and navigate to:

- `http://localhost` (if document root is configured)
- `http://localhost/inventrify/public` (if using subdirectory)
- `http://inventrify.test` (if using Laragon with virtual host)

## 📖 Usage Guide

### Navigation

The application uses a simple query parameter routing system:

- **Dashboard:** `/?page=dashboard` or just `/`
- **Products:** `/?page=products`
- **Orders:** `/?page=orders`
- **Categories:** `/?page=categories`
- **Suppliers:** `/?page=suppliers`
- **Reports:** `/?page=reports`

### Managing Products

1. Navigate to the **Products** section
2. Use the **"Add Product"** button to create new products
3. View product details with the eye icon
4. Delete products with the trash icon
5. Use the search bar to find specific products
6. Apply filters to narrow down results

### Managing Orders

1. Go to the **Orders** section
2. View order statistics in the overview cards
3. Track order status (Completed, Pending, Shipping, Cancelled)
4. Use **"Add Order"** to create new orders
5. Search through orders using the search functionality

### Customizing the Interface

The application uses a custom Tailwind CSS theme located in `src/input.css`:

- **Primary Color:** `#2464ad` (blue theme)
- **Font:** Poppins from Google Fonts
- **Custom Utilities:** Sidebar interactions and hover states

## 🏗️ Project Structure

```
inventrify/
├── public/                 # Web root (document root should point here)
│   ├── index.php          # Main application entry point & layout
│   ├── sign-in.php        # Authentication page
│   ├── sign-up.php        # Registration page
│   ├── pages/             # Page components
│   │   ├── dashboard.php  # Dashboard overview
│   │   ├── products.php   # Product management
│   │   ├── orders.php     # Order management
│   │   ├── categories.php # Category management
│   │   ├── suppliers.php  # Supplier management
│   │   └── reports.php    # Reports and analytics
│   ├── css/
│   │   └── style.css      # Compiled Tailwind CSS
│   ├── js/
│   │   └── app.js         # Application JavaScript
│   ├── images/            # Application icons and assets
│   ├── fontawesome-free/  # Font Awesome icon library
│   └── error/             # Error pages (404, 500)
├── src/
│   └── input.css          # Tailwind source with custom theme
├── package.json           # Node.js dependencies and scripts
└── README.md              # Project documentation
```

## 🎨 Customization

### Modifying the Theme

Edit `src/input.css` to customize colors, fonts, and styles:

```css
@import "tailwindcss";

/* Custom theme variables */
:root {
  --color-primary: #2464ad; /* Change primary color */
}

/* Custom utility classes */
.sidebar-active {
  /* Custom sidebar active state */
}
```

After making changes, rebuild the CSS:

```bash
npm run build
```

### Adding New Pages

1. Create a new PHP file in `public/pages/`
2. Add the page to the `$allowed_pages` array in `index.php`
3. Add a sidebar navigation item
4. Update the `$pageTitles` array for proper page titles

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

### Development Guidelines

1. Follow the existing code structure and patterns
2. Use the established Tailwind CSS utility classes
3. Test your changes across different browsers
4. Ensure responsive design compatibility
5. Document any new features or changes

## 📄 License

This project is licensed under the ISC License. See the [LICENSE](LICENSE) file for details.

## 🐛 Issues & Support

If you encounter any problems or have suggestions, please:

1. Check the [Issues](https://github.com/xrtvann/Inventrify/issues) page
2. Create a new issue with detailed information
3. Include steps to reproduce any bugs

## 🔮 Future Enhancements

- **Database Integration** - MySQL/PostgreSQL support
- **User Authentication** - Login/logout functionality
- **API Development** - RESTful API for mobile apps
- **Advanced Reporting** - Export to PDF/Excel
- **Multi-language Support** - Internationalization
- **Real-time Notifications** - Stock alerts and updates
- **Barcode Scanning** - Product identification
- **Multi-warehouse Support** - Location-based inventory

## 📧 Contact

For questions or support, please contact:

- **GitHub:** [@xrtvann](https://github.com/xrtvann)
- **Repository:** [Inventrify](https://github.com/xrtvann/Inventrify)

---

**Made with ❤️ for efficient inventory management**
