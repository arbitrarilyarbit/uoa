<?php defined('BASEPATH') OR exit('No direct script access allowed');

// Code here is run before ALL controllers
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//clean request for xss
		$_POST = $this->security->xss_clean($_POST);
	}
}

/**
 * Returns the CI object.
 *
 * Example: ci()->db->get('table');
 *
 * @staticvar	object	$ci
 * @return		object
 */
function ci()
{
	return get_instance();
}
