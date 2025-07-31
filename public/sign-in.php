<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Inventrify</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Inventrify-32x32.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins bg-gray-100 flex justify-center items-center h-screen">
    <div class="container bg-white rounded-lg w-[450px] shadow-sm py-6 px-10">
        <div class="header flex flex-col items-center mb-8">
            <div class="icon mb-4 mt-2">
                <img src="images/Inventrify-64x64.png" alt="">
            </div>
            <div class="title flex flex-col items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Sign in to your account</h2>
                <p class="text-[13px] text-slate-600">Welcome back! Please enter your details.</p>
            </div>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="input-group flex flex-col mb-5">
                    <label for="username" class="text-gray-500 text-sm font-semibold mb-2">Username</label>
                    <input type="text" id="username" name="username"
                        class="border border-gray-300 px-4 py-2 rounded-md focus:outline-gray-400"
                        placeholder="Enter your username" required>
                </div>
                <div class="input-group flex flex-col mb-5">
                    <label for="password" class="text-gray-500 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="border border-gray-300 px-4 py-2 rounded-md focus:outline-gray-400"
                        placeholder="Enter your password" required>
                </div>
                <div class="input-group">
                    <div class="remember-me flex items-center">
                        <input type="checkbox" name="remember-me" class="mr-1.5" id="rememberMe">
                        <label for="rememberMe" class="text-gray-500 text-sm font-medium">Remember for 30 days</label>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>