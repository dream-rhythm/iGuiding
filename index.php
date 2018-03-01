<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-TW">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-TW">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>登入</title>
	<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://nicky.esy.es/newbaby/wp-includes/css/dashicons.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='http://nicky.esy.es/newbaby/wp-includes/css/buttons.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='http://nicky.esy.es/newbaby/wp-admin/css/forms.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='http://nicky.esy.es/newbaby/wp-admin/css/l10n.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='http://nicky.esy.es/newbaby/wp-admin/css/login.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpclef-login-css'  href='http://nicky.esy.es/newbaby/wp-content/plugins/wpclef/assets/dist/css/login.min.css?ver=2.5.4' type='text/css' media='all' />
<script type='text/javascript' src='http://nicky.esy.es/newbaby/wp-admin/load-scripts.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate&amp;ver=4.5.2'></script>
<meta name='robots' content='noindex,follow' />
	</head>
	<body class="login login-action-login wp-core-ui  locale-zh-tw clef-login-form clef-login-form-embed">
	<div id="login">
	<img src='img/LauncherIcon.png' width='60px' height='60px'><font size="6">iGuiding</font>
	
<form name="form" id="loginform" action="connect.php" method="post">
	<p>
		<label for="user_login">Username or Email<br />
		<input type="text" name="id" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密碼<br />
		<input type="password" name="pw" id="user_pass" class="input" value="" size="20" /></label>
	</p>
	<div class="clef-login-container">
    <div class="clef-button-container">
       <div class="clef-embed-container">
</div>
<script data-cfasync="false" type='text/javascript'>
    if (typeof(ClefButton.initialize) === "function") {
        var buttons = document.querySelectorAll('.clef-button-to-render'),
            renderedButtons = [];
        for (var i = 0; i < buttons.length; i++) renderedButtons.push(ClefButton.initialize({ el: buttons[i] }));
    } else {
        var scripts = document.getElementsByTagName('script'),
            currentScript = scripts[scripts.length - 1],
            el = currentScript.previousElementSibling,
            button = button = new ClefButton({el: el});
        button.render();
    }
</script>    </div>
    

        <a class="close-overlay overlay-text" href="?clefup=true">log in with a password</a>
    
    <div class="overlay-info closed">
        <div class="open">?</div>
    </div>

    
</div>

	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 記住我</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登入" />
		<input type="hidden" name="redirect_to" value="http://nicky.esy.es/newbaby/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="http://nicky.esy.es/newbaby/wp-login.php?action=lostpassword">忘了密碼？</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	</div>

	
	<script type='text/javascript'>
/* <![CDATA[ */
var clefTranslations = {"messages":{"error":{"connect":"There was a problem automatically connecting your Clef account: <%= error %>. Please refresh and try again.","create":"There was a problem creating a new Clef application for your WordPress site: <%= error %>. Please refresh and try again. If the issue, persists, visit <a href='http:\/\/support.getclef.com' target='_blank'>support.getclef.com<\/a> to get help.","invite":"There was a problem sending invites: <%= error %>.","generic":"Something wrong, please refresh and try again.","disconnect":"There was a problem disconnecting your Clef account: <%= error %>."},"success":{"connect":"You've successfully connected your account with Clef","configured":"You're all set up!","disconnect":"Successfully disconnected Clef account."},"saving":"Settings are being saved. Are you sure you want to navigate away?"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://nicky.esy.es/newbaby/wp-content/plugins/wpclef/assets/dist/js/login.min.js?ver=2.5.4'></script>
	<div class="clear"></div>
	</body>
	</html>