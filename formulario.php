<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
        <h2>POST</h2>
        <form action="formulario.php" method="POST">
            <label>Digite o seu nome:</label>
            <input type="text" name="nome" required minlength="2" pattern="^[A-ZÉa-zé]+|(\s[A-ZÉa-zé]+)/gm"/>

            <label>Digite o seu telefone:</label>
            <input type="text" name="telefone" required patern="(\d{2}\d{5}-\d{4})"/>

            <label>Digite o seu email:</label>
            <input type="text" name="email" required patern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$qpp-hheu-szo"/>

            <input type="submit" value="Enviar para o servidor"/>
        </form>
    </pre>

    <pre>
        <h2>GET</h2>
        <form action="formulario.php" method="GET">
            <label>Digite o seu nome:</label>
            <input type="text" name="nome" required minlength="2" pattern="^[A-ZÉa-zé]+|(\s[A-ZÉa-zé]+)/gm"/>

            <label>Digite o seu telefone:</label>
            <input type="text" name="telefone" required patern="(\d{2}\d{5}-\d{4})"/>

            <label>Digite o seu email:</label>
            <input type="text" name="email" required patern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$qpp-hheu-szo"/>

            <input type="submit" value="Enviar para o servidor"/>
        </form>
    </pre>
    
    <hr/>

    <?php
        $nome = ''; // nome inicia vazio

        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
        } elseif (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
        }
    


        if ($nome != '') {
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        } else {
            echo '<p>Formulário ainda não preenchido</p>';
        }
        
    ?>
</body>
</html>