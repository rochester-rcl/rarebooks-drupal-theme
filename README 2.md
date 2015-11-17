> This project is currently under development.

# RCL Drupal Theme
A custom drupal theme created for the River Campus libraries web site.

### Table of Contents
1. Installation Instructions (Below)
2. [Module Installation](https://github.com/rochester-rcl/rcl_drupal_theme/tree/master/install_modules)
3. [Templates](https://github.com/rochester-rcl/rcl_drupal_theme/tree/master/templates)
4. [CSS](https://github.com/rochester-rcl/rcl_drupal_theme/tree/master/css)


## Requirements
Before you install please make sure your Drupal instance meets the following requirements.

- [Bootstrap](https://drupal.org/project/bootstrap) 7.x-2.0 or 7.x-3.0 (base-theme must be enabled).
- [jQuery Update](https://drupal.org/project/jquery_update) jQuery Update - 7.x-2.4 or higher. Bootstrap 2 requires a minimum jQuery version of 1.7 or higher, while Bootstrap 3 requires jQuery 1.9+

### Installation
Install this theme as you would any other Drupal theme.

1. Move the **rcl_drupal_theme** folder into **sites/all/themes**
2. Unzip the contents of the **install_modules** folder into  **sites/all/modules folder** > then remove it from the theme folder. *The install_modules folder is just helpful grouping of modules specific to this theme. See the install_modules README for more information about module installs*
3. Download the [Bootstrap 3](https://drupal.org/project/bootstrap) theme and unzip into **sites/all/themes**.
4. In the Drupal admin go to **Apperance** > then find the **Bootstrap 3** theme > enable it but **DO NOT** set it as default.
5. In the Drupal admin go to **Apperance** > then find the **RCL Theme** > enable it & set as default.
6. [Install Modules](https://github.com/rochester-rcl/rcl_drupal_theme/tree/master/install_modules)


##### Drupal Admin Configurations
You must make these adjustments in drupal to insure proper display or the theme and it's content types.

1. If you have installed the suggested [Administration menu](https://www.drupal.org/project/admin_menu) as mentioned in the [install_modules](https://github.com/rochester-rcl/rcl_drupal_theme/tree/master/install_modules) folder, you may see an issue with it randomly disappearing. You can fix that by going to **admin/config/administration/admin_menu** > unchecking **Cache menu in client-side browser** (Under *performance*)

2. **Remove unnecessary default blocks.** Set all blocks aside from **Content[Content]** to **None**. This prevents the grid from being out of alignment. If you see the content area slightly shifted to one side, this is why.

3. Default logo. Got to **admin/appearance/settings/rcl_drupal_theme** and uncheck **Use default logo**. This will prevent the default broken logo. *Note: This is a known bug and will be fixed. So if you don't see a broken logo image next to the RCL logo then we need to update this step.*

### Known Issues
- Admin editing via mobile is poor but that is a drupal issue.



### Drupal Configuration Requirements
- After login trigger must be in place to take them to "/staff-login" or the page they were intending to be sent prior to login state. (*Looking into possible modules for this as well.*)

### Other
Temporary place for uncategorized items

- PHP code for printing page title:
```
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

```


- **Navigation PHP**: Place this into the page.tpl.php file to generate menu. Currently working on a new elseif statment that allows the user to override the default menu with the dynamic drupal one. Will remove this when that is complete.
```
<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
  <div class="navbar-collapse collapse navbar-right">
    <nav role="navigation">
      <?php if (!empty($primary_nav)): ?>
        <?php print render($primary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($secondary_nav)): ?>
        <?php print render($secondary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']); ?>
      <?php endif; ?>
    </nav>
  </div>
<?php endif; ?>
```
