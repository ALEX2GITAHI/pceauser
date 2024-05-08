<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stle.css">
  <title>Document</title>
  <script>
    var ScrollMsg = "PCEA Mukinyi System - "
    var CharacterPosition = 0;
    function StartScrolling() {
      document.title = ScrollMsg.substring(CharacterPosition, ScrollMsg.length) +
        ScrollMsg.substring(0, CharacterPosition);
      CharacterPosition++;
      if (CharacterPosition > ScrollMsg.length) CharacterPosition = 0;
      window.setTimeout("StartScrolling()", 150);
    }
    StartScrolling();
    // -->
  </script>
  <?php
  //require_once('main/auth.php');
  ?>
  <link href="assets/pcealog.png" rel="shortcut icon">
  <link rel="stylesheet" href="login.css">
  <script src="logininfo.js"></script>
</head>

<body>
  <div class="imgcontainer">
    <img src="main/IMAGES/logopcea.png" alt="Avatar" class="avatar" width="25px" height="120px">
    <form action="main/savemember.php" method="post" enctype="multipart/form-data"> <br>
      <div style="margin-top: -19px; margin-bottom: 21px;">
        <center>
          <h4><i class="icon-edit icon-large"></i>REGISTER</h4>
        </center>
        <hr>
        <center>
          <div id="ac">
            <input type="hidden" name="memi" value="<?php echo $id; ?>" />
            <span>First Name : </span><input type="text" style="width:265px; height:30px;" name="first_name"
              Required /><br>
            <span>Middle Name : </span><input type="text" style="width:265px; height:30px;" name="middle_name"
              Required /><br>
            <span>Last Name : </span><input type="text" style="width:265px; height:30px;" name="last_name"
              Required /><br>
            <span>MEMBERSHIP ID: </span><input type="text" style="width:265px; height:30px;"
              value="MC20-<?php $prefix = md5(time() * rand(1, 2));
              echo strip_tags(substr($prefix, 0, 4)); ?>"
              name="membership_id" readonly Required /><br> <i><b>Make Sure You Remember your Membership ID</b></i> <br>
            <span>Password : </span><input type="password" style="width:265px; height:30px;" id="pswd2" name="password1"
              Required /><br>
            <input type="checkbox" onclick="Shossword()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">Show
            Password <br>
            <script>
              function Shossword() {
                var x = document.getElementById("pswd1");
                var x = document.getElementById("pswd2");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }

            </script>
          </div>
          <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
          <span> Confirm Password: </span><input type="password" style="width:265px; height:30px;" id="pswd1"
            name="password2" Required /><br>
          <span>Phone: </span><input type="text" style="width:265px; height:30px;" name="phone_number" required /><br>
          <span>Gender: </span>
          <select name="gender" style="width:265px; height:30px; margin-left:-5px;">
            <option>Female</option>
            <option>Male</option>
          </select><br><br>
          <span>D.O.B: </span><input type="date" style="width:265px; height:30px;" name="DOB" required /><br><br>
          <span>District: </span>
          <select name="district_name" id="district_name" style="width:265px; height:30px; margin-left:-5px;">
            <option>WENDO</option>
            <option>KIONEKI</option>
            <option>WITIKIO</option>
            <option>GIKENO</option>
            <option>MUNYAKA</option>
            <option>MWANGAZA</option>
            <option>HIGHWAY</option>
            <option>IMMANUEL</option>
            <option>EBENEZER</option>
            <option>BETHSAIDA</option>
            <option>UTUGI</option>
          </select><br><br>
          <span>Passport:</span><input type="file" name="file" id="file" required><br>
          <div>
            <button class="btn btn-success btn-block btn-large" style="width:267px;"><i
                class="icon icon-save icon-large" onclick="validateForm()"></i>Register</button>
            Already having an account?
            <a href="index.php">
              Login Here!
          </div>
      </div>
    </form>
    </center>
  </div>
  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div>
  <script>
    var myInput = document.getElementById("pswd2");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
      document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
      document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Validate length
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>
  <style>
    /* Style all input fields */

    /* The message box is shown when the user clicks on the password field */
    #message {
      display: none;
      background: #f1f1f1;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
    }

    #message p {
      padding: 10px 35px;
      font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
      color: green;
    }

    .valid:before {
      position: relative;
      left: -35px;
      content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
      color: red;
    }

    .invalid:before {
      position: relative;
      left: -35px;
      content: "✖";
    }
  </style>
</body>

</html>