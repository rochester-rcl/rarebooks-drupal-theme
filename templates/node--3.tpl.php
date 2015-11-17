<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>


<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="google-form-fix">
  <form action="https://docs.google.com/forms/d/1sLB0t9i-MxAjTlnwbN_ySU4Zy1RlAkaPlisaEorjx3I/formResponse?embedded=true" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
  <div class="ss-form-question errorbox-good" role="listitem">
  <div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
  <label class="ss-q-item-label" for="entry_1684187077"><div class="ss-q-title">Name:
  <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
  <span class="ss-required-asterisk" aria-hidden="true">*</span></div>
  <div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
  <input type="text" name="entry.1684187077" value="" class="ss-q-short" id="entry_1684187077" dir="auto" aria-label="Name:  " aria-required="true" required="" title="">
  <div class="error-message" id="2125766850_errorMessage"></div>
  <div class="required-message">This is a required question</div>
  </div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
  <div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
  <label class="ss-q-item-label" for="entry_198025923"><div class="ss-q-title">Email:
  <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
  <span class="ss-required-asterisk" aria-hidden="true">*</span></div>
  <div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
  <input type="text" name="entry.198025923" value="" class="ss-q-short" id="entry_198025923" dir="auto" aria-label="Email:  Please use your rochester.edu email address!" aria-required="true" required="" pattern=".*rochester.edu.*" title="Please use your rochester.edu email address!">
  <div class="error-message" id="372449018_errorMessage">Please use your rochester.edu email address!</div>
  <div class="required-message">This is a required question</div>
  </div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
  <div dir="auto" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
  <label class="ss-q-item-label" for="entry_1896739912"><div class="ss-q-title">Question? Idea? Thoughts?
  </div>
  <div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
  <textarea name="entry.1896739912" rows="8" cols="0" class="ss-q-long" id="entry_1896739912" dir="auto" aria-label="Question? Idea? Thoughts?  "></textarea>
  <div class="error-message" id="968326040_errorMessage"></div>
  <div class="required-message">This is a required question</div>
  </div></div></div>
  <input type="hidden" name="draftResponse" value="[,,&quot;8762324621860250018&quot;]
  ">
  <input type="hidden" name="pageHistory" value="0">

  <input type="hidden" name="fvv" value="0">


  <input type="hidden" name="fbzx" value="8762324621860250018">

  <div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
  <input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
  <div class="ss-password-warning ss-secondary-text">Never submit passwords through Google Forms.</div></td>
  </tr></tbody></table></div></ol></form>
  </div>

</div>
