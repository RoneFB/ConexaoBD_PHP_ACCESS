

<?php
 Class Conexao{

      private static $db;

      public static function conectarBD(){
          $mdbFilename = $_SERVER["DOCUMENT_ROOT"].'\acss\includes\teste.mdb';
           
          try {
               self::$db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)}; Dbq=$mdbFilename;Uid");
               echo "PDO connection object created\n";
          
          
          
          } catch(PDOException $e) {
               echo $e->getMessage();
          }

          return self::$db;
      }

      public function __destruct() {

          self::$db->close();
          
      }

      public function teste(){
          $con = conectarBD();
          $sql = "SELECT * FROM tb_clientes";
          $rs = $con->query($sql);

          while($result = $rs->fetch())
          {
               echo $result[0].": ".$result[1]."<br />";
          }
      }
 }
