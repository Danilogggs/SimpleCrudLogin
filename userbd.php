<html>
    <head>
        <title>Banco de Dados</title>
        <style>
            table {
                width: 100%;
                border: 1px solid #000;
            }
            table td, th {
                border: 1px solid #000;
                text-align: center;
            }
        </style>
    </head>
    <body>
<?php
    include("connection.php");

    $sql = "SELECT id, nome, cidade FROM tableusers";
    $result = $conn->query($sql);
?>

    <h1>Número de registros: <?php echo $result->num_rows ?></h1>
    <a href="users_cad.php">
    + Adicionar Registro<br><br>
    </a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th colspan=2>Ações</th>
        </tr>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        <tr>
            <td>
                <a href="users_user.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row["id"] ?>
                </a>
            </td>
            <td><?php echo $row["nome"] ?></td>
            <td><?php echo $row["cidade"] ?></td>
            <td>
                <a href="users_edit.php?id=<?php echo $row['id'] ?>">
                    Editar
                </a>
            </td>
            <td onclick="excluir(<?php echo $row['id'] ?>)"><a href="#">Excluir</a></td>
        </tr>
<?php
        }
    }
?>  
    </table>
    <br>
    <form method="post" action="logout.php">
        <input type="submit" value="Sair">
    </form>

    <script>
        function excluir(id) {
            if (confirm("Tem certeza que deseja excluir este registro?")) {
                location.href = "users_del_php.php?id=" + id;
            }
        }
    </script>
    </body>
</html>