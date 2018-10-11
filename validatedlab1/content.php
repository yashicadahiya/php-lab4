<?php
//var_dump($_POST);


function validate_fn($firstname,$lastname,$email,$password,$cpassword)
{
    $error = "";
    if (empty($firstname)) {
        $error .= "please enter first name<br />";
    }
    if (empty($lastname)) {
        $error .= "please enter last name<br />";
    }
    if (empty($email)) {
        $error .= "please enter email<br />";
    }
    if (empty($password)) {
        $error .= "please enter password <br />";
    }
    if (empty($cpassword)) {
        $error .= "please confirm password<br />";
    }
    elseif (strlen($password) < 4) {
        $error .= "please enter password with four or more char<br />";
//$errorfree = false;

    }
    elseif ($cpassword != $password) {
        $error .= "passwords do not match</br>";
//$errorfree = false;
    }

    elseif (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        $error .= "Please enter valid email format<br />";
//$errorfree = false;
    }

else {
    header("Location: thankyou.php?info=completed");


}
    return $error;
}



    $errors = "";
    $firstname = "";
    $lastname = "";
    $email = "";
    $password = "";
    $cpassword = "";
    $errorfree = true;

    if (isset($_POST["send"])) {

        $firstname = $_POST["fn"];
        $lastname = $_POST["ln"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $errors=validate_fn($firstname, $lastname, $email, $password, $cpassword);
    }



    ?>
</head>

<body>


<form name="myform" action="" method="POST" id="frmphp">
<h1 id="heading">Sign up Form</h1>
    <?php

    echo $errors;
    ?>
    <br>
    <label for="firstname">Enter your firstname</label><input type="text" name="fn" value="<?=$firstname;?>" id="fn"><div class="error"></div>
    <br/>
    <label for="lastname">Enter your lastname</label><input type="text"  name="ln" value="<?=$lastname;?>" id="ln"><div class="error"></div>
    <br/>
    <label for="email">Enter E-mail:</label><input type="email" name="email" value="<?=$email;?>" id="email"><div class="error"></div>
    <br/>
    <label for="password">Enter password:</label><input type="password" name="password" value="<?=$password;?>" id="password"><div class="error"></div>
    <br/>
    <label for="cpassword">Confirm Password:</label><input type="password" name="cpassword" value="<?=$cpassword;?>" id="cpassword"><div class="error"></div>
    <br/>
    <fieldset id="rad">
        <legend id="legen">Gender</legend>
        <?php
        $buttonNames=array('male','female','other');
        ?>
    <input type="radio" name="gender" id="rbm" checked value=<?php $buttonNames[0] ?>>Male<br>
    <input type="radio" name="gender"  id="rbf" value=<?php $buttonNames[1] ?>>Female<br>
    <input type="radio" name="gender"  id="rbo" value=<?php $buttonNames[2] ?>>Other<br>
    </fieldset>
    <input type="submit" value="Submit" name="send" id="submit">
    <input type="reset" value="Reset" name="clear" id="clear">

</form>

<style>
#frmphp{
    background-color: lightgoldenrodyellow;
    border-style: dashed;
    width: 600px;
    margin-top: 100px;
    height: 1000px;
    margin-left: 300px;


}
#heading{
    margin-left:50px ;
}

    label{
        padding: 25px;
        margin-left: 50px;
    }

    nav{
        background-color: black;
    }

    nav ul{
        list-style-type: none;
        padding: 40px;
        background-color: black;
        height: 50px;
        margin-top: 15px;
        margin-left: 105px;


    }
    #fn{
        margin-left: 10px;
        margin-top: 20px;

    }
    #ln{
        margin-left: 13px;
        margin-top: 20px;
    }
    #email{
        margin-left: 55px;
        margin-top: 20px;
    }
    #password{
        margin-left: 38px;
        margin-top: 20px;
    }
    #cpassword{
        margin-left: 20px;
        margin-top: 20px;
    }

    #submit{
        margin-top: 30px;
        margin-left: 150px;
        height: 50px;
        width: 100px;
        font-size: 16px;

    }
    #rbm{
        margin-left: 40px;
        margin-bottom: 20px;
        padding: 20px;
        margin-top: 40px;

    }
    #legen{
        margin-left: 60px;
        margin-top: 30px;

    }
    #rad{
        margin-top: 40px;
        width: 450px;
        height: 200px;
        margin-left: 50px;
    }
    #rbf{
        margin-left: 40px;
        margin-bottom: 20px;
        padding: 20px;
        margin-top: 20px;
    }
    #rbo{
        margin-left: 40px;
        margin-bottom: 20px;
        padding: 20px;
        margin-top: 20px;
    }
    #clear{
        margin-left: 40px;
        height: 50px;
        width: 100px;
        font-size: 16px;
    }

</style>
</body>
