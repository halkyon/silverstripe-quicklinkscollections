<?php
class LinkCollectionHolder extends Page {
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '1'
	);
	
	public static $default_child = 'LinkCollection';
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->removeByName('Metadata');
		$fields->removeByName('Sidebar');
		$fields->removeByName('Widgets');
		$fields->removeByName('To-do');
		$fields->removeByName('Reports');
		
		return $fields;
	}
	
}
class LinkCollectionHolder_Controller extends Page_Controller {
	
}
?>