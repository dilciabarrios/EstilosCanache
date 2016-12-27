// Add Record USUARIOS
function addRecord() {
    // get values
    var nombre = $("#nombre").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var clave = $("#clave").val();
 
    // Add record
    $.post("../usuarios/ajax/addRecord.php", {
        nombre: nombre,
        correo: correo,
        usuario: usuario,
        clave: clave
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#nombre").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#clave").val("");
    });
}

// READ records
function readRecords() {
    $.get("../usuarios/ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("../usuarios/ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_id").val(id);
    $.post("../usuarios/ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_nombre").val(user.nombre);
            $("#update_correo").val(user.correo);
            $("#update_usuario").val(user.usuario);
            $("#update_clave").val(user.clave);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var nombre = $("#update_nombre").val();
    var correo = $("#update_correo").val();
    var usuario = $("#update_usuario").val();
    var clave = $("#update_clave").val();

    // get hidden field value
    var id = $("#hidden_id").val();

    // Update the details by requesting to the server using ajax
    $.post("../usuarios/ajax/updateUserDetails.php", {
        nombre: nombre,
        correo: correo,
        usuario: usuario,
        clave: clave
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});