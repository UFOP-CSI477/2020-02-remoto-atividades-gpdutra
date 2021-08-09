<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Banco de Dados WEB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <img src="./img/ufop.png" />
    <div class="jumbotron">
        <h1 align="center">Banco de Dados WEB</h1>
    </div>
    
    

    <div align="center">
        <a class="btn btn-primary" href="welcome.html">Home</a>
        <a class="btn btn-primary" href="#">Estados</a>
        <a class="btn btn-primary" href="#">Cidades</a>
        <a class="btn btn-primary" href="#">Produtos</a>
        <a class="btn btn-primary" href="people.html">Pessoas</a>
        <a class="btn btn-primary" href="#">Compras</a>
        <a class="btn btn-primary" href="profile.html">Perfil</a>
        <a class="btn btn-primary" href="#">Sair</a>
    </div>

    <br>

    <div align="center">
        <table class="table" style="width:70%">
            <tr>
              <th class="table-primary">Usuário</th>
              <th class="table-primary">E-mail</th>
              <th class="table-primary">CPF</th>
            </tr>
            <tr>
              <td><?php echo $_POST['name']; ?></td>
              <td><?php echo $_POST['staticEmail']; ?></td>
              <td><?php echo $_POST['cpf']; ?></td>
            </tr>
        </table>
    </div>

    <br>

    <div align="center">
        <a class="btn btn-secondary" href="people_create.html" >Cadastrar Pessoa</a>
    </div>


</body>
</html>