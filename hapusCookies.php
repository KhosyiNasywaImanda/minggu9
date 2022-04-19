<?php
     setcookie("mahasiswa","", time()-600);

     setcookie("kelas","", time()-3600);
?>
<html>
    <body>
        <?php
        echo "Cookie mahasiswa telah dihapus <br>";
        echo "Cookie kelas telah dihapus <br>";
        ?>
    </body>
</html>