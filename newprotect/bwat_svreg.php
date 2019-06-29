<html>
   <head>
      <title>Add New Record in MySQLi Database</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
   </head>
   
   <body>
      <div id = "main">
         <form action = "" method = "post">
            <label>Name :</label>
            <input type = "text" name = "name" id = "name" />
			<label>Number :</label>
            <input type = "tel" name = "number" id = "number" />
			<label>Message :</label>
            <input type = "text" name = "message" id = "message" />
            <br />
            <br />
            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
         </form>
      </div>
      
      <?php
		 include 'config.php';
         if(isset($_POST["submit"])){
			 
            // Check connection
			$name = $_POST["name"];
			$number = $_POST["number"];
			$message = $_POST["message"];
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
			#$query = "INSERT INTO users(username, password,name,surname,email,role)VALUES('$username', '$password','$name','$lastname','$email','$role')";
            $sql = "INSERT INTO $tbl_name(name,number,message,tvab) VALUES('$name','$number','$message', 'true')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
   </body>
</html>