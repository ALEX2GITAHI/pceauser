<!DOCTYPE html>
<html>
<head>
  <title>Popup Message</title>
  <style>
    /* Styles for the popup */
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      z-index: 9999;
    }
    /* Styles for the close button */
    .close-btn {
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <button onclick="openPopup()">Open Popup</button>

  <div id="popup" class="popup">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <p>This is a popup message!</p>
  </div>

  <script>
    function openPopup() {
      document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
  </script>
</body>
</html>
