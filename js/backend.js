
function signUp(){
    /* var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;  */
    var signUser = $("#signUser").val();
    var signEmail = $("#signEmail").val();
    var signPass = $("#signPass").val();
    console.log(signUser);
    console.log(signEmail);
    console.log(signPass);


    if(signUser.trim() ==""){
        $('#signUserMsg1').html('<small style="color:red;">Please enter name !!</small>');

        $('#signUser').focus();
        return false;

    }else if(signEmail.trim() ==""){
        $('#signUserMsg2').html('<small style="color:red;">Please enter Email !!</small>');

        $('#signEmail').focus();
        return false;

    } else if(signEmail.trim() != ""  && !reg.test(signEmail) ){
        $('#signUserMsg2').html('<small style="color:red;">Please enter vailed email !!</small>');

        $('#signEmail').focus();
        return false;
    }else if(signPass.trim() ==""){
        $('#signUserMsg3').html('<small style="color:red;">Please enter pass !!</small>');

        $('#signPass').focus();
        return false;

    }else{
        $.ajax({
        url:'customer/customerRegister.php',
        method :'POST',
        dataType : "json",
        data : {
            stusignup : "stusignup",
            signUser : signUser,
            signEmail : signEmail,
            signPass : signPass,
        },
        success: function(data){
            console.log(data);
            if(data.trim() == "OK"){
                $('#signupsuccess').append('<small class="alert alert-success" >Sign Up Successfuly !!</small>');
                clearstuReg();
            }else if (data.trim() == "failed"){
                $('#signupsuccess').append('<small class="alert alert-danger"> Unable to Sign Up !!</small>');
            }
        },
    });
        
    }
    
    
}




