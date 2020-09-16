<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-gray-900 antialiased leading-tight">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-300 min-h-screen">
    <div class="container p-6 mx-auto">
        <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-6">
            <div class="bg-white rounded-lg p-6">
                <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="https://picsum.photos/id/237/300/300">
                <div class="text-center md:text-left">
                    <h2 class="text-lg">Matheus Flauzino</h2>
                    <div class="text-purple-500">Developer</div>
                    <div class="text-gray-600">matheus@example.com</div>
                    <div class="text-gray-600">(555) 765-4321</div>
                </div>
            </div>
        </div>

        <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-6">
            <div class="sm:flex sm:items-center px-6 py-4">
                <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-16 sm:h-24 rounded-full" src="https://picsum.photos/id/237/300/300" alt="Woman's Face">
                <div class="mt-4 sm:mt-0 sm:ml-4 text-center sm:text-left">
                    <p class="text-xl leading-tight">Matheus Flauzino</p>
                    <p class="text-sm leading-tight text-gray-600">Product Engineer</p>
                    <div class="mt-4">
                        <button class="text-purple-500 hover:text-white hover:bg-purple-500 border border-purple-500 text-xs font-semibold rounded-full px-4 py-1 leading-normal">Message</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-sm mx-auto mt-6">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Acme Corp. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>