<?php
class LinkCollection extends Page {
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '1'
	);
	
	public static function map() {
		$output = new DataObjectSet();
		$items = DataObject::get('LinkCollection');
		if($items && $items->Count() > 0) {
			$output = $items->map('ID', 'MenuTitle');
		}
		return $output;
	}
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->renameField('Title', 'Collection title');
		$fields->renameField('MenuTitle', 'Description');
		
		$fields->removeByName('Metadata');
		$fields->removeByName('Sidebar');
		$fields->removeByName('Widgets');
		$fields->removeByName('To-do');
		$fields->removeByName('Reports');
		
		return $fields;
	}
	
	/**
	 * Overload the TreeTitle() method to show a
	 * different value than the default.
	 * 
	 * @return string
	 */
	public function TreeTitle() {
		$title = $this->getField('MenuTitle');
		if(!$title) return parent::TreeTitle();
		return $title;
	}
	
}
class LinkCollection_Controller extends Page_Controller {

}
?>