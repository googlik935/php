 <form class="" action="index.php" method="post">
   <p>
     Введите число: <br>
     <input type="text" name="age" value="">
   </p>
  </form>

<?php


  $age = htmlspecialchars($_POST['num']);

   switch ($num) {
     case 3:
       echo "Три";
       break;
     case 5:
      echo "Пять";
       break;
     default:
       echo "Нет представления данного числа";
       break;
   }
   
?>
