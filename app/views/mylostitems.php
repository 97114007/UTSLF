<!DOCTYPE html>
<html lang="en">

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
		<header>
		<div class="currentLostItems">
			<div class="blueheader">
 				<a href="login.php"><img id="returnimg" src="../../public/images/arrow_back_white.png" alt="Return"></a>
					<span>My Lost Items</span>
				<img id="logo" src="../../public/images/logo.png" alt="logo">
			</div>
		</header>

			<!--<div class="currentlostItemsBody">--> 
			<div class="main"><!--This div is for all of the lost itemss -->

				<div class="lostitemcard"> <!--This div is for each of the individiual lost item -->
					<div class="cardInfo">
						<img id="cardImg" src="../../public/images/iphonelogo.png" alt="logo">
						<p class="nospace"><strong>Insert Type Here</strong></p>
						<p class="nospace">Date Lost:</p>
						<p class="nospace">Status:</p>
					</div>
						<hr>
					<div id="individualCurrentLostItemBodyBtn">
					  <div class="inner"><a href="viewlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">VIEW</button></a></div>
					  <div class="inner"><a href="editlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">EDIT</button></a></div>
						<div class="inner"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">ARCHIVE</button></div>
					</div>
				</div>
				<div class="lostitemcard"> <!--This div is for each of the individiual lost item -->
					<div class="cardInfo">
						<img id="cardImg" src="../../public/images/iphonelogo.png" alt="logo">
						<p class="nospace"><strong>Insert Type Here</strong></p>
						<p class="nospace">Date Lost:</p>
						<p class="nospace">Status:</p>
					</div>
						<hr>
						<div id="individualCurrentLostItemBodyBtn">
					  <div class="inner"><a href="viewlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">VIEW</button></a></div>
					  <div class="inner"><a href="editlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">EDIT</button></a></div>
						<div class="inner"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">ARCHIVE</button></div>
					</div>
				</div>

				<div class="lostitemcard"> <!--This div is for each of the individiual lost item -->
					<div class="cardInfo">
						<img id="cardImg" src="../../public/images/iphonelogo.png" alt="logo">
						<p class="nospace"><strong>Insert Type Here</strong></p>
						<p class="nospace">Date Lost:</p>
						<p class="nospace">Status:</p>
					</div>
						<hr>
						<div id="individualCurrentLostItemBodyBtn">
					  <div class="inner"><a href="viewlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">VIEW</button></a></div>
					  <div class="inner"><a href="editlostitem.php"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">EDIT</button></a></div>
						<div class="inner"><button type="individualCurrentLostItemBodyBtn" id="cardBtn">ARCHIVE</button></div>
					</div>
				</div>

				<div class="btndiv">
		     	<a href="lostitemform.php">
                    <button id="btn">
                      New Form
                    </button>
                </a>
		     	</div>

			</div>

		     
		</div>
	</body>


</html>
