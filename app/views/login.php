<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="UTS Lost and Found web app">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0">
		<title>UTS Lost and Found - release 1</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="../../public/css/style.css"> <!--link to the main css stylesheet-->
	</head>

<body>
	<div class="logincontainer">

	<img id="loginlogo" src="../../public/images/bLogo.png">

		<form action="login.php">
			Username:<br>
			<input type="text" name="username"><br>
			Password:<br>
			<input type="password" name="password"><br><br>
			Admin Login: 
			<label class="switch">
			  <input type="checkbox">
			  <div class="slider round"></div>
			</label>
		</form>

		<div class="loginbuttoncontainer">
			<a href="mylostitems.php">
	                    <button id="btn">
	                      Login
	                    </button>
	        </a>
	    </div>
		

		<div class="loginback">
			<a href="index.php"><img id="loginbackbtn" src="../../public/images/arrow_back.png" alt="Return"></a>
		</div>
	</div>
</body>
</html>