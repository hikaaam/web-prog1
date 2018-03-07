<form method="get" action="coba-if.php">
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Proses">

</form>

<?php

if(array_key_exists("kelas",$_GET))
    {
      /*  switch($_GET["kelas"])
        {
            case "4a":
                echo 'kamu di kelas 4a kan.';
                break;
            case "4c":
                echo "kamu di kelas 4c kan";
                break;
            default  :
                echo "kamu bukan manusia";
               
            }
      */
      if($_GET["kelas"]=="4a")
        {
          echo "kamu di kelas 4a kan.";
        }
      else if($_GET["kelas"]=="4c")
        {
          echo "kamu di kelas 4c kan.";
        }
      else
        {
          "mati aja lu";
        }
    } 

?>