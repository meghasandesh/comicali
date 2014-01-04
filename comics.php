<!DOCTYPE html>
<html>
  <head>
    <title><?php if(isset($_GET['comic'])) { 
					echo $_GET['comic'].' - Comicali';
				}
				else {
					echo 'Comics - Comicali';
				}
	?></title>
	<script src="js/jquery-2.0.3.min.js"></script>
	<script src="comicInfo.js"></script>
  </head>
  <body>
	<header>
		<h1><a href="index.php">COMICALI</a></h1>
	</header>
	<h2><?php if(isset($_GET['comic'])) {
				echo '<a target="_blank" href="" id="comicName">'.$_GET['comic'].'</a>';
			}
			else {
				echo '<a target="_blank" href="" id="comicName">'.'Comics'.'</a>';
			}
	?></h2>
	<div id="comic">
		<?php
			
		?>
	</div>
	
	<footer>
	
	</footer>
  </body>
  <script src="js/comics.js"></script>
  <script>
	$(document).ready(function(){
		comicName = $('#comicName').html();
	
		if(comicName == 'Comics') {
			$.getJSON('getcomics.php',function(comicData){
				for(var i=0;i<comicData.length;i++) {
					var lastUpdated = comicData[i].lastUpdated;
					lastUpdated = lastUpdated.split(' ');
					//console.log(lastUpdated);
					//var updatedDate = lastUpdated[0].split('-');
					if(lastUpdated[0] == (year+"-"+month+"-"+day) ) {
						console.log('yes');
					}
					
				}
			});
		}
		else {
			$.getJSON('metadata/'+comicName+'.js', function(data) {
				comicInfo = data;
				 displayComic();
			});	
		}
	});
  </script>
</html>