<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="pt-4 pb-2 container">
        <section class="flex-between">
            <h2 class="text-3xl bg-gradient-to-r from-blue-400 to-blue-500 text-transparent bg-clip-text font-bold font-poppins">Cubbers</h2>

            <section class="flexx">
                <nav class="flexx space-x-5 mr-20">
                    <a class="text-[#222]" href="/">Home</a>
                    <a class="text-[#222]" href="#about">About</a>
                </nav>
                <section class="flexx space-x-4">
                    <a href="login" class="bg-blue-500 text-white px-3 py-1.5 rounded-md">Login</a>
                    <a href="register" class="text-[#222]">Register</a>
                </section>
            </section>
        </section>
    </header>

    <main>
        <section class="mt-20">
            <section class="h-[400px] flex-center flex-col">
                <h1 class="text-6xl font-bold leading-normal w-[850px] text-center text-[#222]">
                    Learn how to implement your project with <span class="bg-gradient-to-r from-blue-400 to-blue-500 text-white px-2 rounded-md">Cubbers</span>
                </h1>
                <p class="text-center w-[800px] mt-10 text-gray-500 font-normal text-xl leading-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi aspernatur excepturi enim nisi deleniti quaerat animi voluptate ipsam, dolore atque?</p>
                <section class="flexx space-x-7 mt-7">
                    <button class="bg-gradient-to-r bg-blue-500 py-2 px-4 rounded-md text-white hover:bg-opacity-80">
                        Get started
                    </button>
                    <button class="text-[#222]">Learn more</button>
                </section>
            </section>
        </section>



        <section id="about" class="mt-20">
            <section class="h-[600px] flex-center flex-col">
                <h1 class="text-3xl text-[#222]">About Us</h1>
                <p class="text-center w-[800px] mt-10 text-gray-500 font-normal text-xl leading-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis id neque, odit recusandae repellat reprehenderit necessitatibus eligendi aspernatur sint aliquam, modi distinctio iste sed amet unde nulla praesentium vero nisi. Accusantium, natus! Debitis iste tenetur ducimus repellendus laboriosam blanditiis adipisci!
                </p>
            </section>
        </section>
    </main>

    <footer class="text-center text-sm mb-4 text-gray-600">
        Copyright&copy; 2024 Hennndev
    </footer>
</body>
</html>