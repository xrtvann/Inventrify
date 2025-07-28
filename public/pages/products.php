<!-- Products Page Content -->
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Products</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">2,847</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-box-open text-primary text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">In Stock</p>
                    <p class="text-2xl font-bold text-green-600 mt-1">2,124</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Low Stock</p>
                    <p class="text-2xl font-bold text-yellow-600 mt-1">23</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Out of Stock</p>
                    <p class="text-2xl font-bold text-red-600 mt-1">15</p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-times-circle text-red-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            <!-- Search -->
            <div class="flex-1 max-w-md">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search products..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                </div>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap gap-3">
                <select
                    class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                    <option>All Categories</option>
                    <option>Electronics</option>
                    <option>Clothing</option>
                    <option>Books</option>
                    <option>Home & Garden</option>
                </select>

                <select
                    class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                    <option>All Status</option>
                    <option>In Stock</option>
                    <option>Low Stock</option>
                    <option>Out of Stock</option>
                </select>

                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    <i class="fas fa-filter mr-2"></i>
                    More Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Product</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Category</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">SKU</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Stock</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Price</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Status</th>
                        <th class="text-left py-3 px-6 font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-laptop text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">MacBook Pro 14"</p>
                                    <p class="text-sm text-gray-500">Apple M2 Chip, 16GB RAM</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-700">Electronics</td>
                        <td class="py-4 px-6 text-gray-700">MBP-14-M2-001</td>
                        <td class="py-4 px-6">
                            <span class="text-green-600 font-medium">25</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">$1,999.00</td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                In Stock
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-400 hover:text-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-mobile-alt text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">iPhone 15 Pro</p>
                                    <p class="text-sm text-gray-500">256GB, Titanium Blue</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-700">Electronics</td>
                        <td class="py-4 px-6 text-gray-700">IP15-256-TB-001</td>
                        <td class="py-4 px-6">
                            <span class="text-yellow-600 font-medium">8</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">$1,199.00</td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Low Stock
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-400 hover:text-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-tshirt text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Nike Air Max 270</p>
                                    <p class="text-sm text-gray-500">Size 9, White/Black</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-700">Clothing</td>
                        <td class="py-4 px-6 text-gray-700">NAM-270-9-WB</td>
                        <td class="py-4 px-6">
                            <span class="text-red-600 font-medium">0</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">$150.00</td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Out of Stock
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-400 hover:text-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-book text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Clean Code</p>
                                    <p class="text-sm text-gray-500">By Robert C. Martin</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-700">Books</td>
                        <td class="py-4 px-6 text-gray-700">BOOK-CC-001</td>
                        <td class="py-4 px-6">
                            <span class="text-green-600 font-medium">45</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">$42.99</td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                In Stock
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-400 hover:text-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-seedling text-gray-400"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Monstera Plant</p>
                                    <p class="text-sm text-gray-500">Large, with ceramic pot</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-700">Home & Garden</td>
                        <td class="py-4 px-6 text-gray-700">PLANT-MON-L-001</td>
                        <td class="py-4 px-6">
                            <span class="text-green-600 font-medium">12</span>
                        </td>
                        <td class="py-4 px-6 text-gray-700">$89.99</td>
                        <td class="py-4 px-6">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                In Stock
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-400 hover:text-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-6 py-3 border-t border-gray-200 flex items-center justify-between">
            <div class="flex items-center text-sm text-gray-700">
                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span
                    class="font-medium">2,847</span> results
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50 disabled:opacity-50"
                    disabled>
                    Previous
                </button>
                <button class="px-3 py-1 text-sm bg-primary text-white rounded">1</button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">2</button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">3</button>
                <span class="px-2 text-sm text-gray-500">...</span>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">570</button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-50">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add Product Modal (Hidden by default) -->
<div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Add New Product</h3>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <form class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                        <input type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                            placeholder="Enter product name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">SKU</label>
                        <input type="text"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                            placeholder="Enter SKU">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                            <option>Select category</option>
                            <option>Electronics</option>
                            <option>Clothing</option>
                            <option>Books</option>
                            <option>Home & Garden</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">$</span>
                            <input type="number" step="0.01"
                                class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                                placeholder="0.00">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Stock Quantity</label>
                        <input type="number"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                            placeholder="0">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary">
                            <option>In Stock</option>
                            <option>Low Stock</option>
                            <option>Out of Stock</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary"
                        placeholder="Enter product description"></textarea>
                </div>

                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                    <button type="button" id="cancelBtn"
                        class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Modal functionality
    document.addEventListener('DOMContentLoaded', function () {
        const addProductBtn = document.getElementById('addProductBtn');
        const addProductModal = document.getElementById('addProductModal');
        const closeModal = document.getElementById('closeModal');
        const cancelBtn = document.getElementById('cancelBtn');

        // Open modal
        addProductBtn.addEventListener('click', function () {
            addProductModal.classList.remove('hidden');
        });

        // Close modal
        function closeModalFunc() {
            addProductModal.classList.add('hidden');
        }

        closeModal.addEventListener('click', closeModalFunc);
        cancelBtn.addEventListener('click', closeModalFunc);

        // Close modal when clicking outside
        addProductModal.addEventListener('click', function (e) {
            if (e.target === addProductModal) {
                closeModalFunc();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !addProductModal.classList.contains('hidden')) {
                closeModalFunc();
            }
        });
    });
</script>