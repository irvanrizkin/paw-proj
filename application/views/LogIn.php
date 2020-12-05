<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;1,500&family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,600&family=Ubuntu:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Tailwinds -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="/assets/style/tailwind.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/style/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


    <title>Sign In</title>
</head>

<body class="bg-white h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
                <a href="#" class="bg-red-500 text-white font-bold text-xl p-2 rounded">DoNor</a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-4xl text-center">Sign In</p>
                <form class="flex flex-col pt-3 md:pt-8" action="" method="post">
                    <div class="flex flex-col pt-4">
                        <label for="username" class="text-lg">Username</label>
                        <input type="text" id="email" placeholder="Username" class="shadow appearance-none border rounded w-full py-2 text-gray-700 mt-1 leading-tight focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                    </div>
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="email" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 text-gray-700 mt-1 leading-tight focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3">
                    </div>

                    <input type="submit" value="Sign In" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Don't have an account? <a href="SignUpPage.html" class="underline font-semibold">Sign Up
                            here.</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">

            <img class="object-cover w-full h-screen hidden md:block" src="/assets/image/Humanitarian Help-rafiki.svg" alt="">
        </div>
    </div>
</body>

</html>
