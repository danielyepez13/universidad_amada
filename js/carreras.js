// Inicializacion asincronica de alpine
document.addEventListener('alpine:init', async () => {
    Alpine.store('carrerasStore', {
        carreras: [],
        facultades: [],
        pensum: [],
        carrera: [],
        currentPage: 1,
        pageSize: 10,
        selectedItem: 0,
        modifCar: 0,
        id_facul_modif: 0,
        notification: {
            open: false,
            message: ''
        },

        get pageCount() {
            return Math.ceil(this.carreras.length / this.pageSize);
        },
        get startIndex() {
            return (this.currentPage - 1) * this.pageSize;
        },
        get endIndex() {
            return this.startIndex + this.pageSize;
        },
        get pagedCarreras() {
            return this.carreras.slice(this.startIndex, this.endIndex);
        },
        closeNotification() {
            this.notification.open = false;
        },
        // Funcion para cargar los regisros
        async load() {
            await fetch('../controllers/Carreras/listar.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((carreras) => {
                    this.carreras = carreras;
                });
        },
        async addCarre() {
            let formulario = new FormData(document.getElementById("regisCarreras"))
            await fetch('../controllers/Carreras/registrar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((carreras) => {
                    // añadir al principio el nuevo registro
                    this.carreras.unshift(carreras);

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
        async modificarCar() {
            let formulario = new FormData(document.getElementById("modifCarreras"))
            await fetch('../controllers/Carreras/modificar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((updatedCar) => {
                    this.carreras = this.carreras.map((car) => {
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
            await fetch(`../controllers/Carreras/deshabilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((carreras) => {
                    // Lista nueva de carreras
                    this.carreras = carreras;

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
            await fetch(`../controllers/Carreras/habilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((carreras) => {
                    this.carreras = carreras;

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
            await fetch(`../controllers/Carreras/buscador.php?buscar=${buscar}`, {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((carreras) => {
                    this.carreras = carreras;
                });
        },
        async listarFacultades() {
            await fetch('../controllers/Carreras/select.php?select=facu', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((facultades) => {
                    this.facultades = facultades;
                });
        },
        async listarPensum() {
            await fetch('../controllers/Carreras/select.php?select=pensum', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((pensum) => {
                    this.pensum = pensum;
                });
        },
    });
})