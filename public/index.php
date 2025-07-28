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
            <nav class="flex-1 overflow-y-auto">
                <div class="mt-6 mx-2">
                    <ul class="space-y-5 px-4 pb-6">
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5 rounded-md bg-primary text-white sidebar-link">
                                <i class="fas fa-house"></i>
                                <span class="text-md sidebar-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors sidebar-link">
                                <i class="fas fa-box-open"></i>
                                <span class="sidebar-text">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors sidebar-link">
                                <i class="fas fa-list"></i>
                                <span class="sidebar-text">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors sidebar-link">
                                <i class="fas fa-dolly"></i>
                                <span class="sidebar-text">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors sidebar-link">
                                <i class="fa-solid fa-truck-field"></i>
                                <span class="sidebar-text">Suppliers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center space-x-3 px-3 py-2.5  rounded-md hover:bg-primary hover:text-white transition-colors sidebar-link">
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
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam ea ipsa veritatis rerum harum
                            doloremque laudantium. Quasi eaque aspernatur aliquid, consequuntur fugiat fuga libero
                            exercitationem obcaecati, blanditiis eos molestiae totam unde! Ratione, excepturi rerum
                            debitis animi reiciendis aut mollitia earum accusamus modi magnam recusandae quis quod
                            aspernatur provident a sapiente pariatur id vel inventore maxime nihil nisi iure placeat
                            accusantium. Aliquid quisquam iste veritatis odit excepturi mollitia vitae dignissimos nihil
                            blanditiis libero iure nostrum consequuntur repudiandae rerum in eveniet accusamus tenetur
                            nemo dolorem, odio asperiores cum? Quia ratione voluptas nemo exercitationem asperiores
                            nulla ad ipsa molestiae nobis cupiditate! Pariatur consequatur saepe quam, placeat libero
                            eos quo aliquid rerum optio cumque. Nesciunt possimus, necessitatibus consectetur ducimus
                            cum laboriosam in nihil, eius natus vero harum libero ipsa, cumque beatae mollitia impedit!
                            Dolore labore odit perferendis saepe assumenda consequatur provident impedit quae,
                            exercitationem, earum suscipit aliquid doloremque nulla veritatis repellat laborum numquam,
                            nobis sint et sed! Est perspiciatis excepturi molestiae consequatur placeat nobis unde
                            incidunt earum recusandae, dolores animi magni repellendus vero, id consequuntur temporibus,
                            eos eligendi? Beatae delectus dolores optio? Atque hic, quas tempora expedita laboriosam
                            tenetur aut, totam impedit dolorem recusandae officia? Consequatur atque sequi numquam
                            veritatis ab illum beatae quisquam nulla dignissimos aliquid natus tenetur voluptatibus
                            suscipit quam nobis minus fugit ad dolor, debitis ex. Ea, in quisquam. Repudiandae eligendi
                            iusto eveniet nam, id iste dolorem! Veniam doloribus asperiores quo aperiam reprehenderit
                            magni, provident corrupti sint, nesciunt eaque error accusamus assumenda molestiae mollitia
                            dolor dolore aliquid eveniet esse neque sit, voluptatum alias eos autem? Natus adipisci
                            sequi exercitationem, eveniet ullam itaque alias mollitia optio nihil quos assumenda odit
                            quibusdam, sit veritatis quaerat iste vero corporis repudiandae dicta? Enim minus porro
                            excepturi perferendis nam atque, quasi cumque commodi consequuntur sed, quisquam
                            perspiciatis neque amet architecto beatae? Quibusdam, eaque quod dignissimos quasi pariatur
                            tempore deleniti ut deserunt eveniet exercitationem error. Quis reiciendis nihil eos
                            laboriosam nobis in odio nisi minus blanditiis cum corrupti pariatur eveniet nostrum illum
                            mollitia dolorum labore assumenda, quam deleniti esse. Ipsa recusandae necessitatibus
                            voluptate at tempore dolorum exercitationem nesciunt repudiandae, consequatur odit, dolorem
                            quasi? Quos molestias maiores non ipsam perspiciatis dicta at temporibus nulla enim, sequi,
                            alias beatae consequuntur quasi hic eveniet sunt a minus. Voluptatum, repudiandae
                            recusandae. Expedita doloremque ea necessitatibus omnis possimus delectus laborum, ipsam
                            quasi ex accusamus perspiciatis harum animi molestiae. Quod vero culpa harum, labore
                            assumenda pariatur dolor sequi a nisi consectetur cum neque.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>