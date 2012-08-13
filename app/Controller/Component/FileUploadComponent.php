<?php
/*
 * File: file_upload.php
 * Created Date: 8-11-2010
 * Last update: 23-12-2011
 * Created By: Harsh Gupta
 * Description: This is a simple Component which provide a simple uploading functionality ....
 */
class FileUploadComponent extends Component{

	function upload_file($file_name = null, $folder_url = null){
		//$foler_name = "img/docfolder";
		$foler_name = 'img/'.$folder_url;
		//$permite_type_check = $this->permitted_type($file_name['name']);

		$name_of_file_db = mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y')).$file_name['name'];
		$name_of_file = $foler_name.'/'.$name_of_file_db;
		move_uploaded_file($file_name['tmp_name'], $name_of_file);
		return $name_of_file_db;
	}

	function permitted_type_file($file_name_type = null){
		$allowedExtensions = array('txt','doc','docx');
	
		if (in_array(end(explode(".",strtolower($file_name_type['name']))), $allowedExtensions)){
			return true;
		}else{
			return false;
		}
	}
	
	function permitted_type_img($file_name_type = null){
		$allowedExtensions = array('jpg','gif','png');
	
		if (in_array(end(explode(".",strtolower($file_name_type['name']))), $allowedExtensions)){
			return true;
		}else{
			return false;
		}
	}
}
?>