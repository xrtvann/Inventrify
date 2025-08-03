<div class="container bg-white px-5 py-4 rounded-sm shadow-md">
    <div class="flex justify-between mb-8">
        <div class="search-box">
            <form action="" method="post" class="relative">
                <i class="fa fa-search text-sm absolute top-3 left-3 text-slate-500"></i>
                <input type="text"
                    class="search-input focus:outline-none border border-slate-300 focus:border-slate-500 bg-slate-100 px-6 py-1.5 ps-10 rounded-sm"
                    placeholder="Search products..." />
            </form>
        </div>
        <div class="right-action-buttons flex items-center gap-3">
            <div class="add-product">
                <button class="bg-blue-600 text-white px-4 py-1.5 rounded-sm hover:bg-blue-700 cursor-pointer transition duration-200">
                    Add Product
                </button>
            </div>
            <div class="filter">
                <button class="text-slate-600 px-4 py-1.5 rounded-sm border border-slate-300 cursor-pointer hover:bg-slate-500 hover:text-white transition duration-200">
                    <i class="fa fa-filter"></i>
                    Filter
                </button>
            </div>
        </div>
    </div>
    <div class="table-products w-full">
        <table class="table-fixed text-left w-full rounded-sm overflow-hidden">
            <thead class="w-full bg-slate-300 text-gray-700 border-b border-slate-300">
                <tr >
                    <th class="text-sm font-medium py-2.5 ps-4">Name</th>
                    <th class="text-sm font-medium py-2.5">Buying Price</th>
                    <th class="text-sm font-medium py-2.5">Quantity</th>
                    <th class="text-sm font-medium py-2.5">Threshold Value</th>
                    <th class="text-sm font-medium py-2.5">Expired Date</th>
                    <th class="text-sm font-medium py-2.5">Availability</th>
                    <th class="text-sm font-medium py-2.5">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2.5">lorem10</td>
                    <td class="py-2.5">lorem10</td>
                    <td class="py-2.5">lorem10</td>
                    <td class="py-2.5">lorem10</td>
                    <td class="py-2.5">lorem10</td>
                    <td class="py-2.5">lorem10</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>