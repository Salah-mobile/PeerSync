<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 antialiased">

<div class="flex min-h-screen w-full items-stretch">
    <!-- Left Side: Image (Visible on desktop) -->
    <div class="hidden md:block md:w-1/2 relative">
        <img class="absolute inset-0 w-full h-full object-cover" src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/login/leftSideImage.png" alt="leftSideImage">
    </div>

    <!-- Right Side: Form -->
    <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-8 bg-white">

        <form class="w-full max-w-sm flex flex-col items-center justify-center" action="../../src/Services/userService.php" method="post">
            <h2 class="text-4xl text-gray-900 font-bold tracking-tight">Sign in</h2>
            <p class="text-sm text-gray-500 mt-3  text-center">Welcome back! Please sign in to continue</p>
            <!-- Email Input -->
            <div class="flex items-center w-full bg-white border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all mt-5">
                <svg width="18" height="14" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 .55.571 0H15.43l.57.55v9.9l-.571.55H.57L0 10.45zm1.143 1.138V9.9h13.714V1.69l-6.503 4.8h-.697zM13.749 1.1H2.25L8 5.356z" fill="currentColor"/>
                </svg>
                <input type="email" name="email" placeholder="Email address" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>                 
            </div>
            <div class="flex items-center mt-4 w-full bg-white border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all">
                <svg width="15" height="18" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path d="M13 8.5c0-.938-.729-1.7-1.625-1.7h-.812V4.25C10.563 1.907 8.74 0 6.5 0S2.438 1.907 2.438 4.25V6.8h-.813C.729 6.8 0 7.562 0 8.5v6.8c0 .938.729 1.7 1.625 1.7h9.75c.896 0 1.625-.762 1.625-1.7zM4.063 4.25c0-1.406 1.093-2.55 2.437-2.55s2.438 1.144 2.438 2.55V6.8H4.061z" fill="currentColor"/>
                </svg>
                <input type="password" name="password" placeholder="Password" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>
            </div>
            <div class="w-full flex items-center justify-between mt-5 text-gray-500">
                <div class="flex items-center gap-2">
                    <input class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" type="checkbox" id="checkbox">
                    <label class="text-sm select-none cursor-pointer" for="checkbox">Remember me</label>
                </div>
                <a class="text-sm font-medium text-indigo-600 hover:underline" href="#">Forgot password?</a>
            </div>
            <button type="submit" name="login" class="mt-8 w-full h-12 rounded-full text-white bg-indigo-600 hover:bg-indigo-700 font-semibold shadow-md shadow-indigo-200 transition-all active:scale-[0.98]">
                Login
            </button>

            <p class="text-gray-500 text-sm mt-6">Don’t have an account? <a class="text-indigo-600 font-semibold hover:underline" href="signUpPage.php">Sign up</a></p>
        </form>
    </div>
</div>

</body>
</html>