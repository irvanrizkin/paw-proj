<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Montserrat:wght@500;600;700;800&family=Roboto:wght@400;500;700&family=Ubuntu:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwinds -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/style/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Home Page</title>
</head>

<body>
    <div class="bg-gray-200 min-h-screen">
        <!-- Navbar -->
        <section class="container-fluid">
            <nav class="nav flex flex-wrapitems-center justify-between px-4">
                <div class="flex flex-no-shrink items-center mr-6 py-3 text-grey-darkest title">
                    <span class="font-semibold text-xl tracking-light title">DoNor</span>
                </div>

                <input class="menu-btn hidden" type="checkbox" id="menu-btn">
                <label class="menu-icon block cursor-pointer md:hidden px-2 py-4 relative select-none" for="menu-btn">
                    <span class="navicon bg-grey-darkest flex items-center relative"></span>
                </label>

                <ul class="menu border-b md:border-none flex justify-end list-reset m-0 w-full md:w-auto" id="navbarSupportedContent">
                    <li class="border-t md:border-none">
                        <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-greydarker font-bold atribute-text text">
                            Home</a>
                    </li>
                    <li class="border-t md:border-none">
                        <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-greydarker atribute-text text">
                            Signin</a>
                    </li>
                    <li class="border-t md:border-none">
                        <a href="/" class="block md:inline-block px-4 py-3 no-underline text-grey-darkest hover:text-greydarker atribute-text text">
                            Signup</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="container-fluid">
            <div class="flex flex-no-shrink items-center justify-between">
                <div class="flex-col flex-no-shrink items-center m-40 py-3 text-grey-darkest">
                    <h1 class="big-heading">WELCOME</h1>
                    <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab vitae quisquam
                        deserunt cupiditate?</span>
                </div>
                <div>
                    <img class="nav-image" src="/assets/image/Humanitarian Help-rafiki.png" alt="">
                </div>
            </div>
        </section>

        <!-- leaderboards -->
        <section class="container-fluid">
            <div class="mx-4 lg:mx-auto mt-10 max-w-4xl">
                <h1 class="font-bold uppercase tracking-wide mb-8 title">Leaderboard</h1>
                <div class="leaderboard-content">
                    <article class="flex justify-between items-center bg-white rounded-lg p-6">
                        <div class="flex">
                            <div class="flex flex-col justify-between ml-4 leaderboard-text text">
                                <div class="mb-4">
                                    <p>Nama Panjang</p>
                                    <p>Jenis Kelamin</p>
                                    <p>Jumlah Donor</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="leaderboard-content">
                    <article class="flex justify-between items-center bg-white rounded-lg p-6">
                        <div class="flex">
                            <div class="flex flex-col justify-between ml-4 leaderboard-text text">
                                <div class="mb-4">
                                    <p>Nama Panjang</p>
                                    <p>Jenis Kelamin</p>
                                    <p>Jumlah Donor</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <Footer class="footer">
            <div class="container-fluid">
                <i class="social-icon fab fa-facebook-f"></i>
                <i class="social-icon fab fa-twitter"></i>
                <i class="social-icon fab fa-instagram"></i>
                <i class="social-icon fas fa-envelope"></i>
                <p>&copy; Copyriht 2020</p>
            </div>
        </Footer>
    </div>

</body>

</html>