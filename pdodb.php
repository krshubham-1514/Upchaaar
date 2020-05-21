<?php

 define("HOSTNAME","localhost");
 define("USER","root");
 define("PASSWORD","");
 define("DATABASE","seller_account_db");
 $dsn='mysql:host='.HOSTNAME.';dbname='.DATABASE;
 $conn=new PDO($dsn,USER,'');
 
?>
<!doctype html>
<html>
    <head>
        <title>
</title>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="seller_doc.css">
<link rel="stylesheet" type="text/css" href="diag_legal_details.css">
<link rel="stylesheet" type="text/css" href="buissdetails.css">
<link rel="stylesheet" type="text/css" href="form_legal.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Roboto|Roboto+Slab" rel="stylesheet">
</head>
<body>





