
$(document).ready(function(){

   $("#btnEnviarContato").click(function(){

       var nome = $("#nome").val();

       var email = $("#email").val();

       var assunto = $("#assunto").val();

       var mensagem = $("#mensagem").val();

       var conteudo = $('#myModalContato').find('p');

       if ((nome == "") || (email == "") || (assunto == "") || (mensagem == "")){

           conteudo.text('Erro: Verifique se todos os campos estão preenchidos !!! ');

           $('#myModalContato').modal({
               //keyboard: false,
               backdrop: 'static'

           });

       }else{


           conteudo.text('Nome: ' + nome + ' | ' + 'E-mail: ' + email + ' | ' + 'Assunto: ' + assunto + ' | ' + 'Mensagem: ' + mensagem);

           $('#myModalContato').modal({
               //keyboard: false,
               backdrop: 'static'

           });

       }

   });


});