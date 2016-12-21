<!doctype html>
<html>
	<head>
		<title>Contact Me!</title>
		 <script type="text/javascript" src="js/validator.js"></script>
		 <link rel="stylesheet" href="css/styles.css">
		 <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
	</head>

	<?php 
  		include 'inc/nav.php';
	?>

	<body>
		<br>
		<br>
		<br>
		<div class="container">
		<h1>Contact Entry</h1>
		<p>Please let us know how we are doing!</p>
		<form action="database-write.php" method="post" name="myForm" id="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="2" border="1">
            
            <tr>
               <td align="right">Name</td>
               <td><input type="text" name="Name" /></td>
            </tr>
            
            <tr>
               <td align="right">Email</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone</td>
               <td><input type="text" name="Phone" /></td>
            </tr>  
         </table>

         <input type="submit" value="send" />
      </form>

      <textarea name="comment" form="myForm">Enter your comments here!</textarea>

     </div class="container">
	



  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/menu-highlighter.js"></script>

  </body>


</html>