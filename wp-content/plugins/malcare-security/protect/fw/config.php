<?php

if (! (defined('ABSPATH') || defined('MCDATAPATH')) ) exit;
if (!class_exists('BVFWConfig')) :

class BVFWConfig {
	public $mode;
	public $requestProfilingMode;
	public $roleLevel;
	public $cookieMode;
	public $bypassLevel;
	public $customRoles;
	public $cookieKey;
	public $cookiePath;
	public $cookieDomain;

	public static $requests_table = 'fw_requests';
	public static $roleLevels = array(
		'administrator' => BVFWConfig::ROLE_LEVEL_ADMIN,
		'editor' => BVFWConfig::ROLE_LEVEL_EDITOR,
		'author' => BVFWConfig::ROLE_LEVEL_AUTHOR,
		'contributor' => BVFWConfig::ROLE_LEVEL_CONTRIBUTOR,
		'subscriber' => BVFWConfig::ROLE_LEVEL_SUBSCRIBER
	);

	function __construct($confHash) {
		$this->mode = array_key_exists('mode', $confHash) ? intval($confHash['mode']) : BVFWConfig::DISABLED;
		$this->requestProfilingMode = array_key_exists('reqprofilingmode', $confHash) ? intval($confHash['reqprofilingmode']) : BVFWConfig::REQ_PROFILING_MODE_DISABLED;
		$this->cookieMode = array_key_exists('cookiemode', $confHash) ? intval($confHash['cookiemode']) : BVFWConfig::COOKIE_MODE_DISABLED;
		$this->bypassLevel = array_key_exists('bypasslevel', $confHash) ? intval($confHash['bypasslevel']) : BVFWConfig::ROLE_LEVEL_CONTRIBUTOR;
		$this->customRoles = array_key_exists('customroles', $confHash) ? $confHash['customroles'] : array();
		$this->cookieKey = array_key_exists('cookiekey', $confHash) ? $confHash['cookiekey'] : "";
		$this->cookiePath = array_key_exists('cookiepath', $confHash) ? $confHash['cookiepath'] : "";
		$this->cookieDomain = array_key_exists('cookiedomain', $confHash) ? $confHash['cookiedomain'] : "";
	}
	
	#mode
	const DISABLED = 1;
	const AUDIT    = 2;
	const PROTECT  = 3;

	#Request Profiling Mode
	const REQ_PROFILING_MODE_DISABLED = 1;
	const REQ_PROFILING_MODE_NORMAL = 2;
	const REQ_PROFILING_MODE_DEBUG = 3;

	#Cookie Mode
	const COOKIE_MODE_ENABLED = 1;
	const COOKIE_MODE_DISABLED = 2;

	#Role Level
	const ROLE_LEVEL_SUBSCRIBER = 1;
	const ROLE_LEVEL_CONTRIBUTOR = 2;
	const ROLE_LEVEL_AUTHOR = 3;
	const ROLE_LEVEL_EDITOR = 4;
	const ROLE_LEVEL_ADMIN = 5;
	const ROLE_LEVEL_CUSTOM = 6;

	#WebServer Conf Mode
	const MODE_APACHEMODPHP = 1;
	const MODE_APACHESUPHP = 2;
	const MODE_CGI_FASTCGI = 3;
	const MODE_NGINX = 4;
	const MODE_LITESPEED = 5;
	const MODE_IIS = 6;
	
	#Valid mc_data filenames 
	const VALID_MC_DATA_FILENAMES = ['mc.conf', 'mc_ips.conf'];
	const VALID_DELETABLE_FILES = ['mc.conf', 'mc_ips.conf', 'malcare-waf.php', 'mc.log', 'mc_data'];

	public function isActive() {
		return ($this->mode !== BVFWConfig::DISABLED);
	}

	public function isProtecting() {
		return ($this->mode === BVFWConfig::PROTECT);
	}

	public function isAuditing() {
		return ($this->mode === BVFWConfig::AUDIT);
	}

	public function isReqProfilingModeDebug() {
		return ($this->requestProfilingMode === BVFWConfig::REQ_PROFILING_MODE_DEBUG);
	}

	public function canProfileReqInfo() {
		return ($this->requestProfilingMode !== BVFWConfig::REQ_PROFILING_MODE_DISABLED);
	}

	public function canSetCookie() {
		return ($this->cookieMode === BVFWConfig::COOKIE_MODE_ENABLED);
	}
}
endif;