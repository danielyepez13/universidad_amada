<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    <script src="./js/main.js"></script>
</head>

<body>
    <!-- Menú -->
    <nav x-data="{ isOpen: false, moonSun: false }" :class="moonSun ? 'bg-black white:bg-gray-800' :  'bg-white dark:bg-gray-800'" class="relative shadow">
        <div class="container px-6 py-3 mx-auto md:flex">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-2xl font-bold text-gray-800 transition-colors duration-300 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">Universidad</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full', moonSun ? 'bg-black white:bg-gray-800' : 'bg-white dark:bg-gray-800']" @click="isOpen = !isOpen" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out md:duration-0 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
                <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0">
                    <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Inicio</a>
                    <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Horarios</a>
                    <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Carreras</a>
                    <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Sobre Nosotros</a>
                </div>

                <div class="flex flex-col md:flex-row">
                    <div class="flex flex-wrap content-center mr-3 invisible md:visible" @click="moonSun = !moonSun">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-white cursor-pointer" viewBox="0 0 16 16" x-show="!moonSun">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-7 h-7 text-white cursor-pointer" viewBox="0 0 16 16" x-show="moonSun">
                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-7 h-7 text-gray-400" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>

                        <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Buscador">
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Bienvenida -->
    <div class="md:mt-12 mt-8 mx-4 flex flex-wrap flex-col md:flex-row justify-center" id="bienvenida">
        <div class="flex flex-col justify-around max-w-xl">
            <h1 class="text-4xl font-bold text-gray-800 mb-3 text-center">La universidad de tus sueños está justo aquí</h1>
            <div class="hidden md:block">
                <p class="text-gray-600 text-xl">Nosotros trabajamos para dar la máxima garantía de los mejores estudios dentro de nuestras instalaciones.</p>
                <div class="flex flex-row justify-around">
                    <div class="flex flex-col space-y-4">
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Profesores Graduados</p>
                        </div>
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Horarios a disposición</p>
                        </div>
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Instalaciones recreativas</p>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Carreras de gran preferencia</p>
                        </div>
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Postgrados completos</p>
                        </div>
                        <div class="p-4 flex flex-wrap items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <p class="ml-2">Actividades extracurriculares</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-xl md:ml-3 drop-shadow-2xl">
            <img class="w-full object-cover rounded-md" src="img/universidad.jpg" alt="">
        </div>
    </div>
    <!-- Sedes -->
    <section class="bg-white dark:bg-gray-800 mt-8">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Explora nuestras
                <br> asombrosas <span class="text-blue-500 underline underline-offset-2">Sedes</span>
            </h1>

            <div class="grid grid-cols-1 gap-4 mt-4 xl:mt-8 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1570975640108-2292d83390ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1322&q=80" alt="" class="mx-auto object-cover h-40 w-40 md:w-80 md:h-96 rounded-xl  shadow-lg shadow-blue-400/40">
                    </div>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Sede <span class="text-blue-400 font-semibold underline underline-offset-3"> Montacute</span></h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                        corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1585763466435-adacf5486f1c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHNlZGUlMjB1bml2ZXJzaWRhZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="mx-auto object-cover h-40 w-40 md:w-80 md:h-96 rounded-xl shadow-lg shadow-blue-500/60">
                    </div>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Sede <span class="text-blue-400 font-semibold underline underline-offset-3"> Cambridge</span></h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                        corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
                    <div class="w-full">
                        <img src="https://images.unsplash.com/photo-1585763465881-62c5d70627bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHNlZGUlMjB1bml2ZXJzaWRhZHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="mx-auto object-cover h-40 w-40 md:w-80 md:h-96 rounded-xl shadow-lg shadow-blue-400/40">
                    </div>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Sede <span class="text-blue-400 font-semibold underline underline-offset-3"> Bostón</span></h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non
                        corrupti doloribus voluptatum eveniet
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Donacion -->
    <section class="mt-6">
        <div class="container px-6 py-10 mx-auto flex flex-col items-center">
            <h1 class="text-3xl font-bold text-center capitalize lg:text-4xl text-indigo-600 mb-4 drop-shadow-lg">Donaciones
            </h1>
            <p class="text-center text-gray-700 font-semibold">Lugar de enseñanza y educación que se imparte como vehículo para salir de la oscuridad, casa creadora de los profesionales por excelencia, hoy está más viva que nunca y necesita de tu aporte en los proyectos generados para la mejora de la ciudad universitaria.</p>
            <button type="button" class="text-gray-900 bg-orange-400 border border-gray-300 focus:outline-none hover:bg-orange-500 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 mb-2">Apoyar</button>
        </div>
    </section>

    <!-- Testimonio 1 -->
    <section class="bg-white dark:bg-gray-800 mt-6">
        <div class="max-w-6xl px-6 py-10 mx-auto">
            <p class="text-xl font-medium text-blue-500 ">Testimonios</p>

            <h1 class="mt-2 text-3xl font-semibold capitalize lg:text-4xl text-blue-700">
                ¿Qué dicen nuestros estudiantes?
            </h1>

            <div class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
                <div class="absolute w-full bg-blue-800 shadow-xl shadow-blue-500/50 -z-10 md:h-96 rounded-2xl"></div>

                <div class="w-full p-6 bg-blue-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly" x-data="getCarouselData()">
                    <template x-for="image in images.slice(currentIndex, currentIndex + 1)" :key="images.indexOf(image)">
                        <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[32rem] md:w-80 lg:h-[36rem] lg:w-[26rem] md:rounded-2xl" :src="image.imagen" alt="foto de estudiante">
                    </template>

                    <div class="mt-2 md:mx-6">
                        <template x-for="image in images.slice(currentIndex, currentIndex + 1)" :key="images.indexOf(image)">
                            <div>
                                <p class="text-xl font-medium tracking-tight text-white" x-text="image.nombre"></p>
                                <p class="text-blue-200" x-text="image.carrera"></p>
                                <p class="mt-4 text-lg leading-relaxed text-white md:text-xl" x-text="image.experiencia"></p>
                            </div>
                        </template>

                        <div class="flex items-center justify-between mt-6 md:justify-start">
                            <button title="Izquierda" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-blue-400" @click="decrement()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>

                            <button title="Derecha" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 md:mx-6 hover:bg-blue-400" @click="increment()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonio 2 -->
    <section class="mt-8">
        <div class="max-w-6xl px-6 py-10 mx-auto">
            <div class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
                <div class="absolute w-full bg-blue-700 shadow-xl shadow-blue-700/50 -z-10 md:h-96 rounded-2xl"></div>

                <div class="w-full p-6 bg-blue-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly" x-data="getCarouselData2()">

                    <div class="mt-2 md:mx-6">
                        <template x-for="image in images.slice(currentIndex, currentIndex + 1)" :key="images.indexOf(image)">
                            <div>
                                <p class="text-xl font-medium tracking-tight text-white" x-text="image.nombre"></p>
                                <p class="text-blue-200" x-text="image.carrera"></p>
                                <p class="mt-4 text-lg leading-relaxed text-white md:text-xl" x-text="image.experiencia"></p>
                            </div>
                        </template>

                        <div class="flex items-center justify-between mt-6 md:justify-start">
                            <button title="Izquierda" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-blue-400" @click="decrement()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>

                            <button title="Derecha" class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 md:mx-6 hover:bg-blue-400" @click="increment()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <template x-for="image in images.slice(currentIndex, currentIndex + 1)" :key="images.indexOf(image)">
                        <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[32rem] md:w-80 lg:h-[36rem] lg:w-[26rem] md:rounded-2xl" :src="image.imagen" alt="foto de estudiante">
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center justify-between p-6 mx-auto space-y-4 sm:space-y-0 sm:flex-row">
            <div class="flex -mx-2">
                <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Reddit">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Github">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                        </path>
                    </svg>
                </a>
            </div>

            <p class="text-sm text-gray-600 dark:text-gray-300">© Copyright 2023. Todos los derechos reservados.</p>

            <a href="#bienvenida" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" title="Top">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                </svg>
            </a>

        </div>
    </footer>
</body>

</html>