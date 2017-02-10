<?php
 
class Review extends AppModel
{
  	public $useTable = 'user_review';

	public $validate = array(
	    'order' => 'notEmpty',
	    'product' => 'notEmpty',
	    'user' => 'notEmpty',

	);
}


?>