<?php
class AdressSiteConfig extends DataObjectDecorator {
	function extraStatics() {
		return array(
			'db' => array(
				'Organisation' => 'Varchar(255)',
				'Address' => 'Varchar(255)',
				'City' => 'Varchar(255)',
				'Phone' => 'Varchar(255)',
				'Fax' => 'Varchar(255)',
				'Email' => 'Varchar(255)'
		);
	}
	public function updateCMSFields(FieldSet &$fields) {
		$fields->addFieldToTab("Root.Main", new TextField('Organisation','Name of your organisation/company'));
		$fields->addFieldToTab("Root.Main", new TextField('Address'));
		$fields->addFieldToTab("Root.Main", new TextField('City'));
		$fields->addFieldToTab("Root.Main", new TextField('Phone'));
		$fields->addFieldToTab("Root.Main", new TextField('Fax'));
		$fields->addFieldToTab("Root.Main", new TextField('Email'));
	}
}
?>