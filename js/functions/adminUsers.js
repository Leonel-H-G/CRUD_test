console.log("adminUSers.js");
$(document).ready(function () {
  $(document).on("click", ".btnSaveUser", function () {
    var name = $("#name").val();
    var lastname = $("#lastname").val();
    var address = $("#address").val();
    var mail = $("#mail").val();

    $.ajax({
      url: "php/controllers/userController.php",
      method: "POST",
      data: {
        mod: "saveUser",
        name: name,
        lastname: lastname,
        address: address,
        mail: mail,
      },
    })
      .done(function (data) {
        var data = JSON.parse(data);
        console.log(data);

        if (data.response == true) {
          location.reload();
        } else {
          Swal.fire({
            title: "Error",
            text: "No se pudo registrar el usuario",
            icon: "danger",
          });
        }

        //--- --- ---//
        //--- --- ---//
      })
      .fail(function (message) {
        VanillaToasts.create({
          title: "Error",
          text: "Ocurrió un error, intentelo nuevamente",
          type: "error",
          timeout: 1200,
          positionClass: "topRight",
        });
      });
  });
  $(document).on("click", ".editUser", function () {
    console.log("editUser function called");
  });
  $(document).on("click", ".deleteUser", function () {
    console.log("deleteUser function called");
  });
});
