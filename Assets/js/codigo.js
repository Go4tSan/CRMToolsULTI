window.setInterval(function() {
    $('#recarga').load(location.href + " #recarga");
}, 500)

function insertar(e) {
    e.preventDefault();
    const usuario = document.getElementById('usuario').value;
    const contra = document.getElementById('password').value;
    if (usuario != "" && contra != "") {
        var form = $('#formLogin');
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: 'Home/validar',
            data: form.serialize(),
            success: function(data) {
                // console.log(data);
                const res = JSON.parse(data);
                if (res == "ok") {
                    window.location.href = "Principal";
                } else {
                    Swal.fire({
                        type: 'error',
                        title: '¡Usuario y/o password inválidos!',
                        confirmButtonColor: 'red',
                        confirmButtonText: 'Aceptar'
                    });
                }
            }
        });
    } else {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y/o password'
        });
        return false;
    }
}

function InsertarUsu(e) {
    e.preventDefault();
    const Recibido = document.getElementById('txtRecibido').value;
    const Cierre = document.getElementById('txtCierre').value;
    const Dias = document.getElementById('txtDias').value;
    const Estado = document.getElementById('txtEstado').value;
    const Observaciones = document.getElementById('txtObservaciones').value;

    if (Recibido != "" || Cierre != "" || Dias != "" || Estado != "" || Observaciones != "") {
        var form = $('#frmRegistrarU');
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: 'DashBoard/InsertarU',
            data: form.serialize(),
            success: function(data) {
                console.log(data);
                const res = JSON.parse(data);
                if (res == "si") {
                    Swal.fire({
                        type: 'success',
                        title: '¡Registro realizado con éxito!',
                        confirmButtonText: 'Aceptar'

                    });
                    document.getElementById("txtRecibido").value = "";
                    document.getElementById("txtCierre").value = "";
                    document.getElementById("txtDias").value = "";
                    document.getElementById("txtEstado").value = "";
                    document.getElementById("txtObservaciones").value = "";
                } else {
                    Swal.fire({
                        type: 'error',
                        title: '¡Hubo un error al registrar!',
                        confirmButtonColor: 'red',
                        confirmButtonText: 'Aceptar'
                    });
                }
            }
        });
    } else {
        Swal.fire({
            type: 'warning',
            title: 'Todos los campos son obligatorios'
        });
        return false;
    }

}

function EliminarU(id) {
    var form = $('#frmTabla');
    var url = form.attr('action');
    $.ajax({
        type: "POST",
        url: 'DashBoard/eliminar/' + id,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            const res = JSON.parse(data);
            if (res == "si") {
                Swal.fire({
                    type: 'success',
                    title: '¡Registro eliminado con éxito!',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                Swal.fire({
                    type: 'error',
                    title: '¡Hubo un error al eliminar!',
                    confirmButtonColor: 'red',
                    confirmButtonText: 'Aceptar'
                });
            }
        }
    });

}

function EditarU(id) {
    console.log(id);
    document.getElementById('ID').value = id;
    document.getElementById('IDPost').value = id;
    document.getElementById('Insertar').style.display = 'none'; // hide
    document.getElementById('Actualizar').style.display = '';

    var form = $('#frmTabla');
    var url = form.attr('action');
    $.ajax({
        type: "POST",
        url: 'DashBoard/editar/' + id,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            const res = JSON.parse(data);
            document.getElementById("txtRecibidoU").value = res.recibido;
            document.getElementById("txtCierreU").value = res.cierre;
            document.getElementById("txtDiasU").value = res.dias;
            document.getElementById("txtEstadoU").value = res.estado;
            document.getElementById("txtObservacionesU").value = res.observaciones;
        }
    });

}

function cancelar(e) {
    e.preventDefault();
    document.getElementById('Insertar').style.display = '';
    document.getElementById('Actualizar').style.display = 'none';
}

function ActualizarU(e) {
    e.preventDefault();
    var form = $('#frmActualizarU');
    var url = form.attr('action');
    $.ajax({
        type: "POST",
        url: 'DashBoard/ActualizarU',
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            const res = JSON.parse(data);
            if (res == "si") {
                Swal.fire({
                    type: 'success',
                    title: '¡Registro actualizado con éxito!',
                    confirmButtonText: 'Aceptar'

                });
                document.getElementById('Insertar').style.display = '';
                document.getElementById('Actualizar').style.display = 'none';
            } else {
                Swal.fire({
                    type: 'danger',
                    title: '¡Ocurrió un error!',
                    confirmButtonText: 'Aceptar'
                });
            }
        }
    })
}

function excelPersonas(e) {
    e.preventDefault();
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Reporte de personas generado con éxito',
        showConfirmButton: false,
        timer: 2000
    })
    window.location = "DashBoard/excel";
}