<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | log in</title>
    <link rel="short icon" href="/assets/logoo.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <nav class="bg bg-slate-300 border-gray-300 shadow-md px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" class="flex items-center">
                    <img src="/assets/logoo.png"
                        class="mr-3 h-6 sm:h-9 w-full transition duration-300 ease-in-out hover:scale-105"
                        alt="Flustpicture Logo" />
                    <span
                        class="self-center text-xl font-pacifico whitespace-nowrap dark:text-white">Gallery Photo</span>
                </a>
                <div class="flex gap-1">
                    <a href="/login"
                        class="inline-flex justify-center items-center py-3 px-4 text-base  font-semibold text-center text-gray-900 rounded-lg  hover:bg-blue-200 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-blue-700 dark:focus:ring-white">
                        LOG IN
                    </a>
                    <a href="/register"
                        class="inline-flex justify-center items-center py-3 px-4 text-base font-semibold text-center text-gray-900 rounded-lg  hover:bg-blue-200 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-blue-700 dark:focus:ring-white">
                        REGISTER
                    </a>
                </div>
    </header>
    <section class="mt-14">
        <div class="max-w-[364px] bg-gray-300 rounded-md shadow-md mx-auto px-6 py-4">
            <form action="/ceklogin" method="post">
                @csrf
                <div class="flex flex-col">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm transition duration-500 ease-in-out hover:scale-105">
                        <img class="mx-auto h-13 w-10" src="/assets/logoo.png" alt="Your Company">
                    </div>
                    <a href="/" class="mx-auto text-black text-3xl font-hurricane">Welcome Gallery Photo</a>
                    <div>
                        <h4 class="mt-3">Email</h4>
                        <input type="email" name="email" id=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Jhonde@gmai.com" required="#">
                        @error('email')
                            <small class="text-red-600 mt-2 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <h4 class="mt-3">Password</h4>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                        @error('password')
                            <small class="text-red-600 mt-2 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit"
                        class="py-2 px-32 mt-4 text-white rounded-full bg-blue-600 hover:bg-blue-700">Log in</button>
                    <div class="mt-3"></div>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-normal py-2 px-4 rounded-full">
                        Forget password
                    </button>
                    <div class="mb-4"></div>
                    <p class=" text-center text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum Punya Akun Daftar? <a href="/register"
                            class=" text-blue-700 text-primary-600 hover:underline dark:text-primary-500">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
