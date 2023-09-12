<?php
   $dsn = "mysql:host=localhost;dbname=qllop";
   $username = "root";
   $password = "";

   try{
      $objPDO = new PDO($dsn,$username,$password);
      //echo "Ket noi thanh cong !";
      $query = "select * from lop";
      $pdoState = $objPDO->prepare($query);
      $pdoState->execute();
      if($pdoState->rowCount() > 0){
        $result = $pdoState->fetchAll();
      }
      $pdoState->closeCursor();

      echo json_encode($result);
   }catch(PDOException $e){
      $msg = $e->getMessage();
      echo "Error: " . $e;
   }

?>