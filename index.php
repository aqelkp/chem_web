<?php 
	session_start();
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		echo "Click <a href=\"http://localhost/chem/api/logout.php\">here</a> to logout";
	}else{
		echo " <a href=\"http://localhost/chem/?page=register\">Login</a> ";
	}
?>
<html>
<head>
	<title>Chemclave'15</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<link rel="stylesheet" type="text/css" href="css/tabulous.css">
	<link rel="stylesheet" type="text/css" href="css/creativelink.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-git2.min.js"></script>
	<script type="text/javascript" src="js/jquery.webticker.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Converter.min.js"></script>
	<link href="https://google-code-prettify.googlecode.com/svn/loader/prettify.css" rel="stylesheet" type="text/css"/>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/prettify.js"></script>
	<script type="text/javascript" src="http://vanderlee.github.io/coverflow/jquery.coverflow.js"></script>
	<script src="http://vanderlee.github.io/coverflow/jquery.interpolate.js"></script>
	<script src="http://vanderlee.github.io/coverflow/jquery.mousewheel.js"></script>
	<script src="http://vanderlee.github.io/coverflow/jquery.touchSwipe.min.js"></script>
	<script src="http://vanderlee.github.io/coverflow/reflection.js"></script>
	<script type="text/javascript" src="http://git.aaronlumsden.com/tabulous.js/js/tabulous.js"></script>
	<script type="text/javascript" src="http://tympanus.net/Blueprints/VerticalTimeline/js/modernizr.custom.js"></script>
	<script type="text/javascript">
		// The following example creates a marker in Stockholm, Sweden
		// using a DROP animation. Clicking on the marker will toggle
		// the animation between a BOUNCE animation and no animation.

		var chemclave = new google.maps.LatLng(12.990247, 80.230844);
		var marker;
		var map;

		function initialize() {
		  var mapOptions = {
		    zoom: 17,
		    center: chemclave
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		          mapOptions);

		  marker = new google.maps.Marker({
		    map:map,
		    draggable:true,
		    animation: google.maps.Animation.DROP,
		    position: chemclave
		  });
		  google.maps.event.addListener(marker, 'click', toggleBounce);
		}

		function toggleBounce() {

		  if (marker.getAnimation() != null) {
		    marker.setAnimation(null);
		  } else {
		    marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<?php include('base/nav.php') ?>
<?php 
	switch($_GET['page']){
		case 'events':
			include('pages/events.php');
			break;
		case 'timeline':
			include('pages/timeline.php');
			break;
		case 'people':
			include('pages/people.php');
			break;
		case 'register':
			include('pages/register.php');
			break;
		case 'spons':
			include('pages/spons.php');
			break;
		case 'contact':
			include('pages/contact.php');
			break;
		default:
			include('pages/home.php');
	}
 ?>
<?php include('base/footer.php') ?>
</body>
</html>