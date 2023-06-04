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
    <?php include_once("./includes/header.php"); ?>
    
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
    <?php include_once("./includes/footer.php"); ?>

    </body>
</html>