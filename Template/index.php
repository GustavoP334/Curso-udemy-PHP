<?php 

require_once("vendor/autoload.php");
// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
);

Tpl::configure( $config );

$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );
$tpl->assign( "Version", PHP_VERSION );

// assign an array
// draw the template
$tpl->draw( "index" );



 ?>