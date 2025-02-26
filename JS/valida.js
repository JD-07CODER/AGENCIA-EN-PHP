function validar() {
    var documento, nombre, apellidos, correo, clave, telefono, direccion, expresion;
    documento = document.getElementById("documento").value;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;

    expresion = /\w+@\w+\.+[a-z]/;
    
    if (documento === "" || nombre === "" || apellidos === "" || correo === "" || clave === "" || telefono === "" || direccion === "") {
        alert("todos los campos son obligatorios");
        return false;
    }
    
    else if (documento.length > 10) {
        alert("Longitud de documento invalida");
        return false;
    }
    else if (nombre.length > 30) {
        alert("El nombre es muy largo, maximo 30 caracteres");
        return false;
    }
    else if (apellidos.length > 80) {
        alert("Los Apellidos son muy largos, maximo 80 caracteres");
        return false;
    }
    else if (correo.length > 50) {
        alert("El correo es muy largo, maximo 50 caracteres");
        return false;
    }
    else if (!expresion.test(correo)) {
        alert("El correo no es valido");
        return false;
    }
    else if (clave.length > 20) {
        alert("Clave muy larga, maximo 20 caracteres");
        return false;
    }
    else if (telefono.length > 30) {
        alert("El teléfono es muy largo, maximo 10 caracteres");
        return false;
    }
    else if (isNaN(telefono)) {
        alert("El telefono no es un numero");
        return false;
    }
    else if (direccion.length > 30) {
        alert("La direccion es muy larga, maximo 10 caracteres");
        return false;
    }
    
}