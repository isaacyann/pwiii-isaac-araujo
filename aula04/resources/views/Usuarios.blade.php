<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="usuario$usuarioTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formusuario$usuariolário Simples</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h2>Formusuario$usuariolário de Cadastro</h2>
    <form action="/usuario$usuariosusuario$usuarioarios" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <inpusuario$usuariot type="text" id="nome" name="txtNome" requsuario$usuarioired>

        <label for="email">E-mail:</label>
        <inpusuario$usuariot type="email" id="email" name="txtEmail" requsuario$usuarioired>

        <busuario$usuariotton type="susuario$usuariobmit">Cadastrar</busuario$usuariotton>
    </form>

    <h2>usuario$usuariosusuario$usuarioários Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->Nome}}</td>
                <td>{{$usuario->Email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
