<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller'] = ['class'=>'ContentHooks',
						   'function'=>'header_content',
						   'filename'=>'ContentHooks.php',
							'filepath'=>'hooks'];

$hook['post_system'] = ['class'=>'ContentHooks',
							'function'=>'footer_content',
							'filename'=>'ContentHooks.php',
							'filepath'=>'hooks'];

