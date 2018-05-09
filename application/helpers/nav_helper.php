<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('displays')){
	
	function displays(){
		$ci = & get_instance();
        $ci->load->model('users/navmodel' , 'navmodel');
		$main = $ci->navmodel->getFirstLevel();
		$str='<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" 
			role="button" aria-haspopup="true" aria-expanded="false">عرض الاصول</span></a>';
		$str.='<ul class="dropdown-menu">';
		foreach($main as $item){
			
			$str.='<li><a href="'.base_url("Displays/index/".$item->First_Level_ID).'
			">'.$item->First_Level_Name.'</a></li>';
				
		}
		$str.='</ul></li>';
		echo $str;
	}
}

//------------------------------------------------------------------------------------------
   if(! function_exists('getMenuItems')){
	   function getMenuItems($group){
		   if($group == ""){
			   echo "مستخدم بلا صلاحيات";
		   }
		   else {
		   $ci = & get_instance();
           $ci->load->model('users/navmodel','navmodel');
		   $main = $ci->navmodel->getMainMenu();
		$str="";
		foreach($main as $item){
			$sub = $ci->navmodel->getSubMenu($item->MAIN_MENU_ID , $group );
			if($sub){
			$str.='<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" 
			role="button" aria-haspopup="true" aria-expanded="false">'.$item->MAIN_MENU_NAME.'</span></a>
			<ul class="dropdown-menu">
			';
			foreach($sub as $s)
			{
				$str.='<li><a href="'.base_url($s->SUB_MENU_URL).'">'.$s->SUB_MENU_NAME.'</a></li>';
			}
			  $str.='</ul></li>';
			}
		}//END OF IF --SUB--
		  echo $str; 
		   }
	   }//END OF FUNCTION
  
}// END OF IF FUNCTION EXISTS OR NOT 
?>