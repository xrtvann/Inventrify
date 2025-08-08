<?php
// Sample data for reports - this would typically come from a database
$currentMonth = date('F Y');
$lastMonth = date('F Y', strtotime('-1 month'));
?>

<!-- First Row: Overview and Best Selling Category -->
<div class="grid grid-cols-2 gap-4 mb-4">
    <!-- Overview Section -->
    <div class="container bg-white px-5 py-5 rounded-sm shadow-md">
        <div class="info ps-3 text-lg font-medium mb-3">
            <h2>Overview</h2>
        </div>

    </div>

    <!-- Best Selling Category -->
    <div class="container bg-white px-5 py-5 rounded-sm shadow-md">
        <div class="flex justify-between items-center mb-4">
            <div class="info ps-3 text-lg font-medium">
                <h2>Best selling category</h2>
            </div>
            <a href="#" class="text-sm text-blue-600 hover:text-blue-700">See All</a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-sm border border-slate-200">
            <table class="w-full text-left bg-white">
                <thead class="bg-slate-100 text-gray-700 border-b border-slate-200">
                    <tr>
                        <th class="text-sm font-semibold py-3 px-4">Category</th>
                        <th class="text-sm font-semibold py-3 px-4">Turn Over</th>
                        <th class="text-sm font-semibold py-3 px-4 text-center">Increase By</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div class="font-medium text-gray-900">Vegetable</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium">Rp 26,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                                3.2%
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div class="text-gray-900">Instant Food</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium">Rp 22,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                                2%
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4">
                            <div class="text-gray-900">Households</div>
                        </td>
                        <td class="py-3 px-4">
                            <span class="text-gray-900 font-medium">Rp 22,000</span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                                1.5%
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Second Row: Profit & Revenue Chart (Full Width) -->
<div class="container bg-white px-5 py-5 rounded-sm shadow-md mb-4">
    <div class="flex justify-between items-center mb-6">
        <div class="info ps-3 text-lg font-medium">
            <h2>Profit & Revenue</h2>
        </div>
        <button id="chartPeriodBtn"
            class="text-slate-600 px-4 py-1.5 rounded-sm border border-slate-300 cursor-pointer hover:bg-slate-500 hover:text-white transition duration-200">
            <i class="fas fa-calendar mr-2"></i>
            Weekly
        </button>
    </div>

    <!-- Chart Legend -->
    <div class="flex items-center gap-6 mb-6">
        <div class="flex items-center gap-2">
            <div class="w-3 h-3 rounded-full bg-blue-500"></div>
            <span class="text-sm text-gray-600">Revenue</span>
        </div>
        <div class="flex items-center gap-2">
            <div class="w-3 h-3 rounded-full" style="background-color: rgba(219, 163, 98, 0.8);"></div>
            <span class="text-sm text-gray-600">Profit</span>
        </div>
    </div>

    <!-- Chart Container -->
    <div class="relative">
        <canvas id="profitRevenueChart" class="w-full" style="height: 300px;"></canvas>

        <!-- Chart Tooltip -->
        <div id="chartTooltip" class="absolute bg-white rounded-lg shadow-lg border border-gray-200 p-3 hidden"
            style="pointer-events: none;">
            <div class="text-xs text-gray-500 mb-1" id="tooltipLabel">This Month</div>
            <div class="text-base font-semibold text-gray-900" id="tooltipValue">220,342,123</div>
            <div class="text-xs text-gray-500" id="tooltipMonth">Nov</div>
        </div>
    </div>
</div>

<!-- Best Selling Products Table -->
<div class="container bg-white px-5 py-5 rounded-sm shadow-md mt-4">
    <div class="flex justify-between items-center mb-4">
        <div class="info ps-3 text-lg font-medium">
            <h2>Best selling product</h2>
        </div>
        <a href="#" class="text-sm text-blue-600 hover:text-blue-700">See All</a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-sm border border-slate-200">
        <table class="w-full text-left bg-white">
            <thead class="bg-slate-100 text-gray-700 border-b border-slate-200">
                <tr>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[200px]">Product</th>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[120px]">Product ID</th>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[120px]">Category</th>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[140px] text-center">Remaining Quantity</th>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[120px]">Turn Over</th>
                    <th class="text-sm font-semibold py-3 px-4 min-w-[120px] text-center">Increase By</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-3 px-4">
                        <div>
                            <div class="font-medium text-gray-900">Tomato</div>
                            <div class="text-sm text-gray-500">Fresh Vegetable</div>
                        </div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">23567</span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">Vegetable</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            225 kg
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-900 font-medium">Rp 17,000</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                            2.3%
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-3 px-4">
                        <div>
                            <div class="font-medium text-gray-900">Onion</div>
                            <div class="text-sm text-gray-500">Fresh Vegetable</div>
                        </div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">25831</span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">Vegetable</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            200 kg
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-900 font-medium">Rp 12,000</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                            1.3%
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-3 px-4">
                        <div>
                            <div class="font-medium text-gray-900">Maggi</div>
                            <div class="text-sm text-gray-500">Instant Noodles</div>
                        </div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">56841</span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">Instant Food</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            200 Packet
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-900 font-medium">Rp 10,000</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                            1.3%
                        </span>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-3 px-4">
                        <div>
                            <div class="font-medium text-gray-900">Surf Excel</div>
                            <div class="text-sm text-gray-500">Detergent Powder</div>
                        </div>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">23567</span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-600 text-sm">Household</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            125 Packet
                        </span>
                    </td>
                    <td class="py-3 px-4">
                        <span class="text-gray-900 font-medium">Rp 9,000</span>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-arrow-up mr-1" style="font-size: 8px;"></i>
                            1%
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('profitRevenueChart').getContext('2d');
        const tooltip = document.getElementById('chartTooltip');

        // Dummy data based on Figma design (Sep to Mar)
        const chartData = {
            labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar'],
            datasets: [
                {
                    label: 'Revenue',
                    data: [45000, 52000, 58000, 48000, 62000, 68000, 72000],
                    borderColor: '#448DF2',
                    backgroundColor: 'rgba(68, 141, 242, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#448DF2',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 4,
                    pointRadius: 6,
                    pointHoverRadius: 8
                },
                {
                    label: 'Profit',
                    data: [25000, 30000, 35000, 28000, 40000, 42000, 45000],
                    borderColor: 'rgba(219, 163, 98, 0.8)',
                    backgroundColor: 'rgba(219, 163, 98, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(219, 163, 98, 0.8)',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 4,
                    pointRadius: 6,
                    pointHoverRadius: 8
                }
            ]
        };

        const config = {
            type: 'line',
            data: chartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // We have custom legend
                    },
                    tooltip: {
                        enabled: false, // Disable default tooltip
                        external: function (context) {
                            const tooltipModel = context.tooltip;

                            if (tooltipModel.opacity === 0) {
                                tooltip.style.display = 'none';
                                return;
                            }

                            // Show tooltip
                            if (tooltipModel.body) {
                                const dataPoint = tooltipModel.dataPoints[0];
                                const value = dataPoint.parsed.y;
                                const label = dataPoint.label;
                                const datasetLabel = dataPoint.dataset.label;

                                document.getElementById('tooltipLabel').textContent = datasetLabel;
                                document.getElementById('tooltipValue').textContent = 'Rp ' + value.toLocaleString();
                                document.getElementById('tooltipMonth').textContent = label;

                                tooltip.style.display = 'block';
                            }

                            // Position tooltip
                            const position = context.chart.canvas.getBoundingClientRect();
                            tooltip.style.left = position.left + tooltipModel.caretX + 'px';
                            tooltip.style.top = position.top + tooltipModel.caretY - 50 + 'px';
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: true,
                            color: '#F0F1F3',
                            lineWidth: 1
                        },
                        ticks: {
                            color: '#858D9D',
                            font: {
                                family: 'Inter',
                                size: 14
                            }
                        },
                        border: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: false,
                        min: 20000,
                        max: 80000,
                        grid: {
                            display: true,
                            color: '#F0F1F3',
                            lineWidth: 1
                        },
                        ticks: {
                            color: '#858D9D',
                            font: {
                                family: 'Inter',
                                size: 14
                            },
                            callback: function (value) {
                                return (value / 1000) + 'K';
                            },
                            stepSize: 20000
                        },
                        border: {
                            display: false
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                elements: {
                    point: {
                        hoverRadius: 8
                    }
                }
            }
        };

        const chart = new Chart(ctx, config);

        // Period button functionality
        document.getElementById('chartPeriodBtn').addEventListener('click', function () {
            // You can implement period switching logic here
            console.log('Period button clicked');
            // For now, just cycle through different periods
            const periods = ['Weekly', 'Monthly', 'Yearly'];
            const currentText = this.textContent.trim();
            const currentIndex = periods.findIndex(p => currentText.includes(p));
            const nextIndex = (currentIndex + 1) % periods.length;

            this.innerHTML = '<i class="fas fa-calendar mr-2"></i>' + periods[nextIndex];

            // Here you would typically update the chart data based on the selected period
            // chart.data = newData;
            // chart.update();
        });

        // Hide tooltip when mouse leaves chart area
        ctx.canvas.addEventListener('mouseleave', function () {
            tooltip.style.display = 'none';
        });
    });
</script>