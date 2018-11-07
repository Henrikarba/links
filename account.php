<html>
<head>
  <link rel="stylesheet" type="text/css" href="design.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <div>
            <?php include'navbar.php'; ?>
        </div>
    <div class="row">
        <div id="left" class="col">
            <img src="image2.jpg" class="image_if" id="img">
        </div>
        <div id="right" class="col">
            <h1 class="username">Username</h1>
            <input type="button" class="change" id="user" value="Change username"></input>
         <br>
         <br>
            <input type="button" class="change" id="pass"value="Change password"></input>
         <br>
         <br>
            <textarea rows="10" placeholder="Type description here" id="info"></textarea>
        </div>
    </div>
</body>
</html>
