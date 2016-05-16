<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

$email=Format::input($_POST['luser']?:$_GET['e']);
$passwd=Format::input($_POST['lpasswd']?:$_GET['t']);

$content = Page::lookupByType('banner-client');

if ($content) {
    list($title, $body) = $ost->replaceTemplateVariables(
        array($content->getName(), $content->getBody()));
} else {
    $title = __('Sign In');
    $body = __('To better serve you, we encourage our clients to register for an account and verify the email address we have on record.');
}

?>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
      <div class="mdl-layout-header">
        <div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button"><i class="material-icons"></i></div>
        <div class="mdl-layout__header-row">
          <span class="title mdl-layout-title">
            <img class="logo-image" src="<?php echo LAWATCH_WORKS_ASSETS_PATH; ?>images/wwLogo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="header-spacer mdl-layout-spacer"></div>
          <!-- Navigation -->
          <div class="navigation-container">
            <nav>
              <ul>
                <li>
                  <a href="#">Item 1</a>
                </li>
                <li>
                  <a href="#">Item 2</a>
                </li>
                <li>
                  <a href="#">Item 3</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="mdl-layout__drawer">
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Item 1</a>
            <a class="mdl-navigation__link" href="">Item 2</a>
            <a class="mdl-navigation__link" href="">Item 3</a>
          </nav>
        </div>
      </div>
      
      	<main class="mdl-layout__content">
      		<div class="mdl-card">
      			<div class="mdl-card__title"> 
      				<h2 class="mdl-card__title-text">Sign In</h2>
      			</div>
      	  		<div class="mdl-card__supporting-text">
      				<form action="login.php" method="post" id="clientLogin">
      				<?php csrf_token(); ?>
      					<div class="mdl-textfield mdl-js-textfield">
                  <label class="mdl-textfield__label" for="username">Email or Username</label>
      						<input class="mdl-textfield__input" type="text" id="username" value="<?php echo $email; ?>" />
      					</div>
      					<div class="mdl-textfield mdl-js-textfield">
                  <label class="mdl-textfield__label" for="userpass">Password</label>
      						<input class="mdl-textfield__input" type="password" id="userpass" value="<?php echo $passwd; ?>" />
      					</div>
      				
      			</div>
      			<div class="mdl-card">
      				<input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="<?php echo __('Sign In'); ?>" />
      			</div>
      			</form>
      		</div>
      	</main>
        
        <footer class="mdl-mega-footer">
          <div class="footer">
        </div>
        </footer>
      </div>
    <script type="text/javascript" src="slick/slick.min.js"></script>

