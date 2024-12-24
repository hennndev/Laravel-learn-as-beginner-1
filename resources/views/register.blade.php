<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/app.css")
    <title>Document</title>
</head>
<body>
    <main class="min-h-screen flex-center font-poppins">
        <form class="w-[380px]">
            <h1 class="text-4xl font-semibold mb-8 text-[#222]">Login</h1>
            <section class="flex flex-col space-y-2 mb-4"> 
                <label for="username" class="text-gray-600">Username</label>
                <input id="username" type="text" placeholder="Input your username" class="w-full border border-gray-200 rounded-md py-2 px-4">
            </section>
            <section class="flex flex-col space-y-2 mb-4"> 
                <label for="email" class="text-gray-600">Email</label>
                <input id="email" type="email" placeholder="Input your email" class="w-full border border-gray-200 rounded-md py-2 px-4">
            </section>
            <section class="flex flex-col space-y-2"> 
                <label for="password" class="text-gray-600">Password</label>
                <input id="password" type="password" placeholder="Input your password" class="w-full border border-gray-200 rounded-md py-2 px-4">
            </section>
            <button class="w-full mt-5 bg-blue-500 rounded-md text-white py-2 px-4 hover:bg-opacity-80">Submit</button>
            <p class="mt-3 text-center text-sm text-gray-500">Already have an account? <a href="login" class="hover:underline">
                Login
            </a></p>
        </form>
    </main>
</body>
</html>