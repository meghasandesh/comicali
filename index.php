<!doctype html>
<html>
<head>
<title>Comicali - Off the Comic Beat</title>
<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/comics.js"></script>
<link rel="stylesheet/less" type="text/css" href="css/basestyle.less"/>
<script type="text/javascript" src="js/less.js"></script>
</head>
<body>
	<div id="comicCarousel">
		
	</div>
<script>
$(document).ready(function(){
	$.getJSON('getcomics.php',function(comicData){
		displayAllComics(comicData);
	});
});
</script>
</body>
</html>