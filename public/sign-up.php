<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Inventrify</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/Inventrify-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Inventrify-32x32.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body class="font-poppins bg-gray-100 flex justify-center items-center h-screen">
    <div class="container bg-white rounded-lg w-[450px] shadow-sm py-2.5 px-10">
        <div class="header flex flex-col items-center mb-6">
            <div class="icon mb-4 mt-2">
                <img src="images/Inventrify-64x64.png" alt="">
            </div>
            <div class="title flex flex-col items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Create your account</h2>
                <p class="text-[13px] text-slate-600">Welcome! Please enter your details.</p>
            </div>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="input-group flex flex-col mb-5">
                    <label for="name" class="text-gray-500 text-sm font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name"
                        class="border border-gray-300 px-4 py-2 rounded-md focus:outline-gray-400"
                        placeholder="Enter your username" required>
                </div>
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
                <div class="action-button flex flex-col gap-3 mb-7">
                    <button type="submit"
                        class="w-full bg-blue-700 text-white py-2 rounded-sm hover:bg-blue-800 transition duration-200">
                        Sign Up
                    </button>
                    <button type="button"
                        class="w-full bg-white py-2 rounded-sm border border-gray-300 hover:bg-gray-100 transition duration-200 flex items-center justify-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                            viewBox="0 0 48 48">
                            <path fill="#FFC107"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#FF3D00"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4CAF50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1976D2"
                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>Sign up with Google
                    </button>
                </div>
                <div class="register-link text-center">
                    <p class="text-sm text-gray-600">Already have an account? <a href="sign-in.php"
                            class="text-blue-700">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>