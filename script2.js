const InputNombre = document.getElementById("nombre");
const InputApellido = document.getElementById("apellido");
const InputEmail = document.getElementById("inputEmail");
const InputTema = document.getElementById("tema");
const botonEnviar = document.getElementById("enviar");


const pMensajeNombre = document.getElementById("mensajeNombre");
const pMensajeApellido = document.getElementById("mensajeApellido");
const pMensajeEmail = document.getElementById("mensajeEmail");
const pMensajeTema = document.getElementById("mensajeTema");

botonEnviar.addEventListener("click", validarNombre);
botonEnviar.addEventListener("click", validarApellido);
botonEnviar.addEventListener("click", validarEmail);
botonEnviar.addEventListener("click", validarTema);
const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/

function validarNombre( ) {
    if ( InputNombre.value.length < 3) {
        pMensajeNombre.innerHTML= "Ingrese un nombre válido";

    }
    else{
        pMensajeNombre.innerHTML = "Nombre correcto!!";
    }
    
}

function validarApellido( ) {
    if ( InputApellido.value.length < 3) {
        pMensajeApellido.innerHTML= "Ingrese un apellido válido";

    }
    else{
        pMensajeApellido.innerHTML = "Apellido correcto!!";
    }
}

function validarEmail(){
    if(!expRegular.test (InputEmail.value)) {
        pMensajeEmail.innerHTML = "El email no es válido";
    }
    else {
        pMensajeEmail.innerHTML = "Email correcto";
    }

}

function validarTema( ) {
    if ( InputTema.value.length < 3) {
        pMensajeTema.innerHTML= "Ingrese un tema";

    }
    else{
        pMensajeApellido.innerHTML = "Tema ingresado!";
    }
    
}



