// Inicializacion asincronica de alpine
document.addEventListener('alpine:init', async () => {
    Alpine.store('estudiantesStore', {
        estudiantes: [],
        carreras: [],
        carrera: [],
        currentPage: 1,
        pageSize: 10,
        selectedItem: 0,
        modifCar: 0,
        notification: {
            open: false,
            message: ''
        },

        get pageCount() {
            return Math.ceil(this.estudiantes.length / this.pageSize);
        },
        get startIndex() {
            return (this.currentPage - 1) * this.pageSize;
        },
        get endIndex() {
            return this.startIndex + this.pageSize;
        },
        get pagedEstudiantes() {
            return this.estudiantes.slice(this.startIndex, this.endIndex);
        },
        closeNotification() {
            this.notification.open = false;
        },
        // Funcion para cargar los regisros
        async load() {
            await fetch('../controllers/Estudiantes/listar.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((estudiantes) => {
                    this.estudiantes = estudiantes;
                });
        },
        async addEst() {
            let formulario = new FormData(document.getElementById("regisEstudiantes"))
            await fetch('../controllers/Estudiantes/registrar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((estudiantes) => {
                    // añadir al principio el nuevo registro
                    this.estudiantes.unshift(estudiantes);

                    // Añade notificación de que se añadió correctamente
                    if (this.notification.open) return;
                    this.notification.open = true;
                    this.notification.message = '¡Se añadió con éxito el registro!';

                    let timer = 0;
                    clearTimeout(timer);

                    timer = setTimeout(() => {
                        this.notification.open = false;
                    }, 5000);
                }
                );
        },
        async viewCarre(item) {
            this.selectedItem = item;
        },
        async editCar(car) {
            this.modifCar = car;
        },
        async modificarEst() {
            let formulario = new FormData(document.getElementById("modifEstudiantes"))
            await fetch('../controllers/Estudiantes/modificar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((updatedCar) => {
                    this.estudiantes = this.estudiantes.map((car) => {
                        if (car.id_car === updatedCar.id_car) {
                            return updatedCar;
                        }
                        return car;
                    });
                    // Notificacion
                    if (this.notification.open) return;
                    this.notification.open = true;
                    this.notification.message = '¡Se actualizó con éxito el registro!';

                    let timer = 0;
                    clearTimeout(timer);

                    timer = setTimeout(() => {
                        this.notification.open = false;
                    }, 5000);
                }
                );
        },
        async deshabilitarCarre(id) {
            await fetch(`../controllers/Estudiantes/deshabilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((estudiantes) => {
                    // Lista nueva de estudiantes
                    this.estudiantes = estudiantes;

                    // Notificacion
                    if (this.notification.open) return;
                    this.notification.open = true;
                    this.notification.message = '¡Se deshabilitó con éxito el registro!';

                    let timer = 0;
                    clearTimeout(timer);

                    timer = setTimeout(() => {
                        this.notification.open = false;
                    }, 5000);
                });
        },
        async habilitarCarre(id) {
            await fetch(`../controllers/Estudiantes/habilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((estudiantes) => {
                    this.estudiantes = estudiantes;

                    // Notificacion
                    if (this.notification.open) return;
                    this.notification.open = true;
                    this.notification.message = '¡Se habilitó con éxito el registro!';

                    let timer = 0;
                    clearTimeout(timer);

                    timer = setTimeout(() => {
                        this.notification.open = false;
                    }, 5000);
                });
        },
        async search() {
            let buscar = document.getElementById('buscador').value;
            await fetch(`../controllers/Estudiantes/buscador.php?buscar=${buscar}`, {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((estudiantes) => {
                    this.estudiantes = estudiantes;
                });
        },
        async listarCarreras() {
            await fetch('../controllers/Estudiantes/select.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((carreras) => {
                    this.carreras = carreras;
                });
        }
    });
})