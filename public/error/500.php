<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Internal Server Error | Inventrify</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/Inventrify-32x32.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins bg-gray-100">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full text-center">

            <!-- 500 Illustration -->
            <div class="mb-8">
                <h1 class="text-6xl font-bold text-gray-800 mb-4">500</h1>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Internal Server Error</h2>
                <p class="text-gray-600 mb-8">
                    Oops! Something went wrong on our end. We're experiencing some technical difficulties.
                    Please try again later or contact support if the problem persists.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-4">
                <button onclick="location.reload()"
                    class="inline-flex items-center justify-center w-full px-6 py-3 bg-red-500 text-white font-medium rounded-lg hover:bg-red-600 transition-colors duration-200">
                    <i class="fas fa-redo mr-2"></i>
                    Try Again
                </button>

                <button onclick="history.back()"
                    class="inline-flex items-center justify-center w-full px-6 py-3 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
            </div>

            <!-- Additional Help -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-sm text-gray-500 mb-4">What you can do:</p>
                <div class="text-sm text-gray-600 space-y-2">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-clock mr-2 text-gray-400"></i>
                        <span>Wait a few minutes and try again</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <i class="fas fa-refresh mr-2 text-gray-400"></i>
                        <span>Refresh the page</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <i class="fas fa-envelope mr-2 text-gray-400"></i>
                        <span>Contact support if problem continues</span>
                    </div>
                </div>
            </div>

            <!-- Error Code -->
            <div class="mt-8 text-xs text-gray-400">
                Error Code: 500 | Internal Server Error
            </div>
        </div>
    </div>

    

</body>

</html>