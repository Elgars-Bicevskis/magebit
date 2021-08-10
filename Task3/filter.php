
<?php

if(isset($_POST['search']))
{
   $valueToSearch = $_POST['valueToSearch'];
   // search in all table columns using concat mysql function
   $queryF = "SELECT * FROM `emails` WHERE CONCAT(`email`) LIKE '%".$valueToSearch."%'";
     $result = $conn->query($queryF);

}
if(isset($_POST['clear']))
{

   // search in all table columns using concat mysql function
   $queryC = "SELECT * FROM emails";
     $result = $conn->query($queryC);

}


?>
