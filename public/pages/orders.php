<div class="container  bg-white px-5 py-5 rounded-sm shadow-md mb-8">
    <!-- Product Overview Cards -->
    <div class="info ps-3 text-lg font-medium mb-3">
        <h2>Overall Orders</h2>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white border-r border-slate-100 p-4 ">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Orders</p>
                    <p class="text-2xl font-bold text-gray-900">47</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +3 this month
                    </p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-box text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white border-r border-slate-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Top Received</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +2 this week
                    </p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white border-r border-slate-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Returned</p>
                    <p class="text-2xl font-bold text-orange-600">5</p>
                    <p class="text-xs text-orange-600 mt-1">
                        <i class="fas fa-exclamation-triangle mr-1"></i>
                        Needs restock
                    </p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-exclamation-triangle text-orange-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">On The Way</p>
                    <p class="text-2xl font-bold text-red-600">3</p>
                    <p class="text-xs text-red-600 mt-1">
                        <i class="fas fa-clock mr-1"></i>
                        Within 30 days
                    </p>
                </div>
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-red-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Table  -->
<div class="container bg-white px-5 py-5 rounded-sm shadow-md">
    <div class="flex justify-between mb-8">
        <div class="search-box">
            <form action="" method="post" class="relative">
                <i class="fa fa-search text-sm absolute top-3 left-3 text-slate-500"></i>
                <input type="text"
                    class="search-input focus:outline-none border border-slate-300 focus:border-slate-500 bg-slate-0 px-6 py-1.5 ps-10 rounded-sm"
                    placeholder="Search products..." />
            </form>
        </div>
        <div class="right-action-buttons flex items-center gap-3">
            <div class="add-product">
                <button
                    class="bg-green-600 text-white px-4 py-1.5 rounded-sm hover:bg-green-700 cursor-pointer transition duration-200">
                    Add Product
                </button>
            </div>
            <div class="filter">
                <button
                    class="text-slate-600 px-4 py-1.5 rounded-sm border border-slate-300 cursor-pointer hover:bg-slate-500 hover:text-white transition duration-200">
                    <i class="fa fa-filter"></i>
                    Filter
                </button>
            </div>
        </div>
    </div>

    <div class="table-products w-full">
        <div class="overflow-x-auto rounded-sm border border-slate-200">
            <table class="w-full text-left bg-white">
                <thead class="bg-slate-100 text-gray-700 border-b border-slate-200">
                    <tr>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[200px]">Product Name</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[120px]">Buying Price</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[100px] text-center">Quantity</th>

                        <th class="text-sm font-semibold py-3 px-4 min-w-[120px]">Expired Date</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[120px] text-center">Status</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[150px] text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">MacBook Pro 13"</div>
                                <div class="text-sm text-gray-500">Electronics</div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium text-sm">Rp 18,500,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                45 units
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">-</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                In Stock
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-1.5 rounded hover:bg-red-50"
                                    title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">iPhone 15 Pro</div>
                                <div class="text-sm text-gray-500">Electronics</div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium text-sm">Rp 16,999,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                8 units
                            </span>
                        </td>

                        <td class="py-3 px-4">
                            <span class="text-gray-600">-</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-exclamation-triangle text-yellow-600 mr-1" style="font-size: 8px;"></i>
                                Low Stock
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-1.5 rounded hover:bg-red-50"
                                    title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">Sony WH-1000XM5</div>
                                <div class="text-sm text-gray-500">Audio</div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium text-sm">Rp 4,999,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                23 units
                            </span>
                        </td>

                        <td class="py-3 px-4">
                            <span class="text-gray-600">-</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                In Stock
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-1.5 rounded hover:bg-red-50"
                                    title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">Paracetamol 500mg</div>
                                <div class="text-sm text-gray-500">Medicine</div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium text-sm">Rp 25,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                2 units
                            </span>
                        </td>

                        <td class="py-3 px-4">
                            <span class="text-orange-600 font-medium">Dec 15, 2025</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <i class="fas fa-times-circle text-red-600 mr-1" style="font-size: 8px;"></i>
                                Out of Stock
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-1.5 rounded hover:bg-red-50"
                                    title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">Uniqlo T-Shirt</div>
                                <div class="text-sm text-gray-500">Clothing</div>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium text-sm">Rp 199,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                156 units
                            </span>
                        </td>

                        <td class="py-3 px-4">
                            <span class="text-gray-600">-</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                In Stock
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View Details">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-1.5 rounded hover:bg-red-50"
                                    title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4 px-2">
            <div class="text-sm text-gray-600">
                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span
                    class="font-medium">47</span> results
            </div>
            <div class="flex items-center space-x-2">
                <button
                    class="px-3 py-1.5 text-sm border border-gray-300 rounded-sm hover:bg-gray-50 disabled:opacity-50"
                    disabled>
                    Previous
                </button>
                <button class="px-3 py-1.5 text-sm bg-blue-600 text-white rounded-sm hover:bg-blue-700">1</button>
                <button class="px-3 py-1.5 text-sm border border-gray-300 rounded-sm hover:bg-gray-50">2</button>
                <button class="px-3 py-1.5 text-sm border border-gray-300 rounded-sm hover:bg-gray-50">3</button>
                <span class="px-2 text-gray-500">...</span>
                <button class="px-3 py-1.5 text-sm border border-gray-300 rounded-sm hover:bg-gray-50">10</button>
                <button class="px-3 py-1.5 text-sm border border-gray-300 rounded-sm hover:bg-gray-50">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>