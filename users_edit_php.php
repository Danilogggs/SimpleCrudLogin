<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("connection.php");

            session_start();
            if (!isset($_SESSION["id"])) {
                header("Location: login.php");
            }

            $nome = $_POST["txtName"];
            $cidade = $_POST["txtCity"];
            $id = $_POST["hidId"];
            $sql = "UPDATE tableusers SET nome = '$nome', cidade = '$cidade' WHERE id = $id";
            $result = $conn->query($sql);

            if ($result === TRUE) {
?>
<script>
    alert('Usuário editado com sucesso!!!');
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