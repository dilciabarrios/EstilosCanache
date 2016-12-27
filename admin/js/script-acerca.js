// Add Record
function addRecord() {
    // get values
    var titulo = $("#titulo").val();
    var parrafo = $("#parrafo").val();
 
    // Add record ACERCA
    $.post("../acerca/ajax/addRecord.php", {
        titulo: titulo,
        parrafo: parrafo
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#titulo").val("");
        $("#parrafo").val("");
    });
}

// READ records
function readRecords() {
    $.get("../acerca/ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("../acerca/ajax/deleteUser.php", {
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
    $.post("../acerca/ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_titulo").val(user.titulo);
            $("#update_parrafo").val(user.parrafo);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var titulo = $("#update_titulo").val();
    var parrafo = $("#update_parrafo").val();

    // get hidden field value
    var id = $("#hidden_id").val();

    // Update the details by requesting to the server using ajax
    $.post("../acerca/ajax/updateUserDetails.php", {
            id: id,
            titulo: titulo,
            parrafo: parrafo
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





