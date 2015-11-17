<?php


/**
 * @file
 * -----------------------------
 *  EVENT CONTENT TYPE PAGE TEMPLATE
 * -----------------------------
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


<!-- Print Header -->
<div class="container print print-header">
  <div class="print-rcl-logo-container">
   <img class="print-rcl-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-rcl-print.png" />
  </div>
   <div class="print-uofr-logo-container">
     <img class="print-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-uofr-print.png" />
   </div>
</div>

<!-- UofR bar -->
<div class="uofrbar noprint">
 <div class="container">
   <!-- UofR Logo -->
   <a class="" href="#">
     <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-uofr.png" />
   </a>
 </div>
</div>
<!-- RCL Header / Nav  -->
<header id="navbar" role="banner" class="navbar navbar-default noprint">
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
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img class="" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme');?>/images/logo-rcl-blue.png" />
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
        <li><a href="http://www.library.rochester.edu/files/chat/chat.php" data-chat-status="<?php print $chat_status;?>" class="chat-toggle"></a></li>
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
<div class="navbar-spacer noprint"></div>

<!-- Section Sub Nav -->
<?php if(!empty($node->field_section['und'][0]['taxonomy_term'])): ?>
<div class="section-header noprint">
  <div class="container">
    <div class="page-title-header">
    <?php print $node->field_section['und'][0]['taxonomy_term']->name ?>
    </div>
    <!-- Nav links -->
    <div class="menu-container">
      <ul class="sub-nav">
        <?php print render($page['section_header']);?>
      </ul>
    </div>
  </div>
</div>
<?php endif;  ?>



<!--======= /HEADER  ========-->




    <section<?php print $content_column_class; ?>>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix);?>
      <!-- Title removed. Printed on the node tpl -->
      <?php print render($title_suffix); ?>
      <!-- ALERT MESSAGES -->
      <div class="messages-overlay">
      <?php print $messages; ?>
      </div>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
    <section>
      <?php if (!empty($tabs)): ?>
        <div class="container tab-container">
        <?php print render($tabs); ?>
      </div>
      <?php endif; ?>
    </section>
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>




    <!--===== FOOTER =====-->
    <footer class="footer container">
      <div class="copyright">Copyright © 1998-2015 University of Rochester Libraries. All Rights Reserved</div>
      <div class="social-icons">
        <a href="https://www.facebook.com/rivercampuslibraries"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/rclibraries"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/user/RCLibraries"><i class="fa fa-youtube"></i></a>
        <a href="https://www-flickr-com.pc181.lib.rochester.edu/photos/carlsonlibrary/"><i class="fa fa-flickr"></i></a>
      </div>
      <?php print render($page['footer']); ?>
    </footer>


<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/chat.js'; ?>"></script>
<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/nav.js'; ?>"></script>
