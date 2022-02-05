<?php

/**
 * @file
 * Hooks provided by Security Kit.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter the Security Kit settings.
 *
 * @param array $options
 *   Array of runtime options.
 *
 * @see _seckit_get_options().
 */
function hook_seckit_options_alter(&$options) {
  // Set the X-Frame-Options HTTP header value to SAMEORIGIN.
  $options['seckit_clickjacking']['x_frame'] = SECKIT_X_FRAME_SAMEORIGIN;
  // Add a new CSP directive "foo-src example.com".
  $options['seckit_xss']['csp']['foo-src'] = 'example.com';
}

/**
 * @} End of "addtogroup hooks".
 */
