<?php
    
    include('include.php');

    $nome = post('nome'); 
    $sobrenome = post('sobrenome');
    $email = post('email');
    $senha = post('senha');
    $confirme = post('confirme');

?>

<?php if ($senha != $confirme): ?>
    <h1>Senhas não conferem; Tente novamente</h1>
    <a href="index.php">Voltar</a>
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $sobrenome, $email, $senha]) . "\n";

    $handle = fopen('users.csv', 'a');
    
    fwrite($handle, $data);
    header('location: index.php')
?>
