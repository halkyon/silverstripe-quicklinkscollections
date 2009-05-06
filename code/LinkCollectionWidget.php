<?php
class LinkCollectionWidget extends Widget {
	
	public static $has_one = array(
		'LinkCollection' => 'LinkCollection'
	);
	
	static $title = 'Link Collection';
	
	static $cmsTitle = 'Link Collection';
	
	static $description = 'Show a small snippet of content for display quick links to other pages/sites.';
	
	function getCMSFields() {
		return new FieldSet(
			new TreeDropdownField('LinkCollectionID', 'Link collection to show', 'LinkCollection')
		);
	}
	
}
?>