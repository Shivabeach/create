<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] =  array('database', 'session', 'form_validation', 'table', 'email', 'typography', 'pagination', 'user_agent', 'encryption', 'globals');


$autoload['drivers'] = array();


$autoload['helper'] = array('url', 'file', 'form','date', 'html', 'typography', 'text','security','typography','array', 'email', 'xml');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array();
