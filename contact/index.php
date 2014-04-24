<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!doctype html>  

<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>contact</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/skeleton.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/styles.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/responsive.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/colour_tags.css" />
		<script type="text/javascript" src="../rw_common/themes/gallant/javascript.js"></script>
		<script type="text/javascript" src="../rw_common/themes/gallant/scripts/function.js"></script>
  		<script>RwSet={pathto:"../rw_common/themes/gallant/javascript.js",baseurl:"http://www.rehrehreh.com/"};</script>
  		<script type="text/javascript" src="../rw_common/themes/gallant/scripts/modernizr.min.js"></script>
  		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/header/logo.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/texture/header_dots.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/texture/footer_none.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/title_normal.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/title_league.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/slogan_italic.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/slogan_league.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/menu_verdana.css" />
		<script type="text/javascript" src="../rw_common/themes/gallant/scripts/sidebar/right.js"></script>
		<script type="text/javascript" src="../rw_common/themes/gallant/scripts/banner/collapse.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/headings_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/content_verdana.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/gallant/css/font/content_13px.css" />
		
		
		
	    
	    
	    
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<style>.subnavcontainer, .subnavcontainerDrop {display:none;}</style>
	<![endif]-->
	
	</head>
	<body>
	<header>
		
		<div class="container">
		<div class="sixteen columns over">
			<div id="socialIcons"></div>
			<nav><ul class="nojs"><li><a href="../index.html" rel="self">home</a></li><li><a href="../about/index.html" rel="self">about</a></li><li><a id="current" href="index.php" rel="self" class="current">contact</a></li></ul></nav>
			<div class="subnavcontainer"><ul class="nojs"><li><a href="../index.html" rel="self">home</a></li><li><a href="../about/index.html" rel="self">about</a></li><li><a id="current" href="index.php" rel="self" class="current">contact</a></li></ul></div>
			<a id="logo" href="http://www.rehrehreh.com/" title="Home"><img src="../rw_common/images/rehrehreh.png" width="300" height="115" alt="Site logo"/></a>
			<h1 id="title">rehrehreh</h1>
			<h2 id="slogan">adventures in macology</h2>
		</div>
		</div><!-- end container -->
	</header>
				<div class="subnavcontainerDrop">
					<div class="container"><ul class="nojs"><li><a href="../index.html" rel="self">home</a></li><li><a href="../about/index.html" rel="self">about</a></li><li><a id="current" href="index.php" rel="self" class="current">contact</a></li></ul></div><!-- end container -->
				</div>
		<div id="banner">
			<div class="container">
				<div id="featureImg">
					<img src="../resources/banner_1.jpg" alt="" class="scale-with-grid banner1" style="display:none">
					<img src="../resources/banner_2.jpg" alt="" class="scale-with-grid banner2" style="display:none">
					<img src="../resources/banner_3.jpg" alt="" class="scale-with-grid banner3" style="display:none">
					<img src="../resources/banner_4.jpg" alt="" class="scale-with-grid banner4" style="display:none">
					<img src="../resources/banner_5.jpg" alt="" class="scale-with-grid banner5" style="display:none">
					<img src="../resources/banner_6.jpg" alt="" class="scale-with-grid banner6" style="display:none">
					<img src="../resources/banner_7.jpg" alt="" class="scale-with-grid banner7" style="display:none">
					<img src="../resources/banner_8.jpg" alt="" class="scale-with-grid banner8" style="display:none">
					<div id="extraContainer1"></div> 
				</div><!-- end featureImg -->
			</div><!-- end container -->
		</div><!-- end banner -->
			<section>
			<div class="container">
						<div id="extraContainer2"></div>
						<div class="single twelve columns"  id="main" role="main">
							
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
						</div>		
					
					<div class="sidebar four columns offset-by-one">
					<aside>
						<span id="asideTitle"></span>
						<span class="social"><a href="http://www.linkedin.com/in/lachlanstewart">l</a></span><br /><span class="social"><a href="https://i7lp.integral7.com/durango/do/pr/prSearchResultDetail?ownername=apple&D036E966675C40A4F2781F98BD661AB9=CEE0AC17FEDDBD04288234D8664D14B8&3D6CBF60ADAE3C6C0D8E570165AD529C=FAF2E13124A7A540264C21BAA0D42782&basechannel=default&channel=apple">2</a></span><br /><span class="social"><a href="https://github.com/loceee">G</a></span>
						<div id="asidePlug"></div>
					</aside>
					</div>
			</div><!-- end container -->
			<div class="container">
			<div id="extraContainer3"></div>
					<div class="clear"></div>
			</div><!-- end container -->
			</section>
			<footer>
			<div class="container">
				<div id="extraContainer4"></div>
				<div id="breadcrumb"></div><div id="footerText">&copy; 2013 lachlan stewart <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":la";var _rwObsfuscatedHref3 = "ch@";var _rwObsfuscatedHref4 = "reh";var _rwObsfuscatedHref5 = "reh";var _rwObsfuscatedHref6 = "reh";var _rwObsfuscatedHref7 = ".co";var _rwObsfuscatedHref8 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></div>
			</div><!-- end container -->
		</footer>

	<!-- Start LiveStats -->
<script type="text/javascript">
  var GoSquared = {acct: "GSN-723403-W"};
  (function(w){
    function gs(){
      w._gstc_lt = +new Date;
      var d = document, g = d.createElement("script");
      g.type = "text/javascript";
      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(g, s);
    }
    w.addEventListener ? w.addEventListener("load", gs, false) : w.attachEvent("onload", gs);
  })(window);
</script><!-- End LiveStats -->
</body>
</html>