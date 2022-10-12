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

<body class="antialiased m-0 p-0">
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
        {{-- Location Photo  --}}
        <div class="flex justify-center">
            <div class="h-fit w-screen mt-10 px-20 py-10 flex flex-wrap">
                <div class="xl:w-1/2 w-full flex p-5 h-full justify-evenly">
                    <div class="flex gap-5">
                        <div class="w-full flex flex-wrap">
                            <img alt="detail"
                                class="w-fit h-fit w object-cover rounded-lg transition cursor-pointer
                                transform hover:scale-110
                                motion-reduce:transition-none motion-reduce:hover:transform-none ..."
                                src="https://picsum.photos/id/36/300/450" />
                        </div>
                        <div class="flex w-full flex-col justify-between gap-5">
                            <img alt="detail"
                                class="w-fit h-fit object-cover rounded-lg transition cursor-pointer
                                transform hover:scale-110
                                motion-reduce:transition-none motion-reduce:hover:transform-none ..."
                                src="https://picsum.photos/400/225?random=20" />
                            <img alt="detail"
                                class="w-fit h-fit object-cover rounded-lg transition cursor-pointer
                                transform hover:scale-110
                                motion-reduce:transition-none motion-reduce:hover:transform-none ..."
                                src="https://picsum.photos/400/225?random=2" />
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/2 w-full flex h-full justify-center p-5">
                    <iframe title="embed-maps" class="rounded-lg" width="750" height="450"
                        src="https://maps.google.com/maps?q=Gunung%20Bromo&
                        t=&z=13&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
        {{-- End of Location Photo  --}}
        {{-- Detail  --}}
        <div class="py-10 px-20 xl:px-40 xl:py-20 h-fit w-full">
            <div>
                <h1 class="font-bold text-3xl mb-2">Pink Beach</h1>
                <span class="font-normal text-base text-green-500">
                    <span class="fa-solid"> </span>
                    <span> Probolinggo</span>
                </span>

            </div>
            <div class="mt-2 mb-10 flex gap-5 flex-wrap md:flex-nowrap ">
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
            <div class="h-fit w-full xl:w-1/2 flex flex-wrap">
                <p class="text-justify tracking-normal md:tracking-widest text-lg w-full">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Excepturi iure consequuntur corporis minima hic expedita repellat rem tempora labore nihil id
                    voluptatum exercitationem culpa tenetur, reiciendis veniam quibusdam officiis ex suscipit ipsa
                    obcaecati
                    asperiores quis deserunt? Ut rerum harum magnam dolor nemo, tempore hic est, corporis nostrum animi
                    laborum praesentium sint delectus inventore? Maxime qui, magnam doloribus iusto, expedita alias
                    dolorem explicabo quod repellendus nostrum laboriosam asperiores! Quisquam autem, nemo quaerat
                    commodi corporis dolorem minima itaque. Neque earum ex eos nobis quibusdam optio est qui autem
                    veniam harum facilis architecto, debitis veritatis doloremque voluptates voluptatibus laudantium
                    cumque? Sunt molestiae minima culpa tempora ullam veritatis expedita ipsa? Iusto, quod eos ut
                    laborum quo sequi unde iste deleniti saepe nostrum voluptates eligendi, ex culpa animi molestias
                    error ipsa nesciunt. Et cumque quaerat, dicta sunt iusto reiciendis. Aliquam, perspiciatis aperiam.
                    Facilis, totam veritatis dicta fugiat nobis harum assumenda dolorum ducimus? Quo animi ipsa
                    explicabo ea nihil quidem error at? Perferendis veritatis enim dolores voluptatem sapiente. Dolorum
                    asperiores numquam repellendus vel odio distinctio ab commodi culpa inventore. Aliquam hic dolorum
                    quis in, saepe nostrum molestias architecto quisquam perferendis quo, nisi ullam ducimus nesciunt
                    culpa ipsam asperiores natus consequatur cumque voluptas voluptate, debitis cupiditate nulla.
                </p>
            </div>
        </div>
        {{-- End of Detail --}}

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
