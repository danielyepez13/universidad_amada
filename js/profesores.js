// Inicializacion asincronica de alpine
document.addEventListener('alpine:init', async () => {
    Alpine.store('profesStore', {
        profesores: [],
        profesor: [],
        currentPage: 1,
        pageSize: 10,
        selectedItem: 0,
        modifProf: 0,
        notification: {
            open: false,
            message: ''
        },

        get pageCount() {
            return Math.ceil(this.profesores.length / this.pageSize);
        },
        get startIndex() {
            return (this.currentPage - 1) * this.pageSize;
        },
        get endIndex() {
            return this.startIndex + this.pageSize;
        },
        get pagedProfes() {
            return this.profesores.slice(this.startIndex, this.endIndex);
        },
        closeNotification() {
            this.notification.open = false;
        },
        async search(){
            let buscar = document.getElementById('buscador').value;
            await fetch(`../controllers/Profesores/buscador.php?buscar=${buscar}`, {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    this.profesores = profesores;
                });
        },
        // Funcion para cargar los regisros
        async load() {
            await fetch('../controllers/Profesores/listar.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    this.profesores = profesores;
                });
        },
        async addProf() {
            let formulario = new FormData(document.getElementById("regisProfes"))
            await fetch('../controllers/Profesores/registrar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((profesores) => {
                    // añadir al principio el nuevo registro
                    this.profesores.unshift(profesores);

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
        async viewProf(item) {
            this.selectedItem = item;
        },
        async editProf(prof) {
            this.modifProf = prof;
        },
        async modificarProf() {
            let formulario = new FormData(document.getElementById("modifProfes"))
            await fetch('../controllers/Profesores/modificar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((updatedUser) => {
                    this.profesores = this.profesores.map((user) => {
                        if (user.id_prof === updatedUser.id_prof) {
                            return updatedUser;
                        }
                        return user;
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
        async deshabilitarProf(id) {
            await fetch(`../controllers/Profesores/deshabilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    // Lista nueva de profesores
                    this.profesores = profesores;

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
        async habilitarProf(id) {
            await fetch(`../controllers/Profesores/habilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    this.profesores = profesores;

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
        async comprobacionCedulaProf(){
            
        }
    });
})