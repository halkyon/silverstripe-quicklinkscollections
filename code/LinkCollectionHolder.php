<?php
class LinkCollectionHolder extends Page {
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '1'
	);
	
	public static $default_child = 'LinkCollection';
	
}
class LinkCollectionHolder_Controller extends Page_Controller {
	
}
?>