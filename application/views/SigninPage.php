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

<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 md:px-0">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-black text-center">Sign In</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome</h3>
            <p class="text-gray-600 pt-2">Sign In</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" action="#" method="post">
                <div class="mb-4 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-1 ml-3" for="username">Username</label>
                    <input type="text" id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2">
                </div>
                <div class="mb-4 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-1 ml-3" for="password">Password</label>
                    <input type="password" id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-blue-600 transition duration-500 px-2 pb-2">
                </div>
                <input type="button" class="bg-blue-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" value="Sign In">
            </form>
        </section>
    </main>

    <footer class="max-w-lg mx-auto flex justify-center text-blue-400">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>

</html>
