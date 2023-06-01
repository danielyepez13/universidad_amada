function getCarouselData() {
    return {
        resultadosOrdenados: 0,
        currentIndex: 0,
        images: [
            {
                id: 1, imagen: 'https://images.unsplash.com/photo-1618355776464-8666794d2520?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', nombre: 'Ema Watson', carrera: 'Estudiante de Administración', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero a”'
            },
            {
                id: 2, imagen: 'https://images.unsplash.com/photo-1567168539593-59673ababaae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60', nombre: 'Steven McFly', carrera: 'Estudiante de Ingenieria Informática', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero a”'
            },
            {
                id: 3, imagen: 'https://images.unsplash.com/photo-1517256673644-36ad11246d21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60', nombre: 'Lorena Madison', carrera: 'Estudiante de Ingeniería Agropecuaria', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero a”'
            }
        ],
        increment() {
            this.currentIndex = this.currentIndex === this.images.length - 1 ? 0 : this.currentIndex + 1;
        },
        decrement() {
            if(this.currentIndex < 1){
                this.currentIndex = this.images.length - 1
            }else{
                this.currentIndex = this.currentIndex - 1;
            }
        },
    }
}
function getCarouselData2() {
    return {
        currentIndex: 0,
        images: [
            {
                id: 1, imagen: 'https://images.unsplash.com/photo-1517256673644-36ad11246d21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60', nombre: 'Ema Stone', carrera: 'Estudiante de Ingeniería Industrial', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero a”'
            },
            {
                id: 2, imagen: 'https://images.unsplash.com/photo-1567168539593-59673ababaae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHN0dWRlbnR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60', nombre: 'Horacio García', carrera: 'Estudiante de Turismo', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero a”'
            },
            {
                id: 3, imagen: 'https://images.unsplash.com/photo-1618355776464-8666794d2520?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', nombre: 'Clara Delgado', carrera: 'Estudiante de Ingeniería Aeronaútica', experiencia: '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus libero”'
            }
        ],
        increment() {
            this.currentIndex = this.currentIndex === this.images.length - 1 ? 0 : this.currentIndex + 1;
        },
        decrement() {
            if(this.currentIndex < 1){
                this.currentIndex = this.images.length - 1
            }else{
                this.currentIndex = this.currentIndex - 1;
            }
        },
    }
}