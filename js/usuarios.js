// Inicializacion asincronica de alpine
document.addEventListener('alpine:init', async () => {
    Alpine.store('usuariosStore', {
        usuarios: [],
        roles: [],
        currentPage: 1,
        pageSize: 10,
        selectedItem: 0,
        modifCar: 0,
        cedulaEncontrada: '',
        notification: {
            open: false,
            message: ''
        },

        get pageCount() {
            return Math.ceil(this.usuarios.length / this.pageSize);
        },
        get startIndex() {
            return (this.currentPage - 1) * this.pageSize;
        },
        get endIndex() {
            return this.startIndex + this.pageSize;
        },
        get pagedUsuarios() {
            return this.usuarios.slice(this.startIndex, this.endIndex);
        },
        closeNotification() {
            this.notification.open = false;
        },
        // Funcion para cargar los regisros
        async load() {
            await fetch('../controllers/Usuarios/listar.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((usuarios) => {
                    this.usuarios = usuarios;
                });
        },
        async addUsu() {
            let formulario = new FormData(document.getElementById("regisUsuarios"))
            await fetch('../controllers/Usuarios/registrar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((usuarios) => {
                    // añadir al principio el nuevo registro
                    this.usuarios.unshift(usuarios);

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
        async modificarUsu() {
            let formulario = new FormData(document.getElementById("modifUsuarios"))
            await fetch('../controllers/Usuarios/modificar.php', {
                method: 'POST',
                body: formulario,
            })
                .then((response) => response.json())
                .then((updatedUsu) => {
                    this.usuarios = this.usuarios.map((usu) => {
                        if (usu.id_usuario === updatedUsu.id_usuario) {
                            return updatedUsu;
                        }
                        return usu;
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
        async deshabilitarUsu(id) {
            await fetch(`../controllers/Usuarios/deshabilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((usuarios) => {
                    // Lista nueva de usuarios
                    this.usuarios = usuarios;

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
        async habilitarUsu(id) {
            await fetch(`../controllers/Usuarios/habilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((usuarios) => {
                    this.usuarios = usuarios;

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
            await fetch(`../controllers/Usuarios/buscador.php?buscar=${buscar}`, {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((usuarios) => {
                    this.usuarios = usuarios;
                });
        },
        async listarRoles() {
            await fetch('../controllers/Usuarios/select.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((roles) => {
                    this.roles = roles;
                });
        },
        async buscarCedula(cedula){
            await fetch('../controllers/Usuarios/buscarCedula.php', {
                method: 'GET',
            })
                .then((response) => response.json())
                .then((roles) => {
                    this.roles = roles;
                });
        }
    });
})