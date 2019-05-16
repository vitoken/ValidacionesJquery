<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <form id="formvalida" class="needs-validation">

            <div class="form-group">
                <label>Nombre </label>
                <input id="nombre" class="form-control" name="nombre" type="text" placeholder="Escriba el nombre" required>
                <div class="invalid-feedback">Escriba el nombre</div>
            </div>
            <div class="form-group">
                <label>Apellido </label>
                <input id="apellido" class="form-control" name="apellido" type="text" placeholder="Escriba el apellido" required>
                <div class="invalid-feedback">Escriba el apellido</div>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input id="email" class="form-control" name="email" type="text" placeholder="suemail@dominio.com" required>
                <div class="invalid-feedback">Escriba el email</div>
            </div>
            <input id="btnenviar" type="submit" value="Enviar">
            
        </form>
        <div id="mensaje"></div>
        <script>
            $("#btnenviar").click(function (event) {
                var form = $("#formvalida");
                if (form[0].checkValidity() ===false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.addClass("was-validated");
            });
            function cargadatos(){
                var nombre = $("#nombre");
                var apellido = $("#apellido");
                var email = $("#email");
        $("#mensaje").load("cargadatos.php",
        {"nombre":nombre,
           "apellido":apellido,
           "email":email});
        
        );
            }
        </script>
    </body>



</html>
