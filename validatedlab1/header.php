<head>
<?php
    function display_navigation(array $links){
    foreach ($links as $val){

    echo "<li style='display:inline; margin: 20px; padding: 20px;'><a style='color: white; font-size: 30px;' href='".$val."'>".$val."</a></li>";
    //$activePage = $val . ".php";
    }
    return $links;
    }
    ?>

    <nav id="navigation">
        <ul>
            <?php
            $mynavbar=array('Home','About','Policy Withdrawl','Deduction Centre','Log out');
            display_navigation($mynavbar);
            ?>
        </ul>
    </nav>
    <img id="image" src="ventura.jpg" alt="image">
    <h1 id="red">Welcome to Bajaj Allianz</h1>

    <style>
        #red{
            margin-left: 130px;
            font-family: "Apple Braille";
            margin-top: 20px;
            float: left;
            color: red;
        }
        #image{
            margin-left: 170px;
            height: 100px;
            width: 100px;
            float: left;
        }
    </style>

