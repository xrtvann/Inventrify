<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Inventrify</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/Inventrify-32x32.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins bg-gray-100">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full text-center">


            <!-- 404 Illustration -->
            <div class="mb-8">
                <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Page Not Found</h2>
                <p class="text-gray-600 mb-8">
                    Sorry, the page you are looking for doesn't exist or has been moved.
                    Please check the URL or navigate back to the dashboard.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-4">
                <a href="../index.php"
                    class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-dark transition-colors duration-200">
                    <i class="fas fa-home mr-2"></i>
                    Back to Dashboard
                </a>

                <button onclick="history.back()"
                    class="inline-flex items-center justify-center w-full px-6 py-3 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
            </div>

            <!-- Additional Help -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-sm text-gray-500 mb-4">Need help? Try one of these:</p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="../index.php?page=products" class="text-primary hover:text-primary-dark transition-colors">
                        <i class="fas fa-box-open mr-1"></i>
                        Products
                    </a>
                    <a href="../index.php?page=orders" class="text-primary hover:text-primary-dark transition-colors">
                        <i class="fas fa-dolly mr-1"></i>
                        Orders
                    </a>
                    <a href="../index.php?page=reports" class="text-primary hover:text-primary-dark transition-colors">
                        <i class="fas fa-chart-line mr-1"></i>
                        Reports
                    </a>
                </div>
            </div>

            <!-- Error Code -->
            <div class="mt-8 text-xs text-gray-400">
                Error Code: 404 | Page Not Found
            </div>
        </div>
    </div>

    <!-- Optional: Add some animation -->
    <style>
        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        // Add fade-in animation on load
        document.addEventListener('DOMContentLoaded', function () {
            document.body.classList.add('fade-in');
        });

        // Add bounce animation to the icon
        const icon = document.querySelector('.fa-search');
        if (icon) {
            setTimeout(() => {
                icon.classList.add('bounce');
            }, 500);
        }
    </script>

</body>

</html>