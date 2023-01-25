function formValidation() {
    var s_uname = document.getElementById("s_uname").value;
    var s_pass = document.getElementById("s_pass").value;
    var s_cpass = document.getElementById("s_cpass").value;
    var s_email = document.getElementById("s_email").value;
    var s_mobile = document.getElementById("s_mob").value;


    var namePattern = /^[A-Za-z .]{3,20}$/
    var passPattern = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@%&*#£])){15}/
    var emailPattern = /(cse|eee|law)_\d{10}@lus.ac.bd/
    var mobilePattern = /^(\+88)?-?01[3-9]\d{8}$/



    //User Name
    if (!s_uname.match(namePattern)) {
        document.getElementById("error_u").innerHTML = "Enter Valid Name";
        return false;

    }
    else if (s_uname.length < 3 || s_uname.length > 20) {
        document.getElementById("error_u").innerHTML = "Length 3-20";

    }
    else {
        document.getElementById("error_u").innerHTML = "";
    }
    //password
    if (!s_pass.match(passPattern)) {
        document.getElementById("error_p").innerHTML = "Password not strong enough";
        return false;
    }
    else {
        document.getElementById("error_p").innerHTML = "";
    }

    //confirmpassword
    if (!s_cpass.match(passPattern)) {
        document.getElementById("error_cp").innerHTML = "Password Not Matched";
        return false;
    }
    else {
        document.getElementById("error_cp").innerHTML = "";
    }

    //Email
    if (!s_email.match(emailPattern)) {
        document.getElementById("error_e").innerHTML = "LU email required";
        return false;
    }
    else {
        document.getElementById("error_e").innerHTML = "";
    }
    //mobile
    if (!s_mobile.match(mobilePattern)) {
        document.getElementById("error_m").innerHTML = "**Only BD phone number is allowed!!";
        return false;

    }
    else {
        document.getElementById("error_m").innerHTML = "";
    }

}