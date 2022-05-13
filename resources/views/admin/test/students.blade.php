<!DOCTYPE html>
<html>



<head>
	<meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link href="/css/style.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<meta name="theme-color" content="#7952b3">
</head>

<style>
  body {



  background-size: cover; /* or contain depending on what you want */
  background-position: center center;
  background-repeat: no-repeat;
  text-align:center;
  margin:auto;
  padding:0;

}
</style>



<?php $roles = ['admin','teacher']; ?>
   

@hasanyrole($roles)

    <?php 
// index.php
header("Location: http://127.0.0.1:8000/admin/students");
exit();
?> 

@else

 <?php abort(403, 'Unauthorized action. You dont have the required permissions to do so !'); ?>

@endhasanyrole