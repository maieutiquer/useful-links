<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$cols = modUsefulLinksHelper::getCols( $params );
$titles = modUsefulLinksHelper::getLinkTitles( $params );
$urls = modUsefulLinksHelper::getLinkUrls( $params );
require JModuleHelper::getLayoutPath( 'mod_useful_links' );
