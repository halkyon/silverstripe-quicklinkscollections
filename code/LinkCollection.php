<?php
class LinkCollection extends Page {
	
	public static $belongs_many_many = array(
		'Pages' => 'Page'
	);
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '1'
	);
	
	public static function map() {
		$output = new DataObjectSet();
		$items = DataObject::get('LinkCollection');
		if($items && $items->Count() > 0) {
			$output = $items->map('ID', 'Title');
		}
		return $output;
	}
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->renameField('Title', 'Collection title');
		$fields->renameField('MenuTitle', 'Description');
		
		return $fields;
	}
	
	/**
	 * Overload the TreeTitle() method to show a
	 * different value than the default.
	 * 
	 * @return string
	 */
	public function TreeTitle() {
		return $this->getField('MenuTitle');
	}
	
}
class LinkCollection_Controller extends Page_Controller {

}
?>