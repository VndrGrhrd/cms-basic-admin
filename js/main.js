//REGISTER USER
$("#send_add_user").click(function () {
  let username = $("#usuario").val();
  let email = $("#email").val();
  let passwd = $("#password").val();
  let formData =
    "&username=" + usuario + "&email=" + email + "&password=" + passwd;
  $.ajax({
    type: "POST",
    url: "/admin/source/auth/Add_user.php",
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


//LOGIN
$("#send_login").click(function () {
  let email = $("#email").val();
  let passwd = $("#password").val();
  let formData = "&email=" + email + "&password=" + passwd;
  $.ajax({
    type: "POST",
    url: "/admin/source/auth/login.php",
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

// GER CURRENT PAGE
window.addEventListener("load", () => {
  let title = document.getElementsByTagName("title");
  document.getElementById("page-current").innerText = title[0].innerText;
});

// EXPORT CSV
$("#export_csv").click(function () {
  $.ajax({
    type: "POST",
    url: "/admin/components/exportData.php",
    async: true,
    data: '',
    sucess: function (data) {
      //alert("!!!");
    },
    error: function (data) {
      console.log(data);
    },
    beforeSend: function () {
      // alert("Exportando, aguarde...");
    },
  });
});

// UPDATE PREMIOS
$(".update_premio").click(function () {
  let id_premio = $("#id-premio").val();
  let premio_01 = $("#premio_01").val();
  let premio_02 = $("#premio_02").val();
  let formData = "&id=" + id_premio + "&premio_01=" + premio_01 + "&premio_02=" + premio_02;
  $.ajax({
    type: "POST",
    url: "/admin/components/update-user.php",
    async: true,
    data: formData,
    sucess: function (data) {
      alert("Usuário atualizado");
    },
    error: function (data) {
      console.log(data);
    },
    beforeSend: function () {
      alert("Atuaslizando usuário");
    },
  });
});


// LIST USERS
$( document ).ready(function () {
  const table = document.getElementById('content_table')
  table.innerHTML = ''
  $.ajax({
    type: "POST",
    url: "/admin/components/list-user.php",
    async: true,
    data: 'teste',
    beforeSend: function() { /* antes de enviar */
      document.getElementById('loading').style.display = 'block'
    },
    success: function(data) { /* sucesso */
      document.getElementById('loading').style.display = 'none'
    },
    error: function (data) {
      console.log(data);
    },
    
  }).done(function(res){
    data_json = JSON.parse(res)
    data_json.map((user) => {
      table.innerHTML += '<form method="POST"><div class="row row-data-user"><div class="col"><input readonly type="text" name="id" value="'+ user.id + '"></div><div class="col-2"><span>'+ user.nome + '</span></div><div class="col"><span >'+ user.nickname + '</span></div><div class="col-2"><span >'+ user.cpf + '</span></div><div class="col"><span >'+ user.pontuacao + '</span></div><div class="col"><span >'+ user.moedas + '</span></div><div class="col"><span >'+ user.etapa + '</span></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_01"  value="'+ user.premio_01 + '"></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_02"  value="'+ user.premio_02 + '"></div><div class="col"><input type="submit" class="update_premio" value="&check;"></div></div></form>'
    })
  }).fail(function (jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  });
});

// FILTRO PESQUISA
$( '#filtro_user' ).click(function () {
  const table = document.getElementById('content_table')
  table.innerHTML = ''
  let filtro = $('#filtro').find('option').filter(':selected').val();
  let ordem = $('#ordem').find('option').filter(':selected').val();
  dataForm = "&filtro=" + filtro + "&ordem=" + ordem
  $.ajax({
    type: "POST",
    url: "/admin/components/filtro.php",
    async: true,
    data: dataForm,
    beforeSend: function() { /* antes de enviar */
      document.getElementById('loading').style.display = 'block'
    },
    success: function(data) { /* sucesso */
      document.getElementById('loading').style.display = 'none'
    },
    error: function (data) {
      console.log(data);
    },
    
  }).done(function(res){
    data_json = JSON.parse(res)
    data_json.map((user) => {
      table.innerHTML += '<form method="POST"><div class="row row-data-user"><div class="col"><input readonly type="text" name="id" value="'+ user.id + '"></div><div class="col-2"><span>'+ user.nome + '</span></div><div class="col"><span >'+ user.nickname + '</span></div><div class="col-2"><span >'+ user.cpf + '</span></div><div class="col"><span >'+ user.pontuacao + '</span></div><div class="col"><span >'+ user.moedas + '</span></div><div class="col"><span >'+ user.etapa + '</span></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_01"  value="'+ user.premio_01 + '"></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_02"  value="'+ user.premio_02 + '"></div><div class="col"><input type="submit" class="update_premio" value="&check;"></div></div></form>'
    })
  }).fail(function (jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  });
});

//PESUISA
$( '#search-form' ).click(function () {
  var str = $('#search').val()
  var search = $.trim(str)
  const table = document.getElementById('content_table')
  table.innerHTML = ''
  let dataForm = "&search=" + search
  $.ajax({
    type: "POST",
    url: "/admin/components/search.php",
    async: true,
    data: dataForm,
    beforeSend: function() { /* antes de enviar */
      document.getElementById('loading').style.display = 'block'
    },
    success: function(data) { /* sucesso */
      document.getElementById('loading').style.display = 'none'
    },
    error: function (data) {
      console.log(data);
    },
    
  }).done(function(res){
    data_json = JSON.parse(res)
    data_json.map((user) => {
      table.innerHTML += '<form method="POST"><div class="row row-data-user"><div class="col"><input readonly type="text" name="id" value="'+ user.id + '"></div><div class="col-2"><span>'+ user.nome + '</span></div><div class="col"><span >'+ user.nickname + '</span></div><div class="col-2"><span >'+ user.cpf + '</span></div><div class="col"><span >'+ user.pontuacao + '</span></div><div class="col"><span >'+ user.moedas + '</span></div><div class="col"><span >'+ user.etapa + '</span></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_01"  value="'+ user.premio_01 + '"></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_02"  value="'+ user.premio_02 + '"></div><div class="col"><input type="submit" class="update_premio" value="&check;"></div></div></form>'
    })
  }).fail(function (jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  });
});


//PAGINAÇÃO prev
$('#prev_page').click(function(){
  const table = document.getElementById('content_table')
  table.innerHTML = ''
  table.innerHTML = ''
  


  let offset = parseInt($('#offset').val())  //200
  let limit = offset  // é 200

  if(offset >= 200){
    limit = limit - 100  //200 - 100 = 100
    $('#offset').val(limit)
  }else{
    offset = 100
    limit = 200
    $('#offset').val('0')
  }



  console.log(offset)
  console.log(limit)

  let filtro = $('#filtro').find('option').filter(':selected').val();
  let ordem = $('#ordem').find('option').filter(':selected').val();
  dataForm = "&filtro=" + filtro + "&ordem=" + ordem + '&offset_start=' + limit + '&offset_end=' + offset
  $.ajax({
    type: "POST",
    url: "/admin/components/pagination.php",
    async: true,
    data: dataForm,
    beforeSend: function() { /* antes de enviar */
      document.getElementById('loading').style.display = 'block'
    },
    success: function(data) { /* sucesso */
      document.getElementById('loading').style.display = 'none'
    },
    error: function (data) {
      console.log(data);
    },
    
  }).done(function(res){
    data_json = JSON.parse(res)
    data_json.map((user) => {
      table.innerHTML += '<form method="POST"><div class="row row-data-user"><div class="col"><input readonly type="text" name="id" value="'+ user.id + '"></div><div class="col-2"><span>'+ user.nome + '</span></div><div class="col"><span >'+ user.nickname + '</span></div><div class="col-2"><span >'+ user.cpf + '</span></div><div class="col"><span >'+ user.pontuacao + '</span></div><div class="col"><span >'+ user.moedas + '</span></div><div class="col"><span >'+ user.etapa + '</span></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_01"  value="'+ user.premio_01 + '"></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_02"  value="'+ user.premio_02 + '"></div><div class="col"><input type="submit" class="update_premio" value="&check;"></div></div></form>'
    })
  }).fail(function (jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  });
});

//PAGINAÇÃO next
$('#next_page').click(function(){
  const table = document.getElementById('content_table')
  table.innerHTML = ''


  
  let offset = parseInt($('#offset').val())  // 100
  let limit = offset  // q é 100

  if(offset >= 100){
    limit = limit + 100  //100 + 100 = 200
    $('#offset').val(limit)
  }else{
    offset = 100
    limit = 200
    $('#offset').val('0')
  }



  console.log(offset)
  console.log(limit)
  let filtro = $('#filtro').find('option').filter(':selected').val();
  let ordem = $('#ordem').find('option').filter(':selected').val();
  dataForm = "&filtro=" + filtro + "&ordem=" + ordem + '&offset_start=' + offset + '&offset_end=' + limit
  $.ajax({
    type: "POST",
    url: "/admin/components/pagination.php",
    async: true,
    data: dataForm,
    beforeSend: function() { /* antes de enviar */
      document.getElementById('loading').style.display = 'block'
    },
    success: function(data) { /* sucesso */
      document.getElementById('loading').style.display = 'none'
    },
    error: function (data) {
      console.log(data);
    },
    
  }).done(function(res){
    data_json = JSON.parse(res)
    data_json.map((user) => {
      table.innerHTML += '<form method="POST"><div class="row row-data-user"><div class="col"><input readonly type="text" name="id" value="'+ user.id + '"></div><div class="col-2"><span>'+ user.nome + '</span></div><div class="col"><span >'+ user.nickname + '</span></div><div class="col-2"><span >'+ user.cpf + '</span></div><div class="col"><span >'+ user.pontuacao + '</span></div><div class="col"><span >'+ user.moedas + '</span></div><div class="col"><span >'+ user.etapa + '</span></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_01"  value="'+ user.premio_01 + '"></div><div class="col"><input style="width: 50%; padding-left: 10px; border: 1px dotted" type="text" name="premio_02"  value="'+ user.premio_02 + '"></div><div class="col"><input type="submit" class="update_premio" value="&check;"></div></div></form>'
    })
  }).fail(function (jqXHR, textStatus) {
    console.log( "Request failed: " + textStatus );
  });
});