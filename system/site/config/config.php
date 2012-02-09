<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['base_url']	= ''; //TODO: Update this

$config['index_page'] = 'index.php'; //TODO: get rid of this

$config['uri_protocol']	= 'AUTO';

$config['url_suffix'] = '';

$config['language']	= 'english';

$config['charset'] = 'UTF-8';

$config['enable_hooks'] = FALSE;

$config['subclass_prefix'] = 'MY_';

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['allow_get_array']		= FALSE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

$config['log_threshold'] = 1;

$config['log_path'] = ''; // default application/logs/ folder
$config['log_date_format'] = 'Y-m-d H:i:s';

$config['cache_path'] = ''; // default system/cache/ folder

$config['encryption_key'] = 'Y3U3K8^&O@fA'; // For Session

$config['sess_cookie_name']		= 'y3k_uoa';
$config['sess_expiration']		= 0;
$config['sess_expire_on_close']	= TRUE;
$config['sess_encrypt_cookie']	= TRUE;
$config['sess_use_database']	= TRUE;
$config['sess_table_name']		= 'uoa_ci_sessions';
$config['sess_match_ip']		= TRUE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;

$config['cookie_prefix']	= "y3kuoa";
$config['cookie_domain']	= ($_SERVER['SERVER_NAME'] == 'localhost') ? '' : $_SERVER['SERVER_NAME'];
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

$config['global_xss_filtering'] = FALSE;

$config['csrf_protection'] = TRUE;
$config['csrf_token_name'] = 'uoa_token';
$config['csrf_cookie_name'] = 'csrf_y3kuoa';
$config['csrf_expire'] = 7200;

$config['compress_output'] = FALSE;

$config['time_reference'] = 'gmt';

$config['rewrite_short_tags'] = FALSE;

$config['proxy_ips'] = '';

//Auto Loading the core/ classes
function __autoload($class) {
	if(is_file($location = APPPATH.'core/'.$class.EXT)) {
		include_once $location;
		return;
	}
}

/* End of file config.php */
/* Location: ./application/config/config.php */
