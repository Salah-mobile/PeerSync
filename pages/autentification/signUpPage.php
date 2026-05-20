<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        <form class="w-full max-w-sm flex flex-col items-center justify-center">
            <h2 class="text-4xl text-gray-900 font-bold tracking-tight">Create Account</h2>
            <p class="text-sm text-gray-500 mt-3 mb-5 text-center">Get started with your free account today</p>


            <!-- Full Name Input -->
            <div class="flex items-center w-full bg-white border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all">
                <!-- User Icon -->
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <input type="text" placeholder="Name" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>                 
            </div>
             <div class="flex items-center w-full bg-white  mt-4 border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all">
                <!-- User Icon -->
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <input type="text" placeholder="Last Name" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>                 
            </div>

            <!-- Email Input -->
            <div class="flex items-center mt-4 w-full bg-white border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all">
                <!-- Email Icon -->
                <svg width="18" height="14" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 .55.571 0H15.43l.57.55v9.9l-.571.55H.57L0 10.45zm1.143 1.138V9.9h13.714V1.69l-6.503 4.8h-.697zM13.749 1.1H2.25L8 5.356z" fill="currentColor"/>
                </svg>
                <input type="email" placeholder="Email address" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>                 
            </div>

            <!-- Password Input -->
            <div class="flex items-center mt-4 w-full bg-white border border-gray-300 h-12 rounded-full overflow-hidden px-5 gap-3 focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition-all">
                <!-- Lock Icon -->
                <svg width="15" height="18" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-400 shrink-0">
                    <path d="M13 8.5c0-.938-.729-1.7-1.625-1.7h-.812V4.25C10.563 1.907 8.74 0 6.5 0S2.438 1.907 2.438 4.25V6.8h-.813C.729 6.8 0 7.562 0 8.5v6.8c0 .938.729 1.7 1.625 1.7h9.75c.896 0 1.625-.762 1.625-1.7zM4.063 4.25c0-1.406 1.093-2.55 2.437-2.55s2.438 1.144 2.438 2.55V6.8H4.061z" fill="currentColor"/>
                </svg>
                <input type="password" placeholder="Password" class="bg-transparent text-gray-800 placeholder-gray-400 outline-none text-sm w-full h-full" required>
            </div>

            <!-- Terms & Conditions -->
            <div class="w-full flex items-start gap-2 mt-5 text-gray-500">
                <input class="mt-1 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 shrink-0" type="checkbox" id="terms" required>
                <label class="text-sm select-none cursor-pointer leading-tight" for="terms">
                    I agree to the <a class="text-indigo-600 hover:underline font-medium" href="#">Terms of Service</a> and <a class="text-indigo-600 hover:underline font-medium" href="#">Privacy Policy</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="mt-8 w-full h-12 rounded-full text-white bg-indigo-600 hover:bg-indigo-700 font-semibold shadow-md shadow-indigo-200 transition-all active:scale-[0.98]">
                Sign Up
            </button>

            <p class="text-gray-500 text-sm mt-6">Already have an account? <a class="text-indigo-600 font-semibold hover:underline" href="loginPage.php">Sign in</a></p>
        </form>
    </div>
</div>

</body>
</html>