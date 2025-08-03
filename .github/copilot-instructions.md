# Inventrify - AI Agent Instructions

## Project Overview

Inventrify is a PHP-based inventory management system with a modern Tailwind CSS frontend. The application follows a simple file-based architecture without a framework, designed for LAMP/XAMPP/Laragon environments.

## Architecture & File Structure

### Core Architecture Pattern

- **Single Entry Point**: `public/index.php` handles all routing via `?page=` query parameters
- **Page Inclusion**: Uses PHP `include()` to load pages from `public/pages/` directory
- **No Database Layer**: Currently static data (database integration pending)
- **Frontend**: Tailwind CSS v4+ with custom utility classes and Poppins font

### Key Directories

```
public/                 # Web root (document root should point here)
├── index.php          # Main application entry point & layout
├── pages/             # Page components (dashboard, products, etc.)
├── css/style.css      # Compiled Tailwind output
├── js/app.js          # Vanilla JS for sidebar/UI interactions
├── images/            # App icons and assets
└── fontawesome-free/  # Icon library

src/
└── input.css          # Tailwind source with custom theme
```

## Development Workflow

### CSS Development

```bash
# Development with watch mode
npm run dev

# Production build
npm run build
```

The build process compiles `src/input.css` → `public/css/style.css` using Tailwind CLI.

### Custom Tailwind Configuration

Located in `src/input.css`:

- **Primary Color**: `--color-primary: #2464ad` (blue theme)
- **Font**: Poppins from Google Fonts
- **Custom Utilities**: `.hover-menu`, `.sidebar-active`

## Project-Specific Patterns

### Routing System

```php
// URL: /?page=products loads public/pages/products.php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$allowed_pages = ['dashboard', 'products', 'categories', 'orders', 'suppliers', 'reports'];
if (in_array($page, $allowed_pages)) {
    include("pages/" . $page . ".php");
}
```

### Page Structure Convention

Pages are PHP fragments (no `<!DOCTYPE>`, no `<html>`). Example pattern:

```php
<div class="container bg-white px-5 py-4 rounded-sm shadow-md">
    <!-- Page content here -->
</div>
```

### Sidebar Navigation

- Active page detection: `$currentPage === 'products' ? 'sidebar-active' : 'hover-menu'`
- Collapsible sidebar with `app.js` toggle functionality
- FontAwesome icons for all menu items

### Authentication Pages

Standalone pages (`sign-in.php`, `sign-up.php`) with full HTML structure, separate from main app layout.

## Component Patterns

### Data Tables

Follow this structure (see `products.php`):

```php
<table class="table-fixed text-left w-full rounded-sm overflow-hidden">
    <thead class="w-full bg-slate-300 text-gray-700 border-b border-slate-300">
        <!-- Headers with consistent padding: py-2.5 ps-4 -->
    </thead>
    <tbody>
        <!-- Data rows -->
    </tbody>
</table>
```

### Action Buttons

- Primary actions: `bg-blue-600 text-white px-4 py-1.5 rounded-sm hover:bg-blue-700`
- Secondary actions: `text-slate-600 px-4 py-1.5 rounded-sm border border-slate-300`

### Dashboard Cards

Grid layout: `grid grid-cols-3 gap-4` with white cards using `bg-white rounded-sm shadow-sm`

## Development Notes

### Current Limitations

- No backend database integration (static data only)
- No authentication system implemented
- Empty page files: `categories.php`, `orders.php`, `suppliers.php`, `reports.php`

### When Adding New Pages

1. Add to `$allowed_pages` array in `index.php`
2. Add navigation item to sidebar with appropriate FontAwesome icon
3. Create page file in `public/pages/` following container pattern
4. Update `$pageTitles` array for proper `<title>` tags

### Error Handling

- 404/500 pages in `public/error/` with relative asset paths (`../css/style.css`)
- Unknown pages show "Halaman tidak ditemukan" message

### JavaScript Patterns

Vanilla JS in `app.js` for UI interactions. Current implementation handles sidebar toggle with class manipulation and localStorage persistence.
