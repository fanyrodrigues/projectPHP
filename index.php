<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Substitua com as credenciais de login corretas e com a senha criptografada usando MD5
    $usuarioCorreto = 'fany@gmail.com';
    $senhaCorreta = md5('126'); // senha em MD5

    // Obtém os valores do formulário
    $email = $_POST['e-mail'];
    $senha = md5($_POST['senha']); // Criptografa a senha em MD5

    if ($email === $usuarioCorreto && $senha === $senhaCorreta) {
      
        header('Location: sucesso.php');
        exit();
    } else {
        // Redireciona de volta para o login com uma mensagem de erro
        header('Location: index.php?error=1');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="logo">
        <img src="imagens/LGCAT.png" alt="Imagem de login" class="capa">
    </div>
    <div class="forms">
        <div class="box_login">
            <h1>Faça o seu login</h1>
            <form action="index.php" method="post">
                <input type="email" name="e-mail" placeholder="Digite o seu email" required>
                <input type="password" name="senha" placeholder="Digite a sua senha" required>
                <button class="btn-login">LOGAR</button>
                <?php if (isset($_GET['error'])): ?>
                    <span class="msg_error"> <i class="fas fa-exclamation-circle"></i> Tentativa Inválida</span>
                    <?php endif; ?>
                </form>
            </div>
        </div>
</body>
</html>
