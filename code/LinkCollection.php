<?php
class LinkCollection extends Page {
	
	public static $defaults = array(
		'ShowInSearch' => '0',
		'ShowInMenus' => '0'
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
		
		$fields->removeByName('Metadata');
		$fields->removeByName('Sidebar');
		$fields->removeByName('Widgets');
		$fields->removeByName('To-do');
		$fields->removeByName('Reports');
		$fields->removeByName('Main');
		
		$fields->addFieldsToTab('Root.Content.Main', array(
			new TextField('Title', 'Collection title (displayed above the link collection on the site)'),
			new TextField('MenuTitle', 'Description (only shown in the CMS to make it easy to find a particular link collection)'),
			new HtmlEditorField('Content', 'Content (the content of the link collection)', 15)
		));
		
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