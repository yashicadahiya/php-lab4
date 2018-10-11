
    /**function validate() {
        var firstname,lastname,email,password,cpassword;
        var isvalid=true;
        firstname=document.getElementById("fn");
        lastname=document.getElementById("ln");
        email=document.getElementById("email");
        password=document.getElementById("password");
        cpassword=document.getElementById("cpassword");
        var error=document.getElementsByClassName("error");

        if(firstname.value==""){
            error[0].innerHTML="Please enter firstname";
            isvalid=false;

        }
        else{
            error[0].innerHTML="";

        }

        if(lastname.value==""){
            error[1].innerHTML="please enter lastname";
            isvalid=false;
        }
        else{
            error[1].innerHTML="";
        }
        if(email.value==""){
            error[2].innerHTML="Please enter email address";
            isvalid=false;

        }
        else{
            if (!emailAddress.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                error[2].innerHTML = "Invalid email format";
                isvalid=false;
            } else {
                error[2].innerHTML = "";
            }

        }



        if(password.value==""){
            error[3].innerHTML="please enter a password";
            isvalid=false;

        }
        else{
            error[3].innerHTML="";
        }
        if(cpassword.value=""){
            error[4].innerHTML="please confirm password";
            isvalid=false;
        }
        else{
            error[4].innerHTML="";
        }

        for (i = 0; i < error.length; i++) {
            error[i].style.color = "#f7941e";
        }

        return isvalid;

    }
     **/


