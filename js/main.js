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

// Maquina de escrever
window.addEventListener('load', function() {
  let text = document.getElementById("text_digit")
  let texto = "Bem vindo a área de administração de seu site. Digite credenciais para entrar para acessar"
  const email = document.getElementById("email")
  const password = document.getElementById("password")
  const send_login = document.getElementById("send_login")
  texto = texto.split('')
  texto.forEach((item, i) => {
      setTimeout(function() {
          text.innerHTML += item
      }, 75 * i)
      setTimeout(function() {
          email.style.display = ''
          email.focus()
      }, 7000)
  })
  email.addEventListener('focus', function() {
      setTimeout(function() {
          password.style.display = ''
      }, 2000)
  })
  password.addEventListener('focus', function() {
      setTimeout(function() {
          send_login.style.display = ''
      }, 2000)

  })
})