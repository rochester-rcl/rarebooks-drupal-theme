#Templates

This folder contains all the PHP template (TPL) files. The page TPL files control the nav, footer, and other high level elements on a page. The node TPL files control the specific layout of form fields. For example if you would like to change the way the register button displays on the event content type you would edit **node--event.tpl.php**. If you want to edit the navigation on that page you would edit **page--type-event.tpl.php**.

The root folder contains a file named **template.php**. This file dictates how drupal will read these TPL files. Especially the them suggestions.

You can use the following naming conventions for your TPL files and drupal will automatically make the connect them. For example: If you would like to target a specific node content type with a special node and page TPL file, name your files **page--type-article--<node#>.tpl.php-** and **node--<node#>.tpl.php**. That will tell Drupal to override the TLP files for that specific node type.

####Page Templates

- page--front.tpl.php
- page--node.tpl.php
- page--node--%.tpl.php
- page--node--123.tpl.php
- page--node--edit.tpl.php
- page--type-blog.tpl.php
- page--type-blog--%.tpl.php
- page--type-blog--123.tpl.php
- page--type-blog--edit.tpl.php


####Node Templates

- node--nodeid.tpl.php
- node--type.tpl.php
- node.tpl.php

*Note: Later items take precedence*


For more detail on this check out [Drupal 7 Template (Theme Hook) Suggestions](https://www.drupal.org/node/1089656)


## Adding to the Templates

If you add images into the theme you must use the correct php based path and place your image into the **images** folder.
```
<img class="" src="<?php print $directory;?>/images/<filename>" />
```

## Troubleshooting

- **The changes I am making to the template are not showing**
  - It's normal even after flushing your cache for changes to take 1-2 minutes to show.
  - Be sure you're editing the correct template.
    - Check the node #. The look through the template file names to see if they have a node # that matches the node # of the file you're editing. That will override the less specific file names. Example: **page--type-article--1.tpl.php** will override **page--type-article.tpl.php** for node 1. Node 2 and higher will use the more general **page--type-article.tpl.php**.
- **The chat link is not showing**
  - Your jQuery update is not installed. To update download the module install and enable.
- **The registration button is not showing**
  - Your jQuery update is not installed. To update download the module install and enable.
