<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

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
  <link href="main/IMAGES/pcealog.png" rel="shortcut icon">
  <link rel="stylesheet" href="login.css">
  <script src="logininfo.js"></script>
</head>
<body>
  <div class="container">
    <div class="signup-form-container">
      <div class="signup-form">
        <form action="main/savemember.php" method="post" enctype="multipart/form-data">
          <h4>REGISTER</h4>  
          <div id="ac">
            <input type="hidden" name="memi" value="<?php echo $id; ?>" />
            <span>First Name : </span><input type="text" name="first_name" required><br>
            <span>Middle Name : </span><input type="text" name="middle_name" required><br>
            <span>Last Name : </span><input type="text" name="last_name" required><br>
            <span>MEMBERSHIP ID: </span><input type="text" value="MC20-<?php $prefix = md5(time() * rand(1, 2));
            echo strip_tags(substr($prefix, 0, 4)); ?>" name="membership_id" readonly required><br>
            <i><b>Make Sure You Remember your Membership ID</b></i> <br>
            <span>Password : </span><input type="password" id="pswd2" name="password1" required>
          </div>
          <!-- Modal -->
          <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
            </div>
          </div>
          <input type="checkbox" onclick="ShowPassword()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">Show
          Password <br><br>
          <span>Confirm Password: </span><input type="password" id="pswd1" name="password2" required><br>
          <span>Phone: </span><input type="text" name="phone_number" required><br>
          <span>Gender: </span>
          <select name="gender" required>
            <option>Female</option>
            <option>Male</option>
          </select><br><br>
          <span>D.O.B: </span><input type="date" name="DOB" required><br><br>
          <span>District: </span>
          <select name="district_name" id="district_name" required>
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
          <button class="btn btn-success btn-large" onclick="validateForm()">Register</button> <br><br>
          Already having an account? <a href="index.php">Login Here!</a>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the password input field
    var passwordInput = document.getElementById("pswd2");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user starts typing in the password field, open the modal
    passwordInput.onkeyup = function () {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    var myInput = document.getElementById("pswd2");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    myInput.onfocus = function () {
      modal.style.display = "block";
    }

    myInput.onblur = function () {
      modal.style.display = "none";
    }

    myInput.onkeyup = function () {
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>
</body>
</html>