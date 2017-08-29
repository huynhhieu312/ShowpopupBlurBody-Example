
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<?php include_once "js/jquery.php"; ?>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet"  />

</head>

<body>
<main>
<a  class="datruoc">bam nut</a>
</main>
<?php include_once("poppup/playyoutube/index.php");?>
<script>

$(function(){
	$(".che").hide();	
	$('.datruoc').click(function(){
		$('body').addClass("blur");
		$(".che").fadeIn(500);
		$(".hoancauclose").click(function(){		
				$(".che").fadeOut(500);
				$('body').removeClass("blur");
				return false;
			});
});
});
</script>
</body>
</html>