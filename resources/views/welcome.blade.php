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
                                    <a href="./"> Dashboard </a>
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
                    Dashboard</a>
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
        {{-- Main Image  --}}
        <div class="flex justify-center">
            <div class="w-10/12 md:w-1/2 p-4 absolute top-0 mt-36 sm:mt-24 md:mt-36 lg:mt-48 xl:mt-60 2xl:mt-48">
                <p class="text-3xl font-bold text-white">
                    Find <span class="text-green-500">your place</span> here!</p>
                <input type="text" placeholder="Search your place" class="w-full px-5 py-2 rounded-lg mt-5 mb-10">
                {{-- List Destinasi --}}
                <div class="w-full h-80% hidden justify-evenly 2xl:flex">
                    <div class="w-1/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer ">
                        <a href="./detail">
                            <h1 class="text-white text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-white text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-60 h-60 object-cover rounded-lg"
                                src="https://picsum.photos/400" />
                        </a>
                    </div>
                    {{-- Loop --}}
                    <div class="w-1/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-white text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-white text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-60 h-60 object-cover rounded-lg"
                                src="https://picsum.photos/400?random=2" />
                        </a>
                    </div>
                    <div class="w-1/4 hover:scale-105 transition ease-in-out delay-75 cursor-pointer">
                        <a href="./detail">
                            <h1 class="text-white text-lg mb-2 font-medium">Wisata Gunung Bromo</h1>
                            <h2 class="text-white text-sm mb-2"><span class="fa-solid"></span> Probolinggo</h2>
                            <img alt="destination" class="w-60 h-60 object-cover rounded-lg"
                                src="https://picsum.photos/400?random=3" />
                        </a>
                    </div>
                    {{-- End Loop --}}
                </div>
                {{-- Destinasi --}}
            </div>
            <img alt="cover" class="w-full h-96 md:h-full object-cover min-h-full"
                src="https://picsum.photos/id/1039/1600/700" />
        </div>
        {{-- End of Main Image  --}}
        {{-- SPK  --}}
        <div class="w-full py-20 h-fit flex justify-center bg-zinc-50">
            <div class="w-10/12 p-4 md:w-1/2 md:p-0">
                <h1 class="text-3xl text-black font-extrabold mb-1">Cara Terbaik untuk</h1>
                <h1 class="text-3xl text-black font-extrabold mb-4">Menemukan Objek Wisata</h1>
                <h2 class="text-xl text-black tracking-wider mb-1">Jawab beberapa pertanyaan yang kami sediakan,
                </h2>
                <h3 class="text-xl text-black tracking-wider mb-4">maka kami berikan rekomendasi objek wisata untuk
                    anda
                </h3>
                <button
                    class="px-4 md:p-2 bg-green-500 md:w-36 w-96
                        rounded-3xl text-white font-bold text-sm md:text-xl mt-2
                        transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none ...">
                    <a href="./result">Mulai</a>
                </button>
            </div>
        </div>
        {{-- End of SPK --}}
        {{-- Do --}}
        <div class="w-full py-20 h-fit flex justify-center bg-green-500">
            <div class="text-center">
                <h1 class="text-3xl text-white font-extrabold mb-20">What we do?</h1>
                <div class="flex gap-10 flex-wrap justify-center p-5 md:p-0">
                    {{-- Card --}}
                    <div class="w-10/12 md:w-80 bg-zinc-50 h-48 p-5 rounded-xl">
                        <p class="fa-solid text-black text-lg m-3"></p>
                        <p class="text-lg m-3">Memberikan rekomendasi objek wisata yang sesuai dengan
                            preferensi anda
                        </p>
                    </div>
                    {{-- Loop --}}
                    <div class="w-10/12 md:w-80 bg-zinc-50 h-48 p-5 rounded-xl">
                        <p class="fa-solid text-black text-lg m-3"></p>
                        <p class="text-lg m-3">Mengenalkan objek wisata baru kepada wisatawan
                        </p>
                    </div>
                    <div class="w-10/12 md:w-80 bg-zinc-50 h-48 p-5 rounded-xl">
                        <p class="fa-solid text-black text-lg m-3"></p>
                        <p class="text-lg m-3">Memberikan rekomendasi tempat kuliner
                        </p>
                    </div>
                    {{-- Card --}}
                </div>
            </div>
        </div>
        {{-- Do --}}
        {{-- Team --}}
        <div class="w-full py-20 h-fit flex justify-center bg-zinc-50">
            <div class="text-center">
                <h1 class="text-3xl text-black font-extrabold mb-20">Meet Our Team</h1>
                <div class="flex gap-20 md:gap-32 flex-wrap justify-center">
                    {{-- Photo --}}
                    <div class="flex justify-center flex-wrap w-48 md:w-60">
                        <img alt="team" class="w-30 h-30 md:h-60 md:w-60 object-cover rounded-full"
                            src="https://picsum.photos/400?random=4" />
                        <p class="text-xl font-bold mt-5">Ikhwan Syahputra</p>
                    </div>
                    <div class="flex justify-center flex-wrap w-48 md:w-60">
                        <img alt="team" class="w-30 h-30 md:h-60 md:w-60 object-cover rounded-full"
                            src="https://picsum.photos/400?random=5" />
                        <p class="text-xl font-bold mt-5">Vaia Sanu Aulia</p>
                    </div>
                    <div class="flex justify-center flex-wrap w-48 md:w-60">
                        <img alt="team" class="w-30 h-30 md:h-60 md:w-60 object-cover rounded-full"
                            src="https://picsum.photos/400?random=6" />
                        <p class="text-xl font-bold mt-5">Fadila Prasetyo Yudho</p>
                    </div>
                    {{-- Photo --}}
                </div>
            </div>
        </div>
        {{-- Team --}}
    </div>
</body>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
            document.getElementById("navbar").style.backgroundColor = "rgba(250, 250, 250, 0.95)";
            document.getElementById("desktop").style.color = "rgb(34 197 94)";
            document.getElementById("navbar-text").style.color = "rgb(34 197 94)";
            document.getElementById("findcation").style.color = "rgb(34 197 94)";
            document.getElementById("fa-bars").style.color = "rgb(34 197 94)";
            // document.getElementById("mobile-nav").style.backgroundColor = "rgba(250, 250, 250, 0.95)";
        } else {
            document.getElementById("navbar").style.backgroundColor = "transparent";
            document.getElementById("desktop").style.color = "white";
            document.getElementById("navbar-text").style.color = "white";
            document.getElementById("findcation").style.color = "white";
            document.getElementById("fa-bars").style.color = "white";
            // document.getElementById("mobile-nav").style.backgroundColor = "transparent";
        }
    }
</script>

</html>
