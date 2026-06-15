// Array de cursos
const cursos = [

    {
        nombre: "HTML y CSS",
        descripcion: "Aprenda a crear páginas web modernas y responsivas.",
        categoria: "Desarrollo Web",
        duracion: "8 semanas",
        precio: "₡95.000",
        imagen: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600"
    },

    {
        nombre: "JavaScript",
        descripcion: "Desarrolle sitios web dinámicos e interactivos.",
        categoria: "Desarrollo Web",
        duracion: "10 semanas",
        precio: "₡110.000",
        imagen: "https://www.infoworld.com/wp-content/uploads/2025/09/2263137-0-59682900-1757000713-shutterstock_1361674454-100939444-orig.jpg"
    },

    {
        nombre: "Desarrollo Frontend",
        descripcion: "Construya interfaces modernas para aplicaciones web.",
        categoria: "Desarrollo Web",
        duracion: "12 semanas",
        precio: "₡125.000",
        imagen: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=600"
    },

    {
        nombre: "SQL Básico",
        descripcion: "Aprenda consultas y administración de información.",
        categoria: "Bases de Datos",
        duracion: "6 semanas",
        precio: "₡80.000",
        imagen: "https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600"
    },

    {
        nombre: "MySQL Avanzado",
        descripcion: "Optimice y administre bases de datos empresariales.",
        categoria: "Bases de Datos",
        duracion: "10 semanas",
        precio: "₡120.000",
        imagen: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600"
    },

    {
        nombre: "Administración de Bases de Datos",
        descripcion: "Gestione bases de datos profesionales.",
        categoria: "Bases de Datos",
        duracion: "14 semanas",
        precio: "₡145.000",
        imagen: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600"
    }

];


const listaCursos = document.getElementById("listaCursos");
const buscador = document.getElementById("buscador");
const filtroCategoria = document.getElementById("filtroCategoria");


function mostrarCursos(lista){

    listaCursos.innerHTML = "";


    lista.forEach(curso => {


        let tarjeta = document.createElement("div");

        tarjeta.className = "curso-card";


        tarjeta.innerHTML = `

            <h3>${curso.nombre}</h3>

            <img src="${curso.imagen}">

            <p>
            <strong>Categoría:</strong>
            ${curso.categoria}
            </p>

            <p>
            ${curso.descripcion}
            </p>


            <p>
            <strong>Duración:</strong>
            ${curso.duracion}
            </p>


            <p>
            <strong>Precio:</strong>
            ${curso.precio}
            </p>


            <button>
            Ver más
            </button>

        `;


        listaCursos.appendChild(tarjeta);


    });

}


function filtrarCursos(){


    let texto = buscador.value.toLowerCase();

    let categoria = filtroCategoria.value;



    let resultado = cursos.filter(curso => {


        let buscar = 
        curso.nombre.toLowerCase().includes(texto) ||
        curso.descripcion.toLowerCase().includes(texto);



        let filtro = 
        categoria == "Todos" ||
        curso.categoria == categoria;



        return buscar && filtro;


    });



    mostrarCursos(resultado);


}


buscador.addEventListener("input", filtrarCursos);

filtroCategoria.addEventListener("change", filtrarCursos);


mostrarCursos(cursos);