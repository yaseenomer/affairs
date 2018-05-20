<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherModel extends CI_Model {
	
	
	
// getting Locations  for form
    public function get_loc()
    {

        return $this->db->get('LOCATION_TYP')->result();

    } //end of method 

	
	
		
// getting Locations  for form
    public function get_degree()
    {

        return $this->db->get('ACADEMIC_DEGREES_NEXT')->result();

    } //end of method 
	
	
			
// getting Locations  for form 
    public function get_dept($loc_no)
    {
		$this->db->select('DEP_ID,DEP_NAME');
        $this->db->where('LOC_NO',$loc_no);
       $result= $this->db->get('DEPARTMENTS')->result();
		$LE ='اختر من القائمة';
        $options = "";
        $options.="<option value=".$LE.">".$LE."</option>";
        foreach($result as $r ){
            $options.="<option  value=".$r->DEP_ID.">".$r->DEP_NAME."</option>";
        }
        return $options;
    } //end of method 
	
	
			
// getting Locations  for form 
    public function get_emp($loc_no)
    {
		$this->db->select('EMP_NO,EMP_NAME');
        $this->db->where('COL_NO',$loc_no);
        $result= $this->db->get('EMPLOYEES_DETAILS')->result();
        $LE ='    ';
        $options = "";
        $options.="<option value=".$LE.">".$LE."</option>";
        foreach($result as $r ){
            $options.="<option value=".$r->EMP_NO.">".$r->EMP_NAME."</option>";
			
        }
        return $options;
    } //end of method 
	
	
	 public function get_name($id)
    {
		$this->db->select('EMP_NAME');
        $this->db->where('EMP_NO',$id);
        $result= $this->db->get('EMPLOYEES_DETAILS')->result();
		  foreach($result as $r ){
            $options.="<option  value=".$r->EMP_NAME."></option>";
        }
        return $options;
        
    } //end of method 
	
	public function maxid()
    {
	   $this->db->select_max('INS_ID');
	  return  $this->db->get('INSTRUCTORS')->row()->INS_ID; 

	}//end method 
	
	
	
	
	public function add($data)
	{
	if ($this ->db->insert('INSTRUCTORS',$data))
	{
		return 0;
	}	
else {
	return $this->db->error();
}	
		
	}//end of method 
	
	
	  public function show()
    {
        $this->db->select('*');
        $this->db->from('INSTRUCTORS_VIEW');
        return $this->db->get()->result();

    } //end of method 
	
	  public function get_Inst($id)
    {
        $this->db->select('*');
		 $this->db->where('INS_ID',$id);
        $this->db->from('INSTRUCTORS_VIEW');
        return $this->db->get()->result();

    } //end of method 
	
	 public function del($id)
    {
        $this->db->where('INS_ID', $id);
       if ( $this->db->delete('INSTRUCTORS'))
	   {
        return true ;
	   }
	   else 
	   { return false ; 
	   }
    } //end of method 
	
	  public function fetch_edit($id)
    {
        $this->db->select('*');
        $this->db->from('INSTRUCTORS_VIEW');
        $this->db->where('INS_ID', $id);
        return $this->db->get()->result();
    } //end of method 
	
	
	 function update($id,$data){
        $this->db->where('INS_ID', $id);
     if ( $this->db->update('INSTRUCTORS', $data))
	 {
		return 0;
	}	
else {
	return $this->db->error();
}	
    }//end of method 


}//end of class 
