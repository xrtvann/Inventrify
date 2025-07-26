<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Inventrify-32x32.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-70 bg-white text-gray-600 shadow-sm transition-transform duration-300 ease-in-out transform lg:translate-x-0 -translate-x-full fixed lg:relative z-30 h-full lg:h-auto">
            <!-- Header Sidebar -->
            <header class="p-5">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 flex items-center justify-center">
                        <img src="images/Inventrify-48x48.png" alt="">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-primary">Inventrify</h1>
                    </div>
                </div>
            </header>

            <!-- Navigation Menu -->
            <nav class="mt-6 mx-2">
                <ul class="space-y-5 px-4">
                    <li>
                        <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-md bg-primary text-white">
                            <i class="fas fa-house w-5"></i>
                            <span class="text-md">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors">
                            <i class="fas fa-box-open w-5"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors">
                            <i class="fas fa-list w-5"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors">
                            <i class="fas fa-dolly w-5"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors">
                            <i class="fa-solid fa-truck-field w-5"></i>
                            <span>Suppliers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors">
                            <i class="fa-solid fa-file-lines w-5"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                </ul>


            </nav>
        </aside>

        <!-- Overlay untuk mobile -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 lg:hidden hidden"></div>
        <div class="flex-1 flex flex-col min-h-screen">
            <!-- Header Navbar -->
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="flex items-center justify-between px-4 py-3 lg:px-6 lg:py-4">
                    <!-- Left side - Mobile menu button & Page title -->
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="text-gray-600 hover:text-gray-900 p-1">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>

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

            <!-- Main Content -->
            <main class="flex-1 p-4 lg:p-6">
                <div class="max-w-7xl mx-auto">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Total Products -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Total Products</h3>
                                    <p class="text-2xl font-bold text-gray-900 mt-1">2,847</p>
                                </div>
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-box-open text-primary text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="text-green-600 font-medium">+12%</span>
                                <span class="text-gray-500 ml-1">from last month</span>
                            </div>
                        </div>

                        <!-- Low Stock -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Low Stock</h3>
                                    <p class="text-2xl font-bold text-gray-900 mt-1">23</p>
                                </div>
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="text-red-600 font-medium">+3</span>
                                <span class="text-gray-500 ml-1">items need restocking</span>
                            </div>
                        </div>

                        <!-- Orders Today -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Orders Today</h3>
                                    <p class="text-2xl font-bold text-gray-900 mt-1">47</p>
                                </div>
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-dolly text-green-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="text-green-600 font-medium">+8%</span>
                                <span class="text-gray-500 ml-1">from yesterday</span>
                            </div>
                        </div>

                        <!-- Revenue -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-500">Revenue</h3>
                                    <p class="text-2xl font-bold text-gray-900 mt-1">$24,567</p>
                                </div>
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center text-sm">
                                <span class="text-green-600 font-medium">+15%</span>
                                <span class="text-gray-500 ml-1">from last week</span>
                            </div>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h2>
                        <p class="text-gray-600">Your dashboard content goes here...</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>