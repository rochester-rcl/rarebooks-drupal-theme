
# Install Files
These are custom configurations for modules, libraries, and features.




### Modules

##### Required Modules
- [Views](https://www.drupal.org/project/views)
Allows you to display dynamic content via the database.
- [Date](https://www.drupal.org/project/date) - Required for **Event** and **Article** content types.
- [Features](https://www.drupal.org/project/features) - Required for importing features such as custom content types.
- [Link](https://www.drupal.org/project/link)- Required for **Event** content type.
- [Context](https://www.drupal.org/project/context)


##### Suggested Modules
- [Module Filter](https://www.drupal.org/project/module_filter)
Helps you to filter and find you modules quickly.
- [Pathauto](https://www.drupal.org/project/pathauto) - The Pathauto module automatically generates URL/path aliases for various kinds of content (nodes, taxonomy terms, users) without requiring the user to manually specify the path alias.
- [Token](https://www.drupal.org/project/token) - Required by **Pathauto** module.
- [Backup and Migrate](https://www.drupal.org/project/backup_migrate)
- [Rules](https://www.drupal.org/project/rules)
- [Entity API](https://www.drupal.org/project/entity) - Required by **Rules**
- [XML sitemap](https://www.drupal.org/project/xmlsitemap) - The XML sitemap module creates a sitemap that conforms to the sitemaps.org specification.
- [Views](https://www.drupal.org/project/views)
- [Views](https://www.drupal.org/project/views)
- [Views](https://www.drupal.org/project/views)



###ckeditor and IMCE media manager
**ckeditor.zip** - This file contains the *ckeditor* module and editor. To Install simply drag the *ckeditor* file into the module directory on your drupal instance and enable.

**How to upgrade or add plugins ckeditor**
The ckeditor consists of a drupal module and the editor itself.

If you plan on adding plugins. it's recommended that you start with a clean ckeditor configuration from [ckeditor.com](http://ckeditor.com/download).

1. [Download the module](https://www.drupal.org/project/ckeditor) and Install
2. Then [download the **Full Package** package](http://ckeditor.com/download). Strongly advise the following plugins.
  - Embedding Plugins
    - [Auto Embed](http://ckeditor.com/addon/autoembed)
    - [Media Embed](http://ckeditor.com/addon/embed)
    - [Enhanced Image](http://ckeditor.com/addon/image2)
    - [Semantic Media Embed](http://ckeditor.com/addon/embedsemantic)
  - Skin
    - [BootstrapCK4](http://ckeditor.com/addon/bootstrapck)
3. Then download[IMCE](https://www.drupal.org/project/imce) and Install
  - To enable IMCE go to **admin/config/content/ckeditor/edit/Full** > click **File browser settings** > select **IMCE** in the first 3 drop downs > click save.

Note: If you would like to set the default Text formats (i.e. full, filtered HTML) you can go to **admin/config/content/formats** and set the order. The first option with be used unless specified by the permissions.

*Also remember, just like any other module, you will have to set permissions for all other accounts besides Admin.*


###Theme Feature Set
A packaged set of features including custom content types, user roles,
rcl_drupal_theme_feature_set_vX

**rcl_drupal_theme_feature_set_vX**
- Event content type
- Article content type
- Views configurations
- Image style types

To Install:
1. Unzip feature set into **sites/all/modules** folder
2. Got to **/admin/modules** and turn the module on



*Make sure that you install Required modules such as Features, Link, Date, and other listed above for these features to work properly.*
