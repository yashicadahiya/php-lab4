<?php
include_once "header.php";
?>


<p id="foot">Copyright 2017--A mutual fund company</p>
<p id="demo">Contact us on:</p>
<nav>
    <ul id="dem1">
        <?php
        $myfooterbar=array('Facebook','Twitter','Instagram');
        display_navigation($myfooterbar);
        ?>
    </ul>
</nav>
<style>
    #foot{
        margin-left: 330px;
    }
    #demo{
        margin-left: 100px;
        font-size: 20px;
    }
    #dem1{
        margin-left: 350px;
        padding: 30px;
    }
</style>