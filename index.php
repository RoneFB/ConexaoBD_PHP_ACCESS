<?php
    require_once 'conn.php';
 
    $sql = "SELECT * FROM tb_clientes";
    $conn = Conexao::conectarBD();
    
    $rs = $conn->query($sql);

    while($result = $rs->fetch())
    {
        echo $result[0].": ".$result[1]."<br />";
    }

?>