<?php
include('../includes/sessionStart.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Carreras</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>

<body>
    <!-- Content -->
    <div x-data="{Open: false, modelOpen: false, editModal: false, verModal: false}">
        <?php
        $vista = 'carreras';
        include('../includes/asideDashboard.php');
        ?>

        <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
            <?php
            include_once("../includes/topDashboard.php");
            ?>

            <div class="px-6 pt-6 2xl:container">
                <div class="px-4 md:px-10 py-4 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Estudiantes</p>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10" x-data x-init="$store.estudiantesStore.load()">
                    <div class="sm:flex items-center justify-between">
                        <div>
                            <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800">
                                <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                    <p>Todos</p>
                                </div>
                            </a>
                        </div>
                        <div class="flex items-center justify-between">
                            <button x-cloak @click="modelOpen = !modelOpen" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                <p class="text-sm font-medium leading-none text-white">Añadir Estudiante</p>
                            </button>
                            <div class="ml-3">
                                <div class="relative flex items-center text-gray-400 focus-within:text-indigo-400">
                                    <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                                        <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                                            <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
                                        </svg>
                                    </span>
                                    <input type="search" placeholder="Buscar aquí" class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 focus:border-indigo-300 transition" @keyup="!$store.estudiantesStore.search()" id="buscador">
                                </div>
                            </div>
                            <div :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0 bg-gray-500 bg-opacity-40 transition-opacity">
                                    <div x-cloak @click="modelOpen = false" :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 " aria-hidden="true"></div>

                                    <div x-cloak :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                        <div class="flex items-center justify-between space-x-4">
                                            <h1 class="text-xl font-medium text-gray-800 ">Registrar Estudiantes</h1>

                                            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <p class="mt-2 text-sm text-gray-500">
                                            Registro de carreras para la Base de Datos
                                        </p>

                                        <form class="mt-5" x-on:submit.prevent="$store.estudiantesStore.addEst()" id="regisEstudiantes">
                                            <div>
                                                <input name="fecha_registro" id="fecha_registro" type="hidden" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="<?= date('Y-m-d') ?>" readonly>
                                            </div>
                                            <div>
                                                <label for="nombre_est" class="block text-sm text-gray-700 capitalize">nombre estudiante</label>
                                                <input name="nombre_est" id="nombre_est" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div>
                                                <label for="apellido_est" class="block text-sm text-gray-700 capitalize">apellido estudiante</label>
                                                <input name="apellido_est" id="apellido_est" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div>
                                                <label for="cedula" class="block text-sm text-gray-700 capitalize">cédula estudiante</label>
                                                <input name="cedula" id="cedula" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div>
                                                <label for="semestre" class="block text-sm text-gray-700 capitalize">semestre estudiante</label>
                                                <input name="semestre" id="semestre" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div>
                                                <label for="seccion" class="block text-sm text-gray-700 capitalize">sección estudiante</label>
                                                <input name="seccion" id="seccion" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>
                                            <div class="mt-3">
                                                <label for="carrera" class="block text-sm text-gray-700 capitalize">carreras</label>
                                                <select name="carrera" id="carrera" x-data="$store.estudiantesStore.listarCarreras()" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                    <option value="" selected disabled>Seleccione una Carrera</option>
                                                    <template x-for="car in $store.estudiantesStore.carreras">
                                                        <option value="" x-model="car.id_car" x-text="car.nombre_carrera"></option>
                                                    </template>
                                                </select>
                                            </div>

                                            <div class="flex justify-end mt-6">
                                                <input type="submit" value="Registrar" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 cursor-pointer">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-7 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>
                                <template x-if="$store.estudiantesStore.estudiantes.length === 0">
                                    <tr>
                                        <td>Sin información</td>
                                    </tr>
                                </template>
                                <template x-for="(est, index) in $store.estudiantesStore.pagedEstudiantes" :key="index">
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2" x-text="est.nombre_est + ' ' + est.apellido_est"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="est.cedula_est"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="est.nombre_carrera"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="est.fecha_registro_est"></p>
                                            </div>
                                        </td>
                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-green-200 focus:outline-none" x-cloak @click="$store.estudiantesStore.viewCarre(est)">Ver</button>
                                        </td>
                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-blue-200 focus:outline-none" x-cloak @click="$store.estudiantesStore.editCar(est)">Editar</button>
                                        </td>
                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-red-200 focus:outline-none" x-on:click="$store.estudiantesStore.deshabilitarCarre(est.id_est)" x-show="est.estatus_est != 0">Deshabilitar</button>

                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-red-200 focus:outline-none" x-on:click="$store.estudiantesStore.habilitarCarre(est.id_est)" x-show="est.estatus_est != 1">Habilitar</button>
                                        </td>
                                    </tr>
                                    <tr class="h-3"></tr>
                                </template>
                            </tbody>
                        </table>
                        <template x-if="$store.estudiantesStore.estudiantes.length !== 0">
                            <div class="flex justify-around mt-4">
                                <div>
                                    Página <b x-text="$store.estudiantesStore.currentPage"></b> de <b x-text="$store.estudiantesStore.pageCount"></b>
                                </div>
                                <div>
                                    <button class="px-4 py-2 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded text-white mr-5" :disabled="$store.estudiantesStore.currentPage == 1" @click="$store.estudiantesStore.currentPage--">
                                        Anterior
                                    </button>

                                    <button class="px-4 py-2 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded text-white" :disabled="$store.estudiantesStore.currentPage >= $store.estudiantesStore.pageCount" @click="$store.estudiantesStore.currentPage++">
                                        Siguiente
                                    </button>
                                </div>
                            </div>
                        </template>
                        <!-- Visualizar modal -->
                        <div :class="[$store.estudiantesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0 bg-gray-500 bg-opacity-40 transition-opacity">
                                <div x-cloak @click="$store.estudiantesStore.selectedItem = 0" :class="[$store.estudiantesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" aria-hidden="true"></div>

                                <div x-cloak :class="[$store.estudiantesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Visualización datos estudiante</h1>

                                        <button @click="$store.estudiantesStore.selectedItem = 0" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Visualización detallada de datos del estudiante
                                    </p>

                                    <div class="mt-5">
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">nombre estudiante</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.nombre_est"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">apellido estudiante</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.apellido_est"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">cédula estudiante</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.cedula_est"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">semestre estudiante</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.semestre_est"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">sección estudiante</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.seccion_est"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">carrera</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.nombre_carrera"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">Fecha registro</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.estudiantesStore.selectedItem.fecha_registro_est"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Editar modal -->
                        <div :class="[$store.estudiantesStore.modifCar ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0 bg-gray-500 bg-opacity-40 transition-opacity">
                                <div x-cloak @click="$store.estudiantesStore.modifCar = 0" :class="[$store.estudiantesStore.modifCar ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" aria-hidden="true"></div>

                                <div x-cloak :class="[$store.estudiantesStore.modifCar ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Edición de datos del estudiante</h1>

                                        <button @click="$store.estudiantesStore.modifCar = 0" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Modificación de datos personales del estudiante
                                    </p>

                                    <form class="mt-5" id="modifEstudiantes" x-on:submit.prevent="$store.estudiantesStore.modificarEst()">
                                        <input type="hidden" name="modif_id_est" id="modif_id_est" x-model="$store.estudiantesStore.modifCar.id_est">
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">nombre estudiante</p>
                                            <input type="text" name="modif_nombre_est" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" id="modif_nombre_est" x-model="$store.estudiantesStore.modifCar.nombre_est">
                                        </div>
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">apellido estudiante</p>
                                            <input type="text" name="modif_apellido_est" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" id="modif_apellido_est" x-model="$store.estudiantesStore.modifCar.apellido_est">
                                        </div>
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">cédula estudiante</p>
                                            <input type="text" name="modif_cedula" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" id="modif_cedula" x-model="$store.estudiantesStore.modifCar.cedula_est">
                                        </div>
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">semestre estudiante</p>
                                            <input type="text" name="modif_semestre" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" id="modif_semestre" x-model="$store.estudiantesStore.modifCar.semestre_est">
                                        </div>
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">sección estudiante</p>
                                            <input type="text" name="modif_seccion" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" id="modif_seccion" x-model="$store.estudiantesStore.modifCar.seccion_est">
                                        </div>
                                        <div class="mt-3">
                                            <label for="modif_carrera" class="block text-sm text-gray-700 capitalize">carrera</label>
                                            <select name="modif_carrera" id="modif_carrera" x-data="$store.estudiantesStore.listarCarreras()" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                <option value="" selected disabled>Modificar la carrera escogida</option>
                                                <template x-for="carre in $store.estudiantesStore.carreras">
                                                    <option value="" :class="[$store.estudiantesStore.modifCar.carrera_est != carre.id_car ? '' : 'hidden']" x-bind:value="carre.id_car" x-text="carre.nombre_carrera"></option>
                                                </template>
                                            </select>
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <input type="submit" value="Editar" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 cursor-pointer">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Notificacion -->
                        <button type="button" @click="$store.estudiantesStore.closeNotification()" x-show="$store.estudiantesStore.notification.open" x-transition.duration.300ms>
                            <div class="fixed right-4 bottom-12 z-50 rounded-md px-4 py-2 text-white transition bg-green-500 hover:bg-green-600">
                                <div class="flex items-center space-x-2">
                                    <span class="text-3xl"><i class="bx bx-check"></i></span>
                                    <p class="font-bold" x-text="$store.estudiantesStore.notification.message"></p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Content -->
    <style>
        .checkbox:checked+.check-icon {
            display: flex;
        }
    </style>
    <script src="../js/estudiantes.js"></script>
</body>

</html>