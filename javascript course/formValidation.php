<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.css">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap-toggle.min.css">
    <script src="BOOTSTRAP/jquery.js"></script>
    <script src="BOOTSTRAP/js/bootstrap.js"></script>
    <script src="BOOTSTRAP/js/bootstrap-toggle.min.js"></script>
    <style>
        body{
            overflow: hidden;
        }
        .contactus{
           padding: 10px;
        }
       .textInput {
  border: none;
  height: 28px;
  margin: 2px;
  border: 1px solid rgba(0, 0, 0, 0.4);
  font-size: 1.2em;
  padding: 5px;
  width: 95%;
}
.textInput:focus {
  outline: none;
}
        .error{
            height: 10px;
        }
        input[type="submit"]{
            cursor: pointer;
        }
        h4{
            text-align: center;
            font-weight: lighter;
            color: rgba(0, 0, 0, 0.53);
        }
        h4 a{
            text-decoration: none;
        }
      
        input[type="submit"]{
            box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.34); 
            transition: .4s;
        }
        input[type="submit"]:hover{
            transform: scale(-50%,-50%);
            box-shadow: 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.34); 
        }
        .switch{
           margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
   <div class="row">
            <div class="col-lg-12 contactus" id="contact">
       
<div class="container">
    <div class="row">
        <div class="col-lg-6">
                             
                        <div class="text-center header"><h3>Contact us</h3></div>
                        <hr>
                <form class="form-horizontal" method="post" action="" onsubmit="return Validate()" name="vform">

                        <div class="form-group">
                            <div class="col-lg-12" id="username_div">
                                <input id="fname" name="username" type="text" placeholder="Username" class="form-control textInput">
                                <div id="name_error" class="error"></div>
                            </div>
                            
                        </div>
                           <div class="form-group">
                            <div class="col-lg-12" id="password_div">
                                <input name="password" type="password" placeholder="Password" class="form-control textInput">
                            
                            </div>
                            
                        </div>
                            <div class="form-group">
                            <div class="col-lg-12" id="pass_confirm_div">
                                <input name="password_confirm" type="password" placeholder="Password Confirm" class="form-control textInput">
                            <div id="password_error"></div>
                            </div>
                            
                        </div>
                      

                        <div class="form-group">
                            <div class="col-lg-12" id="email_div">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control textInput">
                               <div id="email_error" class="error"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12" id="phone_div">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control textInput">
                                <div id="phone_error"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12" id="comment_div">
                                <textarea class="form-control" id="message" name="comment" placeholder="What's on your mind....." rows="7"  class="form-control"></textarea>
                                <div id="comment_error"></div>
                            </div>
                        </div>

                      
                   
                              <input type="submit" value="submit" class="col-lg-12 form-group">
                         
              
                </form>
            
        </div>
        <div class="col-lg-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header"><h3>Our Office</h3></div>
                    <hr>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        Shallaghari<br />
                       Bhaktapur<br />
                       9843652012<br />
                      <a href="http://drh2so4.ga/?i=1">www.drh2so4.ga</a><br />
                        </div>
                        <hr />
                        <div id="map1" class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.33305382479!2d85.35900221480922!3d27.676099333471875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a1bed1bdd29%3A0x70040fb78c745729!2sSamriddhi+College!5e0!3m2!1sen!2snp!4v1541222986023" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
           
            
                                           
            </div>
        </div>
        <div class="switch text-center">
   
<input type="checkbox"  data-toggle="toggle">
        </div>
  <script type="text/javascript">
    var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var phone = document.forms['vform']['phone'];
      var comment = document.['vform']['comment'];
  var x =  x + isNaN(phone.value);   
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
      var password_error = document.getElementById('password_error');
      var phone_error = document.getElementById('phone_error');
      var comment_error = document.getElementById('comment_error');

// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
 password.addEventListener('blur', passwordVerify, true);
      phone.addEventListener('blur', phoneVerify, true);
      comment.addEventListener)'blur', commentverify, true);

// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
    // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
    if (phone.value == ""){
        phone.style.border = "1px solid red";
        document.getElementById('phone_div').style.color = "red";
        phone_error.innerHTML = "Phone is required";
        return false;
    }
    if (isNaN(phone.value)){
            phone.style.border = "1px solid red";
        document.getElementById('phone_div').style.color = "red";
        phone_error.innerHTML = "Character other than number are not allowed";
        return false;
    }
    if (phone.value > 10){
              phone.style.border = "1px solid red";
        document.getElementById('phone_div').style.color = "red";
        phone_error.innerHTML = "Phone must not be greater than 10 (invalid)";
        return false;
    }
    if (comment.length > 80){
        comment.style.border = "1px solid red";
        document.getElementById('comment_div').style.color= "red";
        comment_error.textContent= "Comment must not exceed 80 letters. Space and punctuation marks counts.";
        return false;
    }
  
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
    function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
        }
        function phoneVerify(){
                if (phone.value == ""){
        phone.style.border = "1px solid #5e6e66";
        document.getElementById('phone_div').style.color = "#5e6e66";
        phone_error.innerHTML = "";
        return true;
    }
                          if (phone.value < 10){
        phone.style.border = "1px solid #5e6e66";
        document.getElementById('phone_div').style.color = "#5e6e66";
        phone_error.innerHTML = "";
        return true;
    }
                                      if (x === false){
        phone.style.border = "1px solid #5e6e66";
        document.getElementById('phone_div').style.color = "#5e6e66";
        phone_error.innerHTML = "";
        return true;
    }
            if (comment.length < 80){
                    comment.style.border = "1px solid #5e6e66";
        document.getElementById('comment_div').style.color = "#5e6e66";
        comment_error.innerHTML = "";
        return true;
            }
        }


}
    </script>
 
        <h4>coded by <a href="http://drh2so4.ga/" target="_blank">DR.H2SO4</a></h4>

</body>
</html>