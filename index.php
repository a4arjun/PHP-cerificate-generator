<html>
	<head>
		<title>Certificate Generator</title>
		<style>
			body{
				background-color: #eee;
				color:#777;
				font-family: sans-serif;
				padding-top: 20px;
				padding-left: 10px
			}
			input[type=text]{
				width: 400px;
				height: 30px;
				border: 0px;
				border-radius: 5px;
				padding: 5px;
				box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
				margin-bottom: 10px;
			}
			p{
				line-height: 2;
			}
			input[type=text]:hover{
				box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
			}
			input[type=submit]{
				height: 30px;
				border: 1px solid #3acb37;
				border-radius: 3px;
				color: #fff;
				background: #22cb1d;
			}
			img{
				box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
			}
			img:hover{
				box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
			}
		</style>
	</head>
<body>
	<h1>Automatic Cerificate generator</h1>
	<p>Hi. You can generate unlimited certificates at ease by using this simple php script.To use, just enter your name in the input below and submit the form.</p>
	<form action="" method="post">
		<input type="text" name="text" placeholder="Enter your name"/><br/>
		<input type="submit" value="Generate"/>
	</form>
	<?php
		error_reporting(0);
		$in_text = $_POST['text'];
		$text = strip_tags($in_text);
		if ($_POST['text'] == '') {
			echo '
			<br/>
			<h2>This is how it looks like</h2>
			<img src="get.php?text=YourName" width="400px">';
		}
		else{
			echo '<br/>
			<h2>Certificate generated succeessfully</h2>';
			echo '<a href="get.php?text='.$text.'"><img src="get.php?text='.$text.'" width="400px"></a>';
		}
	?>
	<br/>
	<hr/>
	<center>Created by Arjun Venugopal</center>
</body>
