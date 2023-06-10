<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <!-- Menú -->
    <?php
    ini_set("default_charset", "UTF-8");
    include_once("../includes/header.php");
    require_once("../helper/carga_id_facul.php");
    ?>

    <!-- Primera fila -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Facultades</h1>

            <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">

                <?php
                for ($i = 0; $i < $result->num_rows; $i++) {
                ?>
                    <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                        <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="carga_imagen_facul.php?id=<?=$data[$i]['id_facul'] ?>" alt="">
                        
                        <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center"><?=$data[$i]['nombre_facul'] ?></h1>

                        <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>

                            <span class="mx-1">Carreras</span>
                        </button>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/arquitectura.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Arquitectura</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/agronomia.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Agronomía</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/ciencias.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Ciencias</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/cienciasjuridicas.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Ciencias Jurídicas y Políticas</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/faces.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Ciencias Económicas y Sociales</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/farmacia.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Farmacia</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/humanidades.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Humanidades y Educación</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/ingenieria.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Ingeniería</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/medicina.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Medicina</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/odontología.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Odontología</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-between p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/veterinaria.png" alt="">

                    <h1 class="mb-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white text-center">Facultad de Ciencias Veterinarias</h1>

                    <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-800 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mx-1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                        <span class="mx-1">Carreras</span>
                    </button>
                </div> -->

            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include_once("../includes/footer.php"); ?>

</body>

</html>