<?php

include(__DIR__ ."/../inc/header.php");

/* Includes all necessary functionalities including database connection */

if(!login_check()) 
{ 
header("Location: login.php");
exit();
} 

/* redirect to login page if not logged in */

/* Perform all queries here */

$get_user = $con->query("SELECT * FROM `members`");  

$page_title = "New Page";

include(__DIR__ ."/../inc/head_struc.php");  

/* head_struc.php is containing template header contents   */
?>
<!-- Body contents -->
<div id="container">

<p>Hello world!</p>
</div> 


<?php
include(__DIR__ ."/../inc/footer.php");

/*  footer contents of template  */
