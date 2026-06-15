const profesores = [
    {
        id: 1,
        nombre: "Ana Rodríguez",
        especialidad: "Desarrollo Web",
        descripcion: "Especialista en HTML, CSS y diseño de interfaces web modernas.",
        foto: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600",
        correo: "ana@academia.com",
        cursosQueImparte: "HTML, CSS y JavaScript"
    },
    {
        id: 2,
        nombre: "Carlos Méndez",
        especialidad: "Bases de Datos",
        descripcion: "Experto en SQL, MySQL y administración de bases de datos.",
        foto: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600",
        correo: "carlos@academia.com",
        cursosQueImparte: "SQL y MySQL"
    },
    {
        id: 3,
        nombre: "Laura Sánchez",
        especialidad: "Programación Python",
        descripcion: "Desarrolladora Full Stack con experiencia en proyectos empresariales.",
        foto: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600",
        correo: "laura@academia.com",
        cursosQueImparte: "Python y Django"
    },
    {
        id: 4,
        nombre: "Andrés Vargas",
        especialidad: "Ciberseguridad",
        descripcion: "Consultor especializado en seguridad informática y redes.",
        foto: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600",
        correo: "andres@academia.com",
        cursosQueImparte: "Seguridad Informática y Redes"
    }
];

const contenedor = document.getElementById("profesores-container");

profesores.forEach(profesor => {

    const card = document.createElement("div");
    card.classList.add("profesor-card");

    card.setAttribute("data-id", profesor.id);

    card.innerHTML = `
        <img src="${profesor.foto}" alt="${profesor.nombre}">
        <h3>${profesor.nombre}</h3>
        <p><strong>Especialidad:</strong> ${profesor.especialidad}</p>
        <p>${profesor.descripcion}</p>
    `;

    card.addEventListener("click", () => {
        abrirModal(profesor.id);
    });

    contenedor.appendChild(card);
});

function abrirModal(id) {

    const profesor = profesores.find(p => p.id == id);

    document.getElementById("modalNombre").textContent = profesor.nombre;
    document.getElementById("modalFoto").src = profesor.foto;
    document.getElementById("modalEspecialidad").textContent = profesor.especialidad;
    document.getElementById("modalDescripcion").textContent = profesor.descripcion;
    document.getElementById("modalCorreo").textContent = profesor.correo;
    document.getElementById("modalCursos").textContent = profesor.cursosQueImparte;

    const modal = new bootstrap.Modal(
        document.getElementById("profesorModal")
    );

    modal.show();
}