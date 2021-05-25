function validation() {

    var user = document.getElementById('user').value;
    var mobileNumber = document.getElementById('mobileNumber').value;
    var emails = document.getElementById('emails').value;
    var userid = document.getElementById('userId').value;
    var pass = document.getElementById('pass').value;
    var confirmpass = document.getElementById('conpass').value;



    if (user == "") {
        document.getElementById('username').innerHTML = " ** Please fill the username field";
        return false;
    }
    if ((user.length <= 2) || (user.length > 30)) {
        document.getElementById('username').innerHTML = " ** Username length must be between 2 and 30";
        return false;
    }
    if (!isNaN(user)) {
        document.getElementById('username').innerHTML = " ** Only characters are allowed";
        return false;
    }


    if (mobileNumber == "") {
        document.getElementById('mobileno').innerHTML = " ** Please fill the mobile number field";
        return false;
    }
    if (isNaN(mobileNumber)) {
        document.getElementById('mobileno').innerHTML = " **Please enter numbers from 0 to 9 only";
        return false;
    }
    if ((mobileNumber.length != 11)) {
        document.getElementById('mobileno').innerHTML = " ** Mobile Number must be 11 digits!";
        return false;
    }


    if (emails == "") {
        document.getElementById('emailids').innerHTML = " ** Please fill the email id field";
        return false;
    }
    if (emails.indexOf('@') <= 0) {
        document.getElementById('emailids').innerHTML = " **Invalid Position for (@)";
        return false;
    }
    if ((emails.charAt(emails.length - 4) != '.') && (emails.charAt(emails.length - 3) != '.')) {
        document.getElementById('emailids').innerHTML = " **Invalid Position for (.)";
        return false;
    }


    if (userid == "") {
        document.getElementById('useridalert').innerHTML = " ** Please fill the Username field";
        return false;
    }


    if (pass == "") {
        document.getElementById('passwords').innerHTML = " ** Please fill the password field";
        return false;
    }
    if ((pass.length <= 5) || (pass.length > 20)) {
        document.getElementById('passwords').innerHTML = " ** Password must be between 5 to 20 characters";
        return false;
    }
    if (pass != confirmpass) {
        document.getElementById('confrmpass').innerHTML = " ** Passwords do not match! Try again";
        return false;
    }


    if (confirmpass == "") {
        document.getElementById('confrmpass').innerHTML = " ** Please fill the confirm password field";
        return false;
    }

}