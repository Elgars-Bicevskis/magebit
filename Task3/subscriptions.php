<?php require 'db_conn.php'; ?>
<?php require 'buttonsort.php'; ?>
<?php require 'delete.php'; ?>
<?php require 'filter.php'; ?>
<?php require 'emailProviders.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="style3.css" rel="stylesheet">
    <title></title>
  </head>
  <body>

<form  method="post">
    <div class="dropdown">
      <button class="dropbtn">SORT BY</button>
        <div class="dropdown-content">
          <button type="submit" name="buttonY">DATE</button>
          <button type="submit" name="buttonX">EMAIL</button>
      </div>
    </div>
</form>

<div class="wrapper">
    <form method="post">
       <input id="search1" type="text" name="valueToSearch" placeholder="Search for email"><br><br>
       <input id="search2" type="submit" name="search" value="Filter">
       <input id="search3" type="submit" name="clear" value="Clear">
</div>


<form method="post">

  <label id="provDrop" for="emailProv">Choose an email provider:</label>
        <select name="emailProv" id="prov">
          <!-- echo each generated unique email provider as options-->
          <?php  foreach($emailPro as $i){ ?>
            <option name="emailsProvided"><?php echo $i ;?> </option>
          <?php } ?>
        </select>
  <br><br>
  <input id="provBtn" name="filterProv" type="submit" value="Filter">

</form>

    <table>
       <thead>
           <tr>
             <th>Email list</th>
           </tr>
       </thead>

       <tbody>

         <?php   // LOOP TILL END OF DATA
                 while($rows=$result->fetch_assoc())
                 {
              ?>
             <tr>
                 <!--FETCHING DATA FROM EACH ROW-->
                 <td><?php echo $rows['date'];?></td>
                 <td><?php echo $rows['email'];?></td>
                  <!--DELETE BUTTON-->
                 <td class="delete">  <a href="?del_task=<?php echo $rows['id']; ?>">x</a></td>
             </tr>
             <?php
                 }
              ?>

       </tbody>
    </table>

  </body>
</html>
