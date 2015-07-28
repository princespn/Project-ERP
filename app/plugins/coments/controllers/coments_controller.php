<?php
class ComentsController extends ComentsAppController {

	var $name = 'Coments';
	var $helpers = array('Html', 'Form', 'Ajax', 'Time','Javascript');
	var $components = array('RequestHandler','LoadsysAuth');

	function beforeFilter() {
		parent::beforeFilter();
		$this->LoadsysAuth->allow('index', 'add');
		$this->Auth->allow('*');
    	$this->FileUpload->fileModel = 'Coment';  //Upload by default.
		$this->FileUpload->fields = array('name'=> 'file_name', 'type' => 'file_type', 'size' => 'file_size');
		$this->FileUpload->allowedTypes = array( 'image/jpeg', // images
                  'image/jpg', 
                  'image/png', 
                  'image/gif', 
                  'image/tiff', 
                  'image/x-tiff', 
                                  
                  'application/pdf', // pdf
                  'application/x-pdf', 
                  'application/acrobat', 
                  'text/pdf',
                  'text/x-pdf', 
                                  
                  'text/plain', // text
                              
                  'application/msword', // word
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                  
                  'application/mspowerpoint', // powerpoint
                  'application/powerpoint',
                  'application/vnd.ms-powerpoint',
                  'application/x-mspowerpoint',
                          
                  'application/x-msexcel', // excel
                  'application/excel',
                  'application/vnd.ms.-excel',
                                  
                  'application/x-compressed', // compressed files
                  'application/x-zip-compressed',
                  'application/zip',
                  'multipart/x-zip',
                  'application/x-tar',
                  'application/x-compressed',
                  'application/x-gzip',
		'application/rtf',
                  'multipart/x-gzip'
                 );
  
	}
function download($name) {
			Configure::write('debug', 0);
			$this->view = 'Media';
	
 			$file = strstr($name, '.','-1');

			$params = array(
			'id' => $name,
			'name' => $file,
			'extension' => 'png',
			'mimeType' => array('png' => 'application/png','jpg' => 'application/jpg','pdf' => 'application/pdf','vnd.ms-powerpoint' => 'application/vnd.ms-powerpoint','docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'), // extends internal list of mimeTypes
			'path' => 'files' . DS
					);
			$this->set($params);
			}

		function index($model=null, $id=null) {
			$this->paginate = array(
			'conditions' => array(
				'Coment.model' => $model,
				'Coment.project_id' => $id,
			),
			'contain' => array(
				'Creator',
			),
			'limit' => 200,
			'order' => 'Coment.created  desc',
			'page' => 'first',
		);
		
		$this->set('coments', $this->paginate('Coment'));
		$this->set('_model', $model);
		$this->set('_project_id', $id);
	}

	function add($model = null, $id = null,$uid = null) {
		
		if (!empty($this->data))
		 {
			$model = Set::extract($this->data, 'Coment.model');
			$id = Set::extract($this->data, 'Coment.project_id');
			$a = ClassRegistry::init('Attachment');
			
			
		
				if ($this->Coment->save($this->data))
				 {
				$coment = $this->Coment->findById($uid);
				//print_r($_REQUEST); die();
						foreach ($this->data['Attachment'] as $file) 
							{
						$aa = $a->CustomUpload($file[0],$coment['Coment']['id']);
							}
						$this->Coment->create();
						$this->data = array();
						$this->set('successful', false);
						$this->Session->setFlash(__('The Comment has been saved.', true));
				
					} 
				else 
					{
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true));
					}
			}
			else
			{
				$this->data = array(
					'Coment' => array(
						'model' => $model,
						'project_id' => $id,
					)
				);
			}
		$this->set('_model', $model);
		$this->set('_project_id', $id);
	}

}
?>
