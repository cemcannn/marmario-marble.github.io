<?php

    if (isset($_POST["email"])){

        $kime = "cmcan@windowslive.com";

        $mesaj = "<h1>".$_POST["message"]."</h1>";
        $baslik = "From: ".$_POST["name"]."<".$_POST["email"].">\r\n";
        $baslik .= "Reply-to : cmcan@windowslive.com\r\n";
        $baslik .= "Content-type: text/html\r\n";


        if(mail($kime,$mesaj,$baslik))
            echo "Emailiniz basariyla gonderilmistir.";
        else
            echo "Malesef emailiniz gonderilemedi.";
    }

?>
