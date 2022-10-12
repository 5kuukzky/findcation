<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Findcation</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2
    ?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    {{-- <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">


    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased bg-zinc-50">
    <div>
        {{-- Navbar --}}
        <div id="navbar"
            class="z-10 flex flex-wrap justify-between
            md:justify-around items-center h-16 fixed
            w-full top-0 transition delay-75 bg-opacity-95 bg-zinc-50">
            <a href="./#" id="findcation"
                class="font-bold text-2xl text-green-500 px-5 ml-8 transition delay-75">FINDCATION</a>

            {{-- Navbar --}}

            <ul class="md:hidden flex">
                <div class="group">
                    <button class="p-5 w-36">
                        <em id="fa-bars" class="fa-solid text-zinc-50 transition delay-75"></em>
                    </button>
                    <div>
                        <ul id="mobile-nav"
                            class="group-hover:block !absolute hidden
                            float-right right-0 bg-zinc-50
                            text-green-500 bg-opacity-95 drop-
                            shadow transition delay-75 -mt-1">
                            <div id="navbar-text" class="text-white transition delay-75 w-screen">
                                <button class="text-green-500 w-full p-5 block ">
                                    <a href="./"> Home </a>
                                </button>
                                <button class="text-green-500 w-full p-5 block">
                                    <a href="./result"> Recomendation </a>
                                </button>
                                <button class="text-green-500 w-full p-5 block">
                                    <a href="./#"> Login </a>
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>
            </ul>

            {{-- Desktop --}}

            <ul id="desktop" class="md:flex justify-around items-center hidden text-green-500 transition">
                <a id="home-desktop" href="./"
                    class="px-8 py-5
                    transition transform hover:-translate-y-0.5
                    motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                    Home</a>
                <a id="rec-desktop" href="./result"
                    class="px-8 py-5
                    transition transform hover:-translate-y-0.5
                    motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                    Recomendation</a>
                <a id="login-desktop" href="./#"
                    class="px-8 py-5
                    transition transform hover:-translate-y-0.5
                    motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                    Login</a>

            </ul>
        </div>
        {{-- Navbar --}}
        {{-- Result  --}}
        <div class="w-full py-20 h-fit flex justify-center">
            <div class="w-full p-4 md:w-full md:p-0 text-center mt-10">
                <h1 class="text-3xl text-black font-bold">Result</h1>
                <div class="w-full flex justify-center">
                    <div class="w-11/12 md:w-2/4 border-b border-black m-2">
                    </div>
                </div>
                <div class="flex w-1/2 mx-auto justify-center gap-10">
                    <button
                        class="px-4 md:p-2 bg-green-500 md:w-36 w-96
                        rounded-3xl text-white font-bold text-sm md:text-xl mt-2
                        transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                        Nature
                    </button>
                    <button
                        class="px-4 md:p-2 bg-green-500 md:w-36 w-96
                        rounded-3xl text-white font-bold text-sm md:text-xl mt-2
                        transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                        Nature
                    </button>
                    <button
                        class="px-4 md:p-2 bg-green-500 md:w-36 w-96
                        rounded-3xl text-white font-bold text-sm md:text-xl mt-2
                        transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                        Nature
                    </button>
                </div>
            </div>
        </div>
        {{-- End of Result --}}
        {{-- Search Result --}}
        <div class="flex justify-center pb-20">
            <div class="w-10/12 md:w-11/12 p-4">
                {{-- List Destinasi --}}
                <div class="h-fit justify-evenly flex flex-wrap gap-10">
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300" />
                        </a>
                    </div>
                    {{-- Loop --}}
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=2" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=3" />
                        </a>
                    </div>
                    {{-- End Loop --}}
                    {{-- Another Loop --}}
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=4" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=5" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=6" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=7" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=8" />
                        </a>
                    </div>
                    <div class="md:w-1/4 w-3/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-black text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-green-500 text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-full h-11/12 object-cover rounded-lg"
                                src="https://picsum.photos/400/300?random=9" />
                        </a>
                    </div>
                    {{-- End of Another Loop --}}
                </div>
                {{-- Destinasi --}}
            </div>
        </div>
</body>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {

            document.getElementById("navbar").style.backgroundColor = "rgba(34 ,197 ,94, 0.95)";
            document.getElementById("desktop").style.color = "white";
            document.getElementById("navbar-text").style.color = "white";
            document.getElementById("findcation").style.color = "white";
            document.getElementById("fa-bars").style.color = "white";
        } else {
            document.getElementById("navbar").style.backgroundColor = "rgba(250, 250, 250, 0.95)";
            document.getElementById("desktop").style.color = "rgb(34 197 94)";
            document.getElementById("navbar-text").style.color = "rgb(34 197 94)";
            document.getElementById("findcation").style.color = "rgb(34 197 94)";
            document.getElementById("fa-bars").style.color = "rgb(34 197 94)";
        }
    }
</script>

</html>
