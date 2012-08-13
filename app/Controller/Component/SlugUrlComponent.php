<?php
class SlugUrlComponent extends Component{
	public $name = 'SlugUrl';

	public function stringToSlug($str = null) {
		// remove some special characters
		$str_array = array(":","'","/","?");
		$str = str_replace($str_array,'', $str);
		
		// make unique url......
		$str = $str.' '.mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
		
		// turn into slug
		$str = Inflector::slug($str);
		// to lowercase
		$str = strtolower($str);
		return $str;
	}

	public function getSlugId($model_name = null, $str = null){
		$model_name = ucfirst($model_name);
		$get_data = $this->$model_name->findBySlug($str);
		$this->$model_name->id = null;
		return $get_data;
	}

	// For Fatch Slug URL from Database...
	//$this->SlugUrl->getSlugUrl('Nitche',$view_page_id);
	public function getSlugUrl($model_name = null, $id = null){
		$model_name = ucfirst($model_name);
		$get_data = $this->$model_name->findByid($id);
		$this->$model_name->id = null;
		return $get_data;
	}

}

?>