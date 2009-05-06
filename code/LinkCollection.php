<?php
class LinkCollection extends Page {
	
	public static $belongs_many_many = array(
		'Pages' => 'Page'
	);
	
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