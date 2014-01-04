<?php
require_once('dbconnect.php');
require_once('functions.php');
$res = mysql_query('SELECT * FROM `comics`', $conn);
$comics = array();
//echo mysql_num_rows($res);
$currentDate = getdate();
if($res) {
	while($row = mysql_fetch_assoc($res)) {
		switch($row['name']) {
			case 'Mutts':
			if(getimagesize($row['baseURL'].'/'.zeroFormat($currentDate['mon']).zeroFormat($currentDate['mday']).substr($currentDate['year'],2,3).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'Mutts - '.$row['baseURL'].'/'.zeroFormat($currentDate['mon']).zeroFormat($currentDate['mday']).substr($currentDate['year'],2,3).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Tundra':
			if(getimagesize($row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'Tundra - '.$row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Dinosaur Comics':
			if(getimagesize($row['baseURL'].'/'.'comics2-'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'DC - '.$row['baseURL'].'/'.'comics2-'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'SMBC Comics':
			if(getimagesize($row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'SMBC - '.$row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Buttercup Festival':
			if(getimagesize($row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'BF - '.$row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Questionable Content':
			if(getimagesize($row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'QC - '.$row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Girl Genius':
			if(getimagesize($row['baseURL'].'/'.'ggmain'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'a.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'GC - '.$row['baseURL'].'/'.'ggmain'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'a.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Kevin and Kell':
			if(getimagesize($row['baseURL'].'/'.$currentDate['year'].'strips'.'/'.'kk'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'KK - '.$row['baseURL'].'/'.'kk'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Mega Tokyo':
			if(getimagesize($row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'MT - '.$row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Red Meat':
			if(getimagesize($row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'/index-1.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'RM - '.$row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'/index-1.'.$row['fileFormat'].'<br>';
			break;
			
			case 'PVP':
			if(getimagesize($row['baseURL'].'/'.'pvp'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'PVP - '.$row['baseURL'].'/'.'pvp'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Another Videogame Webcomic':
			if(getimagesize($row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'AVW - '.$row['baseURL'].'/'.((int)$row['latestStrip']+1).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'Sin Fest':
			if(getimagesize($row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'SF - '.$row['baseURL'].'/'.$currentDate['year'].$row['separator'].zeroFormat($currentDate['mon']).$row['separator'].zeroFormat($currentDate['mday']).'.'.$row['fileFormat'].'<br>';
			break;
			
			case 'PhD Comics':
			if(getimagesize($row['baseURL'].'/'.'phd'.zeroFormat($currentDate['mon']).zeroFormat($currentDate['mday']).substr($currentDate['year'],2,3).'s.'.$row['fileFormat'])) {
				echo 'true';
			}
			echo 'PhD - '.$row['baseURL'].'/'.'phd'.zeroFormat($currentDate['mon']).zeroFormat($currentDate['mday']).substr($currentDate['year'],2,3).'s.'.$row['fileFormat'].'<br>';
			break;
			
			default:
			break;
		}
		
	}
	//echo json_encode($comics);
}
?>