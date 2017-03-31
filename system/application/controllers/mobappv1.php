<?php
class Mobappv1 extends Controller {

	function Mobappv1(){
		parent::controller();
		$this->load->model('mobappmodelv1','MM'); 	 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	
	function index(){
		echo "This is a privete URL.";
	}
	
	function checkAuth(){
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." checkAuth Input: ".serialize($_POST));
		fclose($fp);  
		//~ $_POST = array(
					//~ 'email'=>'demo@vmc.in'
					//~ ,'password'=>'tapan'
					//~ ,'url'=>'mcube.vmc.in'
				//~ );
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[4]|max_length[50]|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('url', 'Server', 'required|callback_check_url');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->authenticate($_POST);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$out = $user;
				$out['code'] = "200";
				$out['msg'] = "Login Success";
			}
		}else{
			$out = array(
							'code'=>'400',
							'msg'=>str_replace('<br>','',validation_errors())
					);
		}
		echo json_encode($out);
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." checkAuth Output: ".serialize($out));
		fclose($fp);
		exit;
	}

	function getList(){
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getList Input: ".serialize($_POST));
		fclose($fp);  
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'followup'	//  track|ivrs|x|lead|followup
					//~ ,'ofset'=>'0'
					//~ ,'limit'=>'20'
					//~ ,'gid'=>'0'
				//~ );
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20),
						'gid'=>((isset($_POST['gid']) && $_POST['gid']>0) ? $_POST['gid'] : '')
					);
				$list = $this->MM->getAllList($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." getList Output: ".serialize($out));
		fclose($fp);
		exit;
	}
	
	function getFollowupHistory(){
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getFollowupHistory Input: ".serialize($_POST));
		fclose($fp);  
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'track'	//  track|ivrs|x|lead|followup
					//~ ,'callid'=>'90361034341383650992'
					//~ ,'ofset'=>'0'
					//~ ,'limit'=>'20'
				//~ );
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'dataid'=>$_POST['callid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20)
					);
				$list = $this->MM->getFollowupHistory($data);
				if(empty($list)){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." getFollowupHistory Output: ".serialize($out));
		fclose($fp);
		exit;
	}
	
	function getDetail(){
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getDetail Input: ".serialize($_POST));
		fclose($fp);  
		/*$_POST = array(
					'authKey'=>'1.1.52636037dd2e5'
					,'type'=>'track'	//  track|ivrs|x|lead|followup
					,'callid'=>'76949069081445592061'
					,'groupname'=>'HINDU NP'
				);*/
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		if($_POST['type'] != 'mtracker')
			$this->form_validation->set_rules('groupname', 'Group Name', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'		=>$user['bid'],
						'eid'		=>$user['eid'],
						'type'		=>$_POST['type'],
						'callid'	=>$_POST['callid'],
						'groupname'	=>$_POST['groupname'],
					);
				$list = $this->MM->getDetails($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." getDetail Output: ".serialize($out));
		fclose($fp);
	    exit;
	}
	
	function postDetail(){
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." postDetail Input: ".serialize($_POST));
		fclose($fp);  
		//~ $_POST = array(
				//~ 'authKey'=>'1.1.5260dd755c18f'
				//~ ,'type'=>'track'	//  track|ivrs|x|lead|followup
				//~ ,'callid'=>'096541004011353999093'
				//~ ,'groupname'=>'ext102'
				//~ ,'calleraddress'=>'Test Call 12'
				//~ ,'callerbusiness'=>'Test business 12'
				//~ ,'assignto'=>'53'
				//~ ,'c_81'=>'NEW TEST FIELD1'
				//~ ,'c_82'=>'test 1'
			//~ );
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		if($_POST['type'] != 'mtracker')
			$this->form_validation->set_rules('groupname', 'Group Name', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = $_POST;
				$data['bid'] = $user['bid'];
				$data['eid'] = $user['eid'];
				
				if(!$this->MM->postDetails($data)){
					$out['code'] = "424";
					$out['msg'] = "Request Failed";
				}else{
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//~ echo "<pre>";
		//~ $x = json_encode($out);
		//~ print_r(json_decode($x));
		echo json_encode($out);
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." postDetail Output: ".serialize($out));
		fclose($fp);
		exit;
	}
	
	function getGroups(){
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getGroups Input: ".serialize($_POST));
		fclose($fp); 
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
					//~ ,'type'=>'lead'	//  track|ivrs|x|lead|followup
				//~ );
				
		$this->form_validation->set_rules('authKey', 'authKey', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'=>$user['bid'],
						'eid'=>$user['eid'],
						'type'=>$_POST['type'],
						'ofset'=>(isset($_POST['ofset']) ? $_POST['ofset'] : 0),
						'limit'=>(isset($_POST['limit']) ? $_POST['limit'] : 20),
						'gid'=>(isset($_POST['gid']) ? $_POST['gid'] : '')
					);
				$list = $this->MM->getAllGroups($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		//$x = json_encode($out);
		//print_r(json_decode($x));
		echo json_encode($out);
		$fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." getGroups Output: ".serialize($out));
		fclose($fp);
		exit;
	}
	
	function followupFrm(){
	   $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." followupFrm Input: ".serialize($_POST));
		fclose($fp);
		//~ $_POST = array(
					//~ 'authKey'=>'1.1.5260dd755c18f'
				//~ );
		$this->form_validation->set_rules('authKey', 'auth Key', 'required');
		if(!$this->form_validation->run() == FALSE){
			$user = $this->MM->userByKey($_POST['authKey']);
			if(empty($user)){
				$out = array(
							'code'=>'401',
							'msg'=>'Invalid User'
					);
			}else{
				$data = array(
						'bid'		=>$user['bid'],
						'eid'		=>$user['eid']
					);
				$list = $this->MM->getFollowupFielsd($data);
				if(isset($list['nodata'])){
					$out['code'] = "404";
					$out['msg'] = "No record found";
				}else{
					$out = $list;
					$out['code'] = "202";
					$out['msg'] = "Request Accepted";
				}
			}
		}else{
			$out = array(
						'code'=>'400',
						'msg'=>validation_errors()
					);
		}
		echo json_encode($out);
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." followupFrm Output: ".serialize($out));
		fclose($fp); 
		exit;
	}
	
	function check_url(){
		$urls = array('qa1.vmc.in','mcube.vmc.in','mcube.vmc.in/calltrack');
		if(in_array($this->input->post('url'),$urls)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_url', 'Server Address Doesnot exists');
			return FALSE;
			
		}
	}
	function pushnotification(){
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." pushnotification Input: ".serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('pushkey', 'pushkey', 'required');
        $this->form_validation->set_rules('authkey', 'authkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MM->push_noti($_POST);
            if ($user['key'] == '0') {
			    $out['code'] = "202";
				$out['msg'] = "Invalid Credentials";
            }elseif($user['key'] == '1'){
			    $out['code'] = "400";
				$out['msg'] = "Login Successfull";
				$out['msgtest'] = $user['msgtest'];
           }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." pushnotification Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
	//~ function Logout(){
       //~ $this->form_validation->set_rules('authkey', 'authkey', 'required');
         //~ if (!$this->form_validation->run() == FALSE) {
            //~ $user = $this->MM->logout($_POST);
              //~ if ($user== '0') {
			    //~ $out['code'] = "202";
				//~ $out['msg'] = "Invalid Credentials";
            //~ }elseif($user == '1'){
			    //~ $out['code'] = "400";
				//~ $out['msg'] = "Logut Successfull";
           //~ }
        //~ } else {
            //~ $out = array(
                //~ 'code' => '420',
                //~ 'msg' => validation_errors()
            //~ );
        //~ }
        //~ echo json_encode($out);
        //~ exit;
	//~ }
	function setpushkey(){
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." setpushkey Input: ".serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('pushkey', 'pushkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MM->setpushkey($_POST);
            if ($user['key'] == '0') {
			    $out['code'] = "202";
				$out['msg'] = "Logged into other device";
            }elseif($user['key'] == '1'){
			    $out['code'] = "400";
				$out['msg'] = "Logout Successfull";
           }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." setpushkey Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
   function getpushkey(){
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." getpushkey Input: ".serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('pushkey', 'pushkey', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MM->getpushkey($_POST);
            if ($user['session'] == '0') { 
			    $out['code'] = "202";
				$out['msg'] = "Session Expired";
			}elseif($user['different'] == '0'){
			    $out['code'] = "202";
				$out['msg'] = "Logged into other Device";
            }elseif($user['appstatus'] == '1'){
			    $out['code'] = "400";
				$out['msg'] = "User Logged in";
            }elseif($user['appstatus'] == '0'){
			    $out['code'] = "202";
				$out['msg'] = "Session Expired";
           }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." getpushkey Output: ".serialize($out));
		fclose($fp);  
        exit;
	}
	function clicktoconnect(){
	    $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n".date('Y-m-d H:i:s')." clicktoconnect Input: ".serialize($_POST));
		fclose($fp);
		$this->form_validation->set_rules('authkey', 'authkey', 'required');
		$this->form_validation->set_rules('callid', 'callid', 'required');
		$this->form_validation->set_rules('type', 'type', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->MM->clicktoconnect($_POST);
            if ($user == '0') {
			    $out['code'] = "202";
				$out['msg'] = "Invalid Credentials";
            }elseif($user == '1'){
			    $out['code'] = "400";
				$out['msg'] = "Call Connected";
           }elseif($user =='Customer Number is DND'){
			    $out['code'] = "202";
				$out['msg'] = "Customer Number is DND";
		   }elseif($user == 'Insufficient Call Balance'){
			    $out['code'] = "202";
				$out['msg'] = "Insufficient Call Balance";
		   }
        } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
        }
        echo json_encode($out);
        $fp = fopen("moblog.txt",'a');
		fwrite($fp,"\n". date('Y-m-d H:i:s')." clicktoconnect Output: ".serialize($out));
		fclose($fp);  
        exit;
	}

}


?>
