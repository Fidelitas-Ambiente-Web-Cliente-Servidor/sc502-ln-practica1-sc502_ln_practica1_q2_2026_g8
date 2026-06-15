const cursos = {
    nombre: "HTML, CSS",
    descripcion: "Aprende a crear páginas web modernas y responsivas con HTML y CSS",
    imagen: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600",
    categoria: "Desarrollo Web",
},

  {
    nombre: "JavaScript",
    descripcion: "Domina el lenguaje de programación más popular para llevar tu ingenio a otro nivel",
    imagen: "https://www.infoworld.com/wp-content/uploads/2025/09/2263137-0-59682900-1757000713-shutterstock_1361674454-100939444-orig.jpg?quality=50&strip=all",
    categoria: "Programación"
  },

  {
    nombre: "Desarrollo Frontend",
    descripcion: "Aprende a crear interfaces de usuario atractivas y funcionales",
    imagen: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=600",
    categoria: "Frontend"
  },

};

document.addEventListener("DOMContentLoaded", () => { {
    const contenedor = document.getElementById("cursos-grid");
    
    cursos.forEach(curso => {
        const card = document.createElement("div");
        card.className = "curso-card";

        const img = document.createElement("img");
        img.src = curso.imagen;
        img.alt = curso.nombre;

        const titulo = document.createElement("h3");
        titulo.textContent = curso.nombre;
        
        const descripcion = document.createElement("p");
        descripcion.textContent = curso.descripcion;
        
        const boton = document.createElement("button");
        boton.textContent = "Ver más";

        const categoria = document.createElement("span");
        categoria.textContent = curso.categoria;

        card.appendChild(categoria);

        card.appendChild(img);
        card.appendChild(titulo);
        card.appendChild(descripcion);
        card.appendChild(boton);

        contenedor.appendChild(card);
    });

}});