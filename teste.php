<?php

     ///limited query 2000 records
     $url ="https://ll.thespacedevs.com/2.0.0/launch/?limit=1";
     $ch = curl_init( $url);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
     
     $result = curl_exec($ch);

     var_dump( $result);



?>