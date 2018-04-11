
<!DOCTYPE html>
<html>
<head>
	<title>A design Page</title>
<style type="text/css">
html, body{
	height: 100%;
}

body{

	background-color: #06c;
	background-image: url(image/fig.jpg);
	background-size: cover;
	background-blend-mode: soft light; 
}
*{
	margin: 0;
	padding: 0;
}
	.fig{
		width: 600px;
		height: 300px;
		 margin: auto;;
		 position: absolute;
		 top: 0px;
		 bottom: 0px;
		 right:0px;
		 left: 0px;

	}
	.figma{
		display: block;
		text-align: center;
		color:white;
		font-size: 30pt;
		font-family: big John;
		border:1px, white, solid;
	}
	.figs{
		display: block;;
		margin-top: 15px;
		text-align: center;
		color: white;
		font-size:14pt
		font-family: serif;
		border:1px, white, solid;
		font-size: 75px;
	}

</style>

</head>
<body>
	<div class="fig">
		<span class="figma">This is my first time using figma and I am enjoying it and the time is 1:41pm</span>
		<span class="figs"><?php echo date("jS \of F Y h:i:s A"); ?></span>
	</div>

</body>
</html>