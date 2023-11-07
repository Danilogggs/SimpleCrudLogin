<html>
    <head>
        <title>Edição de usuário</title>
    </head>
    <body>
        <?php
            include("connection.php");

            session_start();
            if (!isset($_SESSION["id"])) {
                header("Location: login.php");
            }

            $id = $_GET["id"];
            $sql = "SELECT nome, cidade FROM tableusers WHERE id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $nome = $row["nome"];
                    $cidade = $row["cidade"];
                }
            }
        ?>
        <h1>Editar Usuário</h1>
        <form name="form1" id="form1" method="post" action="users_edit_php.php">
            Nome:<br>
            <input type="text" name="txtName" value="<?php echo $nome ?>"><br>
            Cidade:<br>
            <input type="text" name="txtCity" value="<?php echo $cidade ?>"><br><br>
            <input type="hidden" name="hidId" value="<?php echo $id ?>">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>