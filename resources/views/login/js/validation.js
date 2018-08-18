function LoginFormVal() {
    var UNameLoginVal = document.getElementById('Username').value;
    var PassLoginVal = document.getElementById('PasswordLogin').value;

    if (UNameLoginVal == null || UNameLoginVal.length == 0 || /^\s+$/.test(UNameLoginVal)) {
        if (UNameLoginVal == null || UNameLoginVal.length == 0 || /^\s+$/.test(UNameLoginVal)) {
            swal({
                type: 'error',
                title: 'ERROR',
                text: 'Ingresa un Nombre de Usuario',
            })
            return false;
        }
    }

    var PatronUserNameL = /^[0-9a-zA-Z]+$/;
    if (!PatronUserNameL.test(UNameLoginVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'No se permiten carácteres especiales en Nombre de Usuario, sólo letras y números',
        })
        return false;
    }

    if (PassLoginVal == null || PassLoginVal.length == 0) {
        if (PassLoginVal == null || PassLoginVal.length == 0) {
            swal({
                type: 'error',
                title: 'ERROR',
                text: 'Ingresa una Contraseña',
            })
            return false;
        }
    }
}

function RegisterFormVal() {
    var NameRegisterVal = document.getElementById('Name-Register').value;

    if (NameRegisterVal == null || NameRegisterVal.length == 0 || /^\s+$/.test(NameRegisterVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'Ingresa un nombre',
        })
        return false;
    }

    var PatronNombre = /^([a-z ñáéíóú]{2,60})$/i;
    if (!PatronNombre.test(NameRegisterVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'No se permiten números o carácteres especiales en el nombre',
        })
        return false;
    }

    var EmailRegisterVal = document.getElementById('Email-Register').value;

    //Restriccion de Email
    if (EmailRegisterVal == null || EmailRegisterVal.length == 0 || /^\s+$/.test(EmailRegisterVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'Ingresa un correo',
        })
        return false;
    }

    var Patron = /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (EmailRegisterVal.search(Patron) == 0) {} else {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'Ingresa un correo válido',
        })
        return false;
    }

    var UNameRegisterVal = document.getElementById('Username-Register').value;

    if (UNameRegisterVal == null || UNameRegisterVal.length == 0 || /^\s+$/.test(UNameRegisterVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'Ingresa un Nombre de Usuario',
        })
        return false;
    }

    var PatronUserNameR = /^[0-9a-zA-Z]+$/i;
    if (!PatronUserNameR.test(UNameRegisterVal)) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'No se permiten carácteres especiales en Nombre de Usuario, sólo letras y números',
        })
        return false;
    }

    var PassRegisterVal = document.getElementById('Password-Register').value;

    if (PassRegisterVal == null || PassRegisterVal.length == 0) {
        swal({
            type: 'error',
            title: 'ERROR',
            text: 'Ingresa una contraseña',
        })
        return false;
    }
}
