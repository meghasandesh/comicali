var comicName;
var comicInfo;
var dateObj, year, month, day;
var dayDecrement = 86400;

function zeroFormat (d) {
	//prepend a zero to any single digit string so that we can make the query correctly for the comic strip
	return ( d.toString().length == 1 ? ("0" + "" + d ) : d );
}

function displayAllComics(comicData) {
	var currentStrips = new Array();
	for(var i=0;i<comicData.length;i++) {
		currentStrips[i] = comicData[i].latestStrip;
	}
	
	var comicSegment;
	var j=0;
	while (j<3) {
	comicSegment = $('<div/>').attr('class','carouselElement');
	for(var i=0;i<comicData.length;i++) {
		//comicSegment.append('<h3/>').html(month+"-"+day+"-"+year);
		var stripName;
		var comicStripURL, comicStrip;
		//var stripDatePieces = comicData[i].latestStripDate.split("-");
		//var stripDate = new Date(stripDatePieces[0],stripDatePieces[1],stripDatePieces[2]);
		var stripDate = new Date(comicData[i].latestStripDate);
		var dateToLoad = new Date(stripDate.getTime() - (dayDecrement*1000*j));
		switch(comicData[i].name) {
			case 'Mutts' : 
			comicStrip = zeroFormat(dateToLoad.getMonth()+1) + comicData[i].separator + zeroFormat(dateToLoad.getDate()) + comicData[i].separator + zeroFormat(dateToLoad.getFullYear()).toString().substr(2,3) + "." + comicData[i].fileFormat;
			comicStripURL = comicData[i].baseURL + '/' + comicStrip;
			break;
			
			case 'Tundra':
			comicStrip = zeroFormat(dateToLoad.getMonth()+1) + comicData[i].separator + zeroFormat(dateToLoad.getDate()) + comicData[i].separator + zeroFormat(dateToLoad.getFullYear()).toString().substr(2,3) + "." + comicData[i].fileFormat;
			comicStripURL = comicData[i].baseURL + '/' + comicStrip;
			break;
			
			case 'Mega Tokyo':
			comicStrip = (comicData[i].latestStrip*1 - j) + "." + comicData[i].fileFormat;
			comicStripURL = comicData[i].baseURL + '/' + comicStrip;
			break;
			
			case 'Sin Fest':
			comicStrip = zeroFormat(dateToLoad.getFullYear()) + comicData[i].separator + zeroFormat(dateToLoad.getMonth()+1) + comicData[i].separator + zeroFormat(dateToLoad.getDate()) + "." + comicData[i].fileFormat;
			comicStripURL = comicData[i].baseURL + '/' + comicStrip;
			break;
			
			case 'PhD Comics':
			comicStrip = zeroFormat(dateToLoad.getFullYear()) + comicData[i].separator + zeroFormat(dateToLoad.getMonth()+1) + comicData[i].separator + zeroFormat(dateToLoad.getDate()) + "." + comicData[i].fileFormat;
			comicStripURL = comicData[i].baseURL + '/' + comicStrip;
			break;
			
			default: continue;
			break;
		}
		
		var img = new Image();
		img.src = comicStripURL;
		
		$(img).load(function(){
		
			var stripContainer = $('<div/>').attr('class','comicStrip').append(this);
			comicSegment.append(stripContainer);
		});
	
	}
	
	$('#comicCarousel').append(comicSegment);
	
  }
}

function displayComic() {
	var baseURL = comicInfo.baseURL;
	var format = comicInfo.format;
	var fileFormat = comicInfo.fileFormat;
	var separator = comicInfo.separator;
	var link = comicInfo.link;
	
	var comicStrip;
	
	var comicStripURL;
	
	switch(format) {
	
		case "ymd": 
		comicStrip = zeroFormat(year) + separator + zeroFormat(month) + separator + zeroFormat(day) + "." + fileFormat;
		break;
		
		case "mdyy":
		comicStrip = zeroFormat(month) + separator + zeroFormat(day) + separator + zeroFormat(year).toString().substr(2,3) + "." + fileFormat;
		break;
	}
	
	switch(comicName) {
	
	case "Kevin and Kell": comicStripURL = baseURL + '/' + year + '/' + 'strips' + '/' + 'kk' + comicStrip;
		break;
	
	case "Tundra" :comicStripURL = baseURL + '/' + comicStrip;
		break;
	
	case "PhD Comics": comicStripURL = baseURL + '/' + zeroFormat(month) + separator + zeroFormat(day) + separator + zeroFormat(day) + 's.' + fileFormat;
		break;
	
	default: comicStripURL = baseURL + '/' + comicStrip;
		break;
	}
	
	$("#comic").append($('<img>').attr('src', comicStripURL));
	$('#comicName').attr('href', link);
}
  
$(document).ready(function(){
	dateObj = new Date();
	//construct date string to query for today's comic strip
	// have to add 1 to month to get correct calendar month
	year = dateObj.getFullYear();
	month = dateObj.getMonth() + 1;
	day = dateObj.getDate();
	
});