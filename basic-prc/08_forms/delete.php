<?php

if(isset($_GET['id'])){
    $contactFile ='contact.json';
    $contacts = file_exists($contactFile)? json_decode(file_get_contents($contactFile),true):[];


    // remove the contact by id

     $contacts = array_filter($contacts, fn($c) => $c["id"] != (int)$_GET["id"]);

     file_put_contents($contactFile
     ,json_encode($contacts,JSON_PRETTY_PRINT)) ;

     echo "contact deleted";

}

?>