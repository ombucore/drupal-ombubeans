<?php

/**
 * @file
 * Rich Text Editor bean.
 */

class RteBean extends BeanPlugin {
  /**
   * Implements the view method for this class
   */
  public function view($bean, $content, $view_mode = 'default', $langcode = NULL) {
    // Allow bean styles to alter build.
    if (module_exists('bean_style')) {
      bean_style_view_alter($content, $bean);
    }

    return $content;
  }

}
