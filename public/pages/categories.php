<div class="container bg-white px-5 py-5 rounded-sm shadow-md mb-8">
    <!-- Categories Overview Cards -->
    <div class="info ps-3 text-lg font-medium mb-3">
        <h2>Categories Overview</h2>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white border-r border-slate-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Categories</p>
                    <p class="text-2xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +1 this month
                    </p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-tags text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white border-r border-slate-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Active Categories</p>
                    <p class="text-2xl font-bold text-gray-900">10</p>
                    <p class="text-xs text-green-600 mt-1">
                        <i class="fas fa-check mr-1"></i>
                        83% active
                    </p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white border-r border-slate-100 p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Top Category</p>
                    <p class="text-2xl font-bold text-gray-900">Electronics</p>
                    <p class="text-xs text-gray-600 mt-1">143 products</p>
                </div>
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-star text-indigo-600 text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-4">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Recently Added</p>
                    <p class="text-2xl font-bold text-gray-900">Gadgets</p>
                    <p class="text-xs text-gray-600 mt-1">Added 3 days ago</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-orange-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
<div class="container bg-white px-5 py-5 rounded-sm shadow-md">
    <div class="flex justify-between mb-8">
        <div class="search-box">
            <form action="#" method="get" class="relative">
                <i class="fa fa-search text-sm absolute top-3 left-3 text-slate-500"></i>
                <input type="text"
                    class="search-input focus:outline-none border border-slate-300 focus:border-slate-500 bg-slate-0 px-6 py-1.5 ps-10 rounded-sm"
                    placeholder="Search categories..." />
            </form>
        </div>
        <div class="right-action-buttons flex items-center gap-3">
            <div class="add-category">
                <button
                    class="bg-green-600 text-white px-4 py-1.5 rounded-sm hover:bg-green-700 cursor-pointer transition duration-200">
                    Add Category
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

    <div class="table-categories w-full">
        <div class="overflow-x-auto rounded-sm border border-slate-200">
            <table class="w-full text-left bg-white">
                <thead class="bg-slate-100 text-gray-700 border-b border-slate-200">
                    <tr>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[220px]">Category</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[120px] text-center">Products</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[180px]">Parent Category</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[140px]">Created On</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[120px] text-center">Status</th>
                        <th class="text-sm font-semibold py-3 px-4 min-w-[150px] text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div>
                                <div class="font-medium text-gray-900">Electronics</div>
                                <div class="text-sm text-gray-500">Devices, components, and accessories</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">143</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">—</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">Jan 05, 2024</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                Active
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-slate-600 hover:text-slate-800 p-1.5 rounded hover:bg-slate-50"
                                    title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
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
                                <div class="font-medium text-gray-900">Fashion</div>
                                <div class="text-sm text-gray-500">Clothing and apparel collections</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">98</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">—</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">Mar 22, 2024</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                Active
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-slate-600 hover:text-slate-800 p-1.5 rounded hover:bg-slate-50"
                                    title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
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
                                <div class="font-medium text-gray-900">Smartphones</div>
                                <div class="text-sm text-gray-500">Mobile phones and accessories</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">36</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-700">Electronics</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">May 12, 2024</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                Active
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-slate-600 hover:text-slate-800 p-1.5 rounded hover:bg-slate-50"
                                    title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
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
                                <div class="font-medium text-gray-900">Accessories</div>
                                <div class="text-sm text-gray-500">Wearables, bags, and extras</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">22</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-700">Fashion</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">Jul 01, 2024</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-exclamation-triangle text-yellow-600 mr-1" style="font-size: 8px;"></i>
                                Inactive
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-slate-600 hover:text-slate-800 p-1.5 rounded hover:bg-slate-50"
                                    title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
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
                                <div class="font-medium text-gray-900">Healthcare</div>
                                <div class="text-sm text-gray-500">Medical supplies and wellness</div>
                            </div>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">15</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">—</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-600">Aug 01, 2025</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i>
                                Active
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 p-1.5 rounded hover:bg-blue-50"
                                    title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </button>
                                <button class="text-slate-600 hover:text-slate-800 p-1.5 rounded hover:bg-slate-50"
                                    title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
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
                    class="font-medium">12</span> results
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