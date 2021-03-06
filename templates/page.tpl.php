<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<!--=========  HEADER   ==========-->
<!-- Chat Online/Offline Toggle -->
<?php
  $date = new DateTime();
  $timestamp = $date->getTimestamp();
  $chat_status =  file_get_contents('http://us.libraryh3lp.com/presence/jid/urhomepage1/chat.libraryh3lp.com/text?'. $timestamp);
?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Print Header -->
<div class="container print-header print">
  <div class="print-rcl-logo-container">
   <img class="print-rcl-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-rcl-print.png" />
  </div>
   <div class="print-uofr-logo-container">
     <img class="print-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-uofr-print.png" />
   </div>
</div>


<!-- UofR bar -->
<div class="noprint uofrbar">
 <div class="container">
   <!-- UofR Logo -->
   <a class="" href="#">
     <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-uofr.png" />
   </a>
 </div>
</div>
<!-- RCL Header / Nav  -->
<header id="navbar" role="banner" class="noprint navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- If user uploads a custom logo-->
      <?php if ($logo): ?>
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
      <!-- If user does not upload a custom logo - print default logo -->
      <?php if (!empty($site_name)): ?>
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-rcl-blue.png" />
      </a>
      <?php endif; ?>
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Nav links -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://catalog.lib.rochester.edu/vwebv/myAccount">My Accounts</a></li>
        <li><a href="http://www.library.rochester.edu/files/chat/chat.php" onclick="window.open(this.href, 'mywindowtitle','width=300,height=500'); return false" target="_blank" data-chat-status="<?php print $chat_status;?>" class="chat-toggle"></a></li>
        <li><a href="http://www.library.rochester.edu/contact-us">Contact</a></li>
        <li><a href="http://www.library.rochester.edu/giving">Giving</a></li>
        <li>
        <!-- Nav Search box -->
          <form class="navbar-form navbar-left" name="sitesearch" action="http://www.library.rochester.edu/site-search" method="get">
            <div class="form-group">
              <input class="form-control navbar-search-grow" type="text" name="search"  placeholder="Search" title="Seach the Library website">
              </div>
          </form>
          <!-- <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button> -->
        </form>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class="navbar-spacer"></div>

<div class="section-header">
  <div class="container">
    <div class="page-title-header">
      <a href="http://www.library.rochester.edu/rbscp">Rare Books, Special Collections and Preservation</a>
    </div>
    <!-- Nav links -->
    <div class="menu-container noprint">
      <ul class="sub-nav">
        <?php print render($page['section_header']);?>
      </ul>
    </div>
  </div>
</div>

<!--======= /HEADER  ========-->






<div class="container">
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead">Site slogan</p>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

<!--===== TABS =====-->
    <?php if (!empty($tabs)): ?>
      <div class="noprint tab-container-edit-screens">
      <?php print render($tabs); ?>
    </div>
    <?php endif; ?>

<!-- Breadcrumb  -->
    <?php if (!empty($breadcrumb)): ?>
      <div class="site-breadcrumb noprint">
        <?php print render($breadcrumb); ?>
      </div>
    <?php endif; ?>

<!-- Page title  -->
      <?php if (!empty($title)): ?>
        <div class="page-title-wrapper">
          <h1 class="page-header basic-page-title"><?php print $title; ?></h1>
        </div>
      <?php endif; ?>

      <?php print render($title_suffix); ?>
      <?php print $messages; ?>

      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>


      <?php print render($page['content']); ?>



    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<div class="back-to-top">
  arrow
</div>

<!--===== FOOTER =====-->
<footer class="noprint footer">
  <div class="container">

    <!-- Right Side of Footer -->
      <div class="footer-right">
        <div class="address">
          <p>
            Rare Books Special Collections Preservation <br>
            Rush Rhees Library <br>
            Second Floor, Room 225 <br>
            755 Library Road <br>
            University of Rochester	<br>
            Rochester, NY 14627-0055 <br>
          </p>
          <p>
            Phone: (585) 275-4477 <br>
            Fax: (585) 273-1032 <br>
            <a href="mailto:rarebks@library.rochester.edu">rarebks@library.rochester.edu</a>
          </p>
        </div>
      </div>


    <!-- Left Side of Footer -->
    <div class="footer-left">
      <div class="social-icons">
        <a href="https://www.facebook.com/rivercampuslibraries"><i class="fa fa-facebook-square"></i></a>
        <a href="https://twitter.com/rclibraries"><i class="fa fa-twitter-square"></i></a>
        <a href="https://www.youtube.com/user/RCLibraries"><i class="fa fa-youtube-square"></i></a>
        <a href="https://www-flickr-com.pc181.lib.rochester.edu/photos/carlsonlibrary/"><i class="fa fa-flickr"></i></a>
      </div>
      <!-- Copyright  -->
      <div class="copyright">Copyright © 1998-2015. All Rights Reserved.<br>
        University of Rochester | River Campus Libraries <br>
        Rare Books, Special Collections and Preservation
      </div>
      <div class="footer-links">
        <?php print render($page['footer']); ?>
      </div>
    </div>



</div>

</footer>

<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/chat.js'; ?>"></script>
<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/nav.js'; ?>"></script>
