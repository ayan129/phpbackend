<?php

if(isset($_POST['name'])){
  $server = "localhost";   // yeh data bate ka server abhe local host he to jbhi yaha local host likhenge hum
  $username = "root";    // aur local host ka user name rooot he huta he hmeha to wuhe likhenge
  $password = "";         // password local host me blank huta he


  $conn = mysqli_connect("$server","$username","$password",);  // yeh aik buhat ahem function he jise hum mysqli function khte he yeh connect krta he hamare data base ko

//   if(!$connection){

// die("connection to this data base failed due to " .mysqli_connect_error());
//   }else{

//     die("connected to the database");
//   }
$name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

   
    $sql = "INSERT INTO  `php`.`php`  (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

// // echo $sql;

if( $conn->query($sql) == true)
{
   //  echo "Successfully inserted";

}
  
else{
  //  echo "ERROR: $sql <br> $conn->error";
}

$conn->close();


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A travel registrattion form</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Arapey&family=News+Cycle&family=Righteous&family=Sansita+Swashed&display=swap" rel="stylesheet">
</head>

<body>

    <div class="containerone">
        <h1>WELCOME TO TRAVEL US TRIP FORM </h1>
        <p>
            &nbsp;
        </p>
        <p> <i> <h3> Enter your details and sumbit this form to confirm your participation in this trip : </h3> </i> </p>
       
  
    
    
    </div>
    <div class="containertwo">
        <form action="index.php" method="post">

            <!-- <label class="label" for="name"> NAME : </label> -->
            <p> <input required type="text" id="name" name="name" placeholder=" Enter Your Name"> </p>

                <!-- <label class="label" for="name"> NAME : </label> -->
                <p> <input  required type="text" id="age" name="age" placeholder=" Enter Your Age"> </p>

            <!-- <label class="label" for="gender">GENDER : </label> -->
            <p> <input  required type="text" id="gender" name="gender" placeholder=" Enter Your Gender"> </p>

            <!-- <label class="label" for="number">PHONE NUMBER : </label> -->
            <p> <input  required type="number" id="phone" name="phone" placeholder=" Enter Your Phone Number"> </p>

            <!-- <label class="label" for="email"> EMAIL : </label> -->
            <p> <input  required type="email" id="email" name="email" placeholder=" Enter Your Email Adress"> </p>

            <!-- <label class="label" for="name">OTHER INFORMATION : </label>  -->
            <br> <textarea  required name="other" id="other" cols="30" rows="10"
                placeholder="ENTER ANY OTHER INFORMATION HERE "></textarea>

            <p> <button>DONE</button> <button>RESET</button> </p>

        








        </form>

    </div>
    <script src="index.js"></script>
<style>
    
.containerone{

background-color: teal;
color: white;
margin: auto;
max-width: 80%;
padding: 25px;
text-align: center;
font-family: 'Arapey', serif;
}

*{
margin: 0;
padding: 0;
box-sizing: border-box;

}

.containertwo{

background-color: teal;
color : white;
margin: auto;
max-width: 80%;
padding: 25px;

}

input,textarea{
width: 80%;
margin: 15px;
padding: 15px;
font-size: 14px;
border-radius: 10px;
font-family: 'Arapey', serif;
color: black;

}
button{
padding: 10px;
border-radius: 10px;
background-color:white;
cursor: pointer;
color: teal;
text-align: center;
margin: 5px;
font-family: 'Arapey', serif;
}
form{

text-align: center;
}
.label{


text-align: left !important;
}

.submitMsg{ 
color: green;
font-size: 24px;

}
</style>


</body>

</html>