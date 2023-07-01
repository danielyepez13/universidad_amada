<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Profesores</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
</head>

<body>
    <!-- Content -->
    <div x-data="{Open: false, modelOpen: false, editModal: false, verModal: false}">
        <?php
        $vista = 'profesores';
        include('../includes/asideDashboard.php');
        ?>

        <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
            <?php
            include_once("../includes/topDashboard.php");
            ?>

            <div class="px-6 pt-6 2xl:container">
                <div class="px-4 md:px-10 py-4 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Profesores</p>
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10" x-data x-init="$store.profesStore.load()">
                    <div class="sm:flex items-center justify-between">
                        <div class="flex items-center">
                            <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800">
                                <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                    <p>Todos</p>
                                </div>
                            </a>
                            <!-- <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                                <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                    <p>Deshabilitados</p>
                                </div>
                            </a> -->
                        </div>
                        <button x-cloak @click="modelOpen = !modelOpen" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">Añadir Profesor</p>
                        </button>
                        <div :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modelOpen = false" :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                                <div x-cloak :class="[modelOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Registrar Profesores</h1>

                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Registro de profesores para la Base de Datos
                                    </p>

                                    <form class="mt-5" x-on:submit.prevent="$store.profesStore.addProf()" id="regisProfes">
                                        <div>
                                            <input name="fecha_registro" id="fecha_registro" type="hidden" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" value="<?= date('Y-m-d') ?>" readonly>
                                        </div>
                                        <div>
                                            <label for="nombre" class="block text-sm text-gray-700 capitalize">nombres</label>
                                            <input name="nombre" id="nombre" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-3">
                                            <label for="apellido" class="block text-sm text-gray-700 capitalize">apellidos</label>
                                            <input name="apellido" id="apellido" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        <div class="mt-3">
                                            <label for="cedula" class="block text-sm text-gray-700 capitalize">cédula</label>
                                            <input name="cedula" id="cedula" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div>
                                            <label for="correo" class="block text-sm text-gray-700 capitalize">correo electrónico</label>
                                            <input name="correo" id="correo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            <!-- <p class="text-red-500 text-xs italic" x-show="correo.length > 0 && !correo.includes('@')">
                                                Please enter a valid email address.
                                            </p> -->
                                        </div>

                                        <div class="flex justify-end mt-6">
                                            <input type="submit" value="Registrar" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 cursor-pointer">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-7 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>
                                <template x-if="!$store.profesStore.profesores">
                                    <tr>
                                        <td colspan="4">Sin información</td>
                                    </tr>
                                </template>
                                <template x-for="profe in $store.profesStore.profesores" :key="profe.id_prof">
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2" x-text="profe.cedula_prof"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="profe.nombre_prof"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="profe.apellido_prof"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2" x-text="profe.correo_prof"></p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <p class="text-sm leading-none text-gray-600 ml-2" x-text="profe.fecha_registro_prof"></p>
                                        </td>
                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-green-200 focus:outline-none" x-cloak @click="$store.profesStore.viewProf(profe)">Ver</button>
                                        </td>

                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-blue-200 focus:outline-none" x-cloak @click="$store.profesStore.editProf(profe)">Editar</button>
                                        </td>
                                        <td class="pl-4">
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-red-200 focus:outline-none" x-on:click="$store.profesStore.deshabilitarProf(profe.id_prof)" x-show="profe.estatus_prof != 0">Deshabilitar</button>
                                            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-red-200 focus:outline-none" x-on:click="$store.profesStore.habilitarProf(profe.id_prof)" x-show="profe.estatus_prof != 1">Habilitar</button>
                                        </td>
                                    </tr>
                                    <tr class="h-3"></tr>
                                </template>
                            </tbody>
                        </table>
                        <!-- Visualizar modal -->
                        <div :class="[$store.profesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="$store.profesStore.selectedItem = 0" :class="[$store.profesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                                <div x-cloak :class="[$store.profesStore.selectedItem ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Visualización datos profesor</h1>

                                        <button @click="$store.profesStore.selectedItem = 0" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Visualización detallada de datos del profesor
                                    </p>

                                    <div class="mt-5">
                                        <div>
                                            <p class="block text-sm text-gray-700 capitalize">nombres</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.profesStore.selectedItem.nombre_prof"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">apellidos</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.profesStore.selectedItem.apellido_prof"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">cédula</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.profesStore.selectedItem.cedula_prof"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">correo electrónico</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.profesStore.selectedItem.correo_prof"></p>
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">Fecha registro</p>
                                            <p class="block text-sm text-gray-700" x-text="$store.profesStore.selectedItem.fecha_registro_prof"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Editar modal -->
                        <div :class="[$store.profesStore.modifProf ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="opacity-0 fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="$store.profesStore.modifProf = 0" :class="[$store.profesStore.modifProf ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                                <div x-cloak :class="[$store.profesStore.modifProf ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Edición de datos del profesor</h1>

                                        <button @click="$store.profesStore.modifProf = 0" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Modificación de datos personales del profesor
                                    </p>

                                    <form class="mt-5" id="modifProfes" x-on:submit.prevent="$store.profesStore.modificarProf()">
                                        <div>
                                            <input type="hidden" name="modif_id_prof" x-model="$store.profesStore.modifProf.id_prof">
                                            <p class="block text-sm text-gray-700 capitalize">nombres</p>
                                            <input type="text" name="modif_nombre" class="mt-2 rounded-lg block text-md text-gray-700 border-2 border-indigo-500/100" id="modif_nombre" x-model="$store.profesStore.modifProf.nombre_prof">
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">apellidos</p>
                                            <input class="mt-2 rounded-lg block text-md text-gray-700 border-2 border-indigo-500/100" type="text" name="modif_apellido" id="modif_apellido" x-model="$store.profesStore.modifProf.apellido_prof">
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">cédula</p>

                                            <input type="text" name="modif_cedula" class="mt-2 rounded-lg block text-md text-gray-700 border-2 border-indigo-500/100" id="modif_cedula" x-model="$store.profesStore.modifProf.cedula_prof">
                                        </div>
                                        <div class="mt-3">
                                            <p class="block text-sm text-gray-700 capitalize">correo electrónico</p>
                                            <input type="text" class="mt-2 rounded-lg block text-md text-gray-700 border-2 border-indigo-500/100" name="modif_correo" id="modif_correo" x-model="$store.profesStore.modifProf.correo_prof">
                                        </div>
                                        <div class="flex justify-end mt-6">
                                            <input type="submit" value="Editar" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 cursor-pointer">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    <script src="../js/profesores.js"></script>
</body>

</html>