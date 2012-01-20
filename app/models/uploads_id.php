<?php
class UploadsId extends AppModel {
	var $name = 'UploadsId';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'upload_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>