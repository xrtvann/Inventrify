<?php
$page = isset($_GET['page']) ? $_GET['page'] : '/';
$pageTitles = [
    '/' => 'Dashboard | Inventrify',
    'products' => 'Products | Inventrify',
    'categories' => 'Categories | Inventrify',
    'orders' => 'Orders | Inventrify',
    'suppliers' => 'Suppliers | Inventrify',
    'reports' => 'Reports | Inventrify',
];
$title = isset($pageTitles[$page]) ? $pageTitles[$page] : 'Todolist App';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title); ?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Inventrify-32x32.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-70 bg-white text-gray-600 shadow-sm transition-all duration-300 ease-in-out fixed top-0 left-0 h-screen z-30 lg:relative lg:h-full flex flex-col shrink-0">
            <!-- Header Sidebar - Fixed -->
            <header class="p-5 flex-shrink-0">
                <div class="flex items-center justify-between h-[48px]">
                    <div class="brand" id="sidebarBrand">
                        <div class="flex items-center justify-center">
                            <img src="images/Inventrify-48x48.png" alt="Inventrify Logo">
                            <h1 class="text-xl font-bold text-primary ms-2.5">Inventrify</h1>
                        </div>
                    </div>

                    <div class="flex items-center ms-2.5">
                        <button id="sidebarToggle" class="text-gray-600 hover:text-gray-900">
                            <i class="fas fa-angle-left text-lg cursor-pointer transition duration-300"
                                id="toggleIcon"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Navigation Menu - Scrollable -->
            <?php $currentPage = isset($_GET['page']) ? $_GET['page'] : '/'; ?>
            <nav class="flex-1 overflow-y-auto">
                <div class="mt-6 mx-2">
                    <ul class="space-y-5 px-4 pb-6">
                        <li>
                            <a href="/"
                                class="flex items-center space-x-3 px-3 py-2.5 rounded-md sidebar-link <?= $currentPage === '/' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fas fa-house"></i>
                                <span class="text-md sidebar-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=products"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md sidebar-link <?= $currentPage === 'products' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fas fa-box-open"></i>
                                <span class="sidebar-text">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=categories"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md  sidebar-link <?= $currentPage === 'categories' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fas fa-list"></i>
                                <span class="sidebar-text">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=orders"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md sidebar-link <?= $currentPage === 'orders' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fas fa-dolly"></i>
                                <span class="sidebar-text">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=suppliers"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md sidebar-link <?= $currentPage === 'suppliers' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fa-solid fa-truck-field"></i>
                                <span class="sidebar-text">Suppliers</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=reports"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md sidebar-link <?= $currentPage === 'reports' ? 'sidebar-active' : 'hover-menu' ?>">
                                <i class="fa-solid fa-file-lines"></i>
                                <span class="sidebar-text">Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Overlay untuk mobile -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 lg:hidden hidden"></div>

        <!-- Main Content Area -->
        <div id="mainContent" class="flex-1 flex flex-col h-screen transition-all duration-300 lg:ml-0">
            <!-- Header Navbar - Sticky -->
            <header class="bg-white shadow-sm flex-shrink-0 z-10">
                <div class="flex items-center justify-end px-4 py-3 lg:px-6 lg:py-4">
                    <!-- Left side - Mobile menu button & Page title -->


                    <!-- Right side - Search, notifications, profile -->
                    <div class="flex items-center space-x-3 lg:space-x-4">

                        <!-- Notifications -->
                        <button class="relative text-gray-600 hover:text-gray-900 p-2">
                            <i class="fas fa-bell text-lg"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">3</span>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative">
                            <button id="profileDropdown"
                                class="border-1 border-gray-300 rounded-md p-2 flex items-center space-x-2 cursor-pointer hover:bg-gray-100">
                                <div
                                    class="name-profile bg-grey-200 rounded-full border-1 border-gray-300 w-7 h-7 flex items-center justify-center">
                                    <p class="font-semibold text-sm">MI</p>
                                </div>
                                <p class="text-xs font-semibold text-black">Muhammad Irvan</p>
                            </button>

                            <!-- Dropdown menu (initially hidden) -->
                            <div id="profileMenu"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 hidden">
                                <div class="py-2">
                                    <a href="#"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-user mr-3"></i>
                                        Profile
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-cog mr-3"></i>
                                        Settings
                                    </a>
                                    <hr class="my-1">
                                    <a href="#"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-sign-out-alt mr-3"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content - Scrollable -->
            <main class="flex-1 p-4 lg:p-6 bg-gray-100 overflow-y-auto">
                <div class="max-w-7xl mx-auto">
                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                    $allowed_pages = ['dashboard', 'products', 'categories', 'orders', 'suppliers', 'reports'];

                    if (in_array($page, $allowed_pages)) {
                        include("pages/" . $page . ".php");
                    } else {
                        echo "<p>Halaman tidak ditemukan.</p>";
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>