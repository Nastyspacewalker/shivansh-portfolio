<?php
  if ($_server['REQUEST_METHOD'] == 'GET'){
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone']
$country = $_GET['country'];
$message = $_GET['message'];

//submit these to database
if (($user) ($email)|| ($phone) || ($country)) || (($message))
{
    $host = "localhost";
    $dbname = " ";
    $dbpassword = " ";
    $dbname = "portfolio";
    //create connection
    $con = mysqli_connect(' $host = "localhost"; $db username = " "; $dbpassword = ""; $dbname = "portfolio"');
}

else {
  $select = "select email images email = ? limit 1"
  $INSERT = "INSERT INTO `portfolio`.`portfoilo`('name','$email ','phone','country','message')"
     VAlUES('1','2','3','4','5','6');
   prepare statement

$stmt ="conn->prepare($SELECT);"
$stmt -->bind_param("s" ,$email);
$stmt -->execute();
$stmt -->bind result($email);
$stmt -->store_result();
$stmt = $stmt->num_rows;

if ($rnum==0){
$stmt->close();


$stmt = $conn->prepare($INSERT);
$stmt -->bind_param("ssss" ,$name, 
    $email ,$phone ,$country,$mesage);
$stmt -->execute();

echo "New record inserted successfully";
} else {
     echo "someone already register using this email";
}
    $stmt->close();
    $con->close();
}
?>
<!DOCTYPE html> 

<html>
<head>
  <title>contact</title>          
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" type="text/css" href="style.css"> 
   <link rel="stylesheet" type="text/css" href=" file:///D:/Shivansh%20Doc/shivansh%20files/htdocs/New%20websites/admin%20dashboard/Cargo%20Booking%20software/Bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>  
<body>
<script>
 
</script>
<form action="contact.php" method="post">
    <div class="contact-box">
    <h2 style="text-align: left;">contact</h2>
    <p></i>Shivansh911in@gmail.com</p>
    <p></i>(+91)9987099863</p>
    <p>Mumbai-401303</p>
    <h2 style="text-center">Get in touch with me</h2>
    <form>
      <div class="w-50 m-auto">
       <div class="form-group">
 <div class="container">
     <div class="login-content">
        <form method="post">
       <div class="form-group">
        <label>Name</label>
    <input type="text" name="name" class="form-control" id="name"placeholder=" Enter name..." >  
      <label>Email ID</label>
    <input type="text" name="Email" class="form-control" id="email" placeholder=" Enter Email ID.." >
    <label>phone</label>
    <input type="text" name="phone" class="form-control" id="phone" placeholder=" Enter phone number.. " >  
  <label>country</label>
<input type="text" name="country" class="form-control" id="country"placeholder=" Enter country name..">
       </div>
      </div>
    </div>
  </div>
 </div>
</div>
      <button type="submit" name="submit" class="btn btn-success btn-flat m-b-10 m-t-10">submit</button>
      <textarea  id="message" name="message"  id="message" placeholder="write something... " required>
      </textarea>
         </form>
    </form>
  </div> 
</div>  
</body>
</html>