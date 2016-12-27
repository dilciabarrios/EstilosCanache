// Add Record
function addRecord() {
    // get values
    var descripcion = $("#descripcion").val();
    var precio = $("#precio").val();
    var cantidad = $("#cantidad").val();
    var destacado = $("#destacado").val();
    var imagen = $("#imagen").val();
 
    // Add record ACERCA
    $.post("../portafolio/ajax/addRecord.php", {
        descripcion: descripcion,
        precio: precio,
        cantidad: cantidad,
        destacado: destacado,
        imagen: imagen
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#descripcion").val("");
        $("#precio").val("");
        $("#cantidad").val("");
        $("#destacado").val("");
        $("#imagen").val("");
    });
}

// READ records
function readRecords() {
    $.get("../portafolio/ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("../portafolio/ajax/deleteUser.php", {
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
    $.post("../portafolio/ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_descripcion").val(user.descripcion);
            $("#update_precio").val(user.precio);
            $("#update_cantidad").val(user.cantidad);
            $("#update_destacado").val(user.destacado);
            $("#update_imagen").val(user.imagen);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var descripcion = $("#update_descripcion").val();
    var precio = $("#update_precio").val();
    var cantidad = $("#update_cantidad").val();
    var destacado = $("#update_destacado").val();
    var imagen = $("#update_imagen").val();

    // get hidden field value
    var id = $("#hidden_id").val();

    // Update the details by requesting to the server using ajax
    $.post("../portafolio/ajax/updateUserDetails.php", {
            id: id,
            descripcion: descripcion,
            precio: precio,
            cantidad: cantidad,
            destacado: destacado,
            imagen: imagen
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





