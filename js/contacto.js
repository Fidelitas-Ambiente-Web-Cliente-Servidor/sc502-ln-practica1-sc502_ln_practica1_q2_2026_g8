// Obtener elementos del formulario
const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");

const btnEnviar = document.getElementById("btnEnviar");
const formulario = document.getElementById("formularioContacto");

// Validar nombre
function validarNombre() {

    let valor = nombre.value.trim();

    if (valor.length < 5) {
        document.getElementById("errorNombre").innerHTML =
            "Debe tener al menos 5 caracteres";
        return false;
    }

    if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/.test(valor)) {
        document.getElementById("errorNombre").innerHTML =
            "Solo se permiten letras y espacios";
        return false;
    }

    document.getElementById("errorNombre").innerHTML = "";
    return true;
}

// Validar correo
function validarCorreo() {

    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(correo.value)) {
        document.getElementById("errorCorreo").innerHTML =
            "Correo electrónico inválido";
        return false;
    }

    document.getElementById("errorCorreo").innerHTML = "";
    return true;
}

// Validar teléfono
function validarTelefono() {

    let valor = telefono.value.trim();

    if (!/^\d+$/.test(valor)) {
        document.getElementById("errorTelefono").innerHTML =
            "Solo números";
        return false;
    }

    if (valor.length < 8) {
        document.getElementById("errorTelefono").innerHTML =
            "Debe tener mínimo 8 dígitos";
        return false;
    }

    document.getElementById("errorTelefono").innerHTML = "";
    return true;
}

// Validar asunto
function validarAsunto() {

    if (asunto.value.trim().length < 3) {
        document.getElementById("errorAsunto").innerHTML =
            "Debe tener al menos 3 caracteres";
        return false;
    }

    document.getElementById("errorAsunto").innerHTML = "";
    return true;
}

// Validar mensaje
function validarMensaje() {

    if (mensaje.value.trim().length < 20) {
        document.getElementById("errorMensaje").innerHTML =
            "Debe tener al menos 20 caracteres";
        return false;
    }

    document.getElementById("errorMensaje").innerHTML = "";
    return true;
}

// Validar todo el formulario
function validarFormulario() {

    if (
        validarNombre() &&
        validarCorreo() &&
        validarTelefono() &&
        validarAsunto() &&
        validarMensaje()
    ) {
        btnEnviar.disabled = false;
    } else {
        btnEnviar.disabled = true;
    }
}

// Eventos en tiempo real
nombre.addEventListener("input", validarFormulario);
correo.addEventListener("input", validarFormulario);
telefono.addEventListener("input", validarFormulario);
asunto.addEventListener("input", validarFormulario);
mensaje.addEventListener("input", validarFormulario);

// Enviar formulario
formulario.addEventListener("submit", function(event) {

    event.preventDefault();

    document.getElementById("mensajeExito").innerHTML =
        "Mensaje enviado correctamente.";

    formulario.reset();

    btnEnviar.disabled = true;
});