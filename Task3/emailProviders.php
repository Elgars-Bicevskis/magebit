
    <?php

// get email provider after @
    function getEmailProvider($data){

    	   $data = substr($data, strpos($data, "@") + 1);
    	   $arr = explode(".", $data, 2);
            $data = $arr[0];
    	      return $data;
    	}

$res = mysqli_query($conn,"SELECT email FROM emails");
// fech emails and get email provider with function
    while($row = mysqli_fetch_array($res)) {
//create array for array unique function
      $emailPr[] =  getEmailProvider($row['email']);
}

// get unique values from array
$emailPro = array_unique($emailPr,SORT_REGULAR);





//select data on filter submit and display selected values
if(isset($_POST['filterProv']))
{
  $valuE =  $_POST["emailProv"];

    $queryProv = "SELECT * FROM `emails` WHERE CONCAT(`email`) LIKE '%{$valuE}%'";
      $result = $conn->query($queryProv);

}



     ?>
