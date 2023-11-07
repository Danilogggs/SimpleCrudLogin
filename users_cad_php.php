<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("connection.php");

            $nome = $_POST["txtName"];
            $cidade = $_POST["txtCity"];
            $sql = "INSERT INTO tableusers(nome, cidade) VALUES('$nome', '$cidade')";
            $result = $conn->query($sql);

            if ($result === TRUE) {
?>
<script>
    alert('Usuário cadastrado com sucesso!!!');
    location.href = 'userbd.php';
</script>
<?php
            }
            else {
?>
<script>
    alert('Algo não deu certo...');
    history.go(-1);
</script>
<?php
            }
?>
    </body>
</html>