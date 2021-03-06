<?php
class LinkCollectionHolder extends Page {
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '0'
	);
	
	public static $default_child = 'LinkCollection';
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->removeByName('Metadata');
		$fields->removeByName('SideBar');
		$fields->removeByName('Widgets');
		$fields->removeByName('To-do');
		$fields->removeByName('Reports');
		$fields->removeByName('Main');
		
		$fields->addFieldsToTab('Root.Content.Main', array(
			new HeaderField('LinkColHeader', 'Link collection holder page')
		));
		
		return $fields;
	}
	
	public function TreeTitle() {
		return 'Link collection holder';
	}
	
}
class LinkCollectionHolder_Controller extends Page_Controller {
	
}
?>