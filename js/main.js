$("#send_add_user").click(function () {
  let username = $("#usuario").val();
  let email = $("#email").val();
  let passwd = $("#password").val();
  let formData =
    "&username=" + usuario + "&email=" + email + "&password=" + passwd;
  $.ajax({
    type: "POST",
    url: "../source/auth/Add_user.php",
    async: true,
    data: formData,
    sucess: function (data) {
      alert("usuario cadastrado");
    },
    error: function (data) {
      console.log(data);
    },
    beforeSend: function () {
      alert("analizando cadastro");
    },
  });
});

$("#send_login").click(function () {
  let email = $("#email").val();
  let passwd = $("#password").val();
  let formData = "&email=" + email + "&password=" + passwd;
  $.ajax({
    type: "POST",
    url: "../source/auth/Add_user.php",
    async: true,
    data: formData,
    sucess: function (data) {
      alert("Entrou!!!");
    },
    error: function (data) {
      console.log(data);
    },
    beforeSend: function () {
      alert("Entrando, aguarde...");
    },
  });
});


