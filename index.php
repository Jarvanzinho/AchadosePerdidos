<?php
$inputs = [
    'nome' => 'text',
    'sobrenome' => 'text',
    'email' => 'text',
    'senha' => 'password',
    'confirme' => 'password'
];

$usuariosFile = file('users.csv');
    $usuarios = [];
    foreach ($usuariosFile as $usuario) {
        $usuarioData = explode(',', $usuario);
        $nome = $usuarioData[0];
        $usuarios[] = $nome;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="inicial">Registre-se</h1>
    <section class="registro">
    <form action="register.php" method="POST">                  
        <?php foreach ($inputs as $name => $type): ?>
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>">
        <?php endforeach ?>
        <input type="submit" value="Enviar">
    </form>
    
</section>

</body>
</html>

