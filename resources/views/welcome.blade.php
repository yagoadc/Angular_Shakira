<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" type="" href="">
  </head>
  <body>
    <form action="{{ route('nomeDaRota') }}"
      enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse">
    <br><br>
    <input type="submit" value="Submit">
  </form>
  </body>
</html>
