// Inicializacion asincronica de alpine
document.addEventListener('alpine:init', async () => {
    Alpine.store('profesStore', {
        profesores: [],
        profesor: [],
        selectedItem: 0,
        modifProf: 0,

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
                    // console.log(updatedUser)
                }
                );
        },
        async deshabilitarProf(id) {
            await fetch(`../controllers/Profesores/deshabilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    this.profesores = profesores;
                });
        },
        async habilitarProf(id) {
            await fetch(`../controllers/Profesores/habilitar.php?id=${id}`, {
                method: 'POST',
            })
                .then((response) => response.json())
                .then((profesores) => {
                    this.profesores = profesores;
                });
        }
    });
})