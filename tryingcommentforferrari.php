<?php
 
 if($_POST["Submit"]){
   print "<h1></h1>";

  $Name = $_POST['comment_author'];
  $Comment = $_POST['comment'];
  $Email = $_POST['email'];

  #Get old comments
  $old = fopen("commentforferrari.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("commentforferrari.txt", "w+");
  $string = "<b>".$Name."</b> uid-<b>".$Email."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
     echo "<script>
		location.href='ferr.php';
		</script>";
 }


?>