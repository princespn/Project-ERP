  <?php 
    class Attachment extends AppModel {
      var $name = 'Attachment';
    
function removeFile($name = null){
    if(!$name) return false;
    
    $up_dir = WWW_ROOT . $this->uploadDir;
    $target_path = $up_dir . DS . $name;
    if(unlink($target_path)) return true;
    else return false;
  }

	function CustomUpload($data,$relationID=null)
	{
		//pr($data);
		$up_dir = WWW_ROOT . "files";
		
		
		
		$addid = mktime()."_".$data['name'];
    	
    	$target_path = $up_dir . DS .$addid;
    	
		if(move_uploaded_file($data['tmp_name'], $target_path))

		{
			if (!empty($relationID))
			{
			$arr= array('Attachment'=>array('coment_id'=>$relationID,'name'=>$addid,'type'=>$data['type'],'size'=>$data['size']));
			}
			else{
			$arr= array('Attachment'=>array('coment_id'=>$relationID,'name'=>$addid,'type'=>$data['type'],'size'=>$data['size']));

			}

			 $this->create(); 
			 $r = $this->save($arr);
			// echo  "saved!" . $this->id;
			// pr($r);
		
		}
		//echo  "done!";
	}
	
    }
?>
