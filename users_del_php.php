<?php
    include("connection.php");

    session_start();
    if (!isset($_SESSION["id"])) {
        header("Location: login.php");
    }
?>
<?php
        $id = $_GET["id"];
        $sql = "DELETE FROM tableusers WHERE id = $id";
        $result = $conn->query($sql);

        if ($result === TRUE) {
?>
<script>
    alert('Usuário removido com sucesso!!!');
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