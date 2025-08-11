<?php
// Sample data for reports - this would typically come from a database
$currentMonth = date('F Y');
$lastMonth = date('F Y', strtotime('-1 month'));
?>
<!-- First Row: Overview and Best Selling Category -->
<div class="container">
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-4">
        <!-- Overview Section -->
        <div class="container bg-white px-5 py-5 rounded-sm shadow-md min-w-0">
            <div class="info ps-3 text-lg font-medium mb-3">
                <h2>Overview (<?php echo $currentMonth; ?>)</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Total Revenue -->
                <div class="bg-white border border-slate-200 rounded-sm p-4">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 rounded-md bg-blue-100 flex items-center justify-center">
                                <i class="fas fa-coins text-blue-600 text-sm"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-600">Total Revenue</p>
                        </div>
                        <p class="text-lg font-semibold text-gray-900 leading-none mb-1">Rp 72,000,000</p>
                        <p class="text-xs">
                            <span class="text-green-600 inline-flex items-center font-medium">
                                <i class="fas fa-arrow-up mr-1" style="font-size:8px;"></i> +8.4%
                            </span>
                            <span class="text-gray-500 ml-1">vs <?php echo $lastMonth; ?></span>
                        </p>
                    </div>

                </div>

                <!-- Net Profit -->
                <div class="bg-white border border-slate-200 rounded-sm p-4">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-8 h-8 rounded-md bg-emerald-100 flex items-center justify-center">
                            <i class="fas fa-chart-line text-emerald-600 text-sm"></i>
                        </div>
                        <p class="text-sm font-medium text-gray-600">Net Profit</p>
                    </div>
                    <p class="text-lg font-semibold text-gray-900 leading-none mb-1">Rp 28,400,000</p>
                    <p class="text-xs">
                        <span class="text-green-600 inline-flex items-center font-medium">
                            <i class="fas fa-arrow-up mr-1" style="font-size:8px;"></i> +5.1%
                        </span>
                        <span class="text-gray-500 ml-1">Margin 39%</span>
                    </p>
                </div>
            </div>

        </div>

        <!-- Best Selling Category -->
        <div class="container bg-white px-5 py-5 rounded-sm shadow-md min-w-0">
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
</div>


<!-- Second Row: Profit & Revenue Chart (Full Width) -->
<div class="container bg-white px-5 py-5 rounded-sm shadow-md mb-4 min-w-0">
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
<div class="container bg-white px-5 py-5 rounded-sm shadow-md mt-4 min-w-0">
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
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const canvas = document.getElementById('profitRevenueChart');
        const ctx = canvas.getContext('2d');
        const tooltipEl = document.getElementById('chartTooltip');
        const tooltipLabel = document.getElementById('tooltipLabel');
        const tooltipValue = document.getElementById('tooltipValue');
        const tooltipMonth = document.getElementById('tooltipMonth');
        const periodBtn = document.getElementById('chartPeriodBtn');

        // Sample datasets for different periods (placeholder logic)
        const periodDataMap = {
            Weekly: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                revenue: [11000, 12500, 11800, 14000, 15000, 15800, 17000],
                profit: [6000, 7200, 6800, 7600, 8000, 8500, 9000]
            },
            Monthly: {
                labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar'],
                revenue: [45000, 52000, 58000, 48000, 62000, 68000, 72000],
                profit: [25000, 30000, 35000, 28000, 40000, 42000, 45000]
            },
            Yearly: {
                labels: ['2019', '2020', '2021', '2022', '2023', '2024', '2025'],
                revenue: [320000, 350000, 380000, 410000, 470000, 520000, 560000],
                profit: [140000, 160000, 185000, 195000, 230000, 255000, 280000]
            }
        };

        let currentPeriod = 'Weekly';

        // Plugin: dynamic gradient + vertical hover line
        const enhancedVisualPlugin = {
            id: 'enhancedVisual',
            beforeDatasetsDraw(chart, args, pluginOptions) {
                const { ctx, chartArea: { top, bottom } } = chart;
                chart.data.datasets.forEach(ds => {
                    if (!ds._gradient || ds._lastHeight !== bottom - top) {
                        const g = ctx.createLinearGradient(0, top, 0, bottom);
                        if (ds.label === 'Revenue') {
                            g.addColorStop(0, 'rgba(68,141,242,0.35)');
                            g.addColorStop(1, 'rgba(68,141,242,0)');
                        } else {
                            g.addColorStop(0, 'rgba(219,163,98,0.35)');
                            g.addColorStop(1, 'rgba(219,163,98,0)');
                        }
                        ds.backgroundColor = g;
                        ds._gradient = g;
                        ds._lastHeight = bottom - top;
                    }
                });
            },
            afterDatasetsDraw(chart, args, pluginOptions) {
                if (!chart._active || !chart._active.length) return;
                const { ctx, chartArea: { top, bottom } } = chart;
                const activePoint = chart._active[0].element;
                ctx.save();
                ctx.beginPath();
                ctx.moveTo(activePoint.x, top + 4);
                ctx.lineTo(activePoint.x, bottom - 2);
                ctx.lineWidth = 1.5;
                ctx.strokeStyle = '#CBD5E1';
                ctx.setLineDash([4, 4]);
                ctx.stroke();
                ctx.setLineDash([]);
                ctx.restore();
            }
        };

        function formatCurrency(v) {
            return 'Rp ' + v.toLocaleString('id-ID');
        }

        function cssVar(name, fallback) {
            const v = getComputedStyle(document.documentElement).getPropertyValue(name).trim();
            return v || fallback;
        }

        const revenueColor = cssVar('--fig-color-revenue', '#448DF2');
        const profitColor = cssVar('--fig-color-profit', 'rgba(219,163,98,0.85)');
        const gridColor = cssVar('--fig-color-chart-grid', '#F1F5F9');

        function buildDatasets(periodKey) {
            const d = periodDataMap[periodKey];
            return [
                {
                    label: 'Revenue',
                    data: d.revenue,
                    borderColor: revenueColor,
                    pointBackgroundColor: revenueColor,
                    pointBorderColor: '#fff',
                    pointBorderWidth: 3,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Profit',
                    data: d.profit,
                    borderColor: profitColor,
                    pointBackgroundColor: profitColor,
                    pointBorderColor: '#fff',
                    pointBorderWidth: 3,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.4
                }
            ];
        }

        const config = {
            type: 'line',
            data: {
                labels: periodDataMap[currentPeriod].labels,
                datasets: buildDatasets(currentPeriod)
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                animation: { duration: 600, easing: 'easeOutQuart' },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        enabled: false,
                        external: function (ctxTooltip) {
                            const tooltip = ctxTooltip.tooltip;
                            if (!tooltip || tooltip.opacity === 0) {
                                tooltipEl.style.display = 'none';
                                return;
                            }
                            const points = tooltip.dataPoints || [];
                            if (!points.length) return;
                            // Compose combined tooltip
                            const label = points[0].label;
                            let htmlLabel = label;
                            let primaryValue = '';
                            let month = label;
                            // Assume first dataset revenue, second profit
                            const revenuePoint = points.find(p => p.dataset.label === 'Revenue');
                            const profitPoint = points.find(p => p.dataset.label === 'Profit');
                            if (revenuePoint) primaryValue = formatCurrency(revenuePoint.parsed.y);
                            tooltipLabel.textContent = 'Revenue & Profit';
                            tooltipValue.textContent = primaryValue + (profitPoint ? ' / ' + formatCurrency(profitPoint.parsed.y) : '');
                            tooltipMonth.textContent = month;
                            tooltipEl.style.display = 'block';

                            const { top, left } = ctxTooltip.chart.canvas.getBoundingClientRect();
                            const x = left + tooltip.caretX + 12; // small offset
                            const y = top + tooltip.caretY - 60; // raise a bit
                            tooltipEl.style.transform = 'translate(-50%, -100%)';
                            tooltipEl.style.left = x + 'px';
                            tooltipEl.style.top = y + 'px';
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#64748B',
                            font: { family: 'Poppins, sans-serif', size: 12 }
                        },
                        border: { display: false }
                    },
                    y: {
                        beginAtZero: false,
                        grace: '5%',
                       
                        ticks: {
                            color: '#64748B',
                            font: { family: 'Poppins, sans-serif', size: 12 },
                            callback: function (value) {
                                if (currentPeriod === 'Yearly') return (value / 1000) + 'K';
                                return (value / 1000) + 'K';
                            }
                        },
                        border: { display: false }
                    }
                },
                elements: {
                    line: { capBezierPoints: true },
                    point: { hoverBorderWidth: 3 }
                }
            },
            plugins: [enhancedVisualPlugin]
        };

        const chart = new Chart(ctx, config);

        function updatePeriod(next) {
            currentPeriod = next;
            const d = periodDataMap[currentPeriod];
            chart.data.labels = d.labels;
            chart.data.datasets = buildDatasets(currentPeriod);
            chart.update();
        }

        // Cycle periods on button click
        periodBtn.addEventListener('click', () => {
            const order = ['Weekly', 'Monthly', 'Yearly'];
            const idx = order.indexOf(currentPeriod);
            const next = order[(idx + 1) % order.length];
            periodBtn.innerHTML = '<i class="fas fa-calendar mr-2"></i>' + next;
            updatePeriod(next);
        });

        // Hide tooltip when leaving canvas
        canvas.addEventListener('mouseleave', () => {
            tooltipEl.style.display = 'none';
        });
    });
</script>