<?php
	include 'header.php';
?>
<body>
<div id="contents">
  <h1>Search Mutants by Name</h1>
  <form method = "post" action = "searchMutantController.php" />  
    <input type="text" id="search" name="search" />
    <input type="submit" value="go" name="submit" />
 </form>
