<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship  extends CI_Controller
{
    protected $file;

    public function __construct()
    {
        parent::__construct();

        $this->file = new Symfony\Component\Filesystem\Filesystem();
        $this->load->model('affirs/M_Scholarship', 'schol');
        $this->load->model('affirs/M_Scholarship_Decisions', 'dec');
        $this->load->model('affirs/M_Scholarship_expenses','exp');
        $this->load->model('Scholarships_extend_model/Scholar_extend_model','ext');
        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {

        $data['alls'] = $this->schol->getSchol();
        $data['insert'] = $this->session->flashdata('insert');
        $data['update'] = $this->session->flashdata('update');
        $this->load->view('Scholarship/index', $data);
    }

    /**
     * @param $id
     */
    public function show($id)
    {



        /**
         * all data for  detail
         */
        $data['detail'] = $this->schol->get_details($id);





        /**
         * all data for  Expenses
         */
        $data['dolar'] = $this->schol->sumExpByDolar($id)->AMOUNT;
        $data['bound'] = $this->schol->sumExpBound($id)->AMOUNT;
        $data['Currencies'] = $this->exp->getCurrency();
        $data['Expenses'] = $this->exp->getExpensestype();

        $data['Expenall'] = $this->exp->getALL($id);

        /**
         * all data for  Decisions
         */
        $data['depdec'] = $this->dec->getDecisions($id,1);
        $data['colldec'] = $this->dec->getDecisions($id,2);
        $data['affairsdec'] = $this->dec->getDecisions($id,3);
        $data['meeting'] = $this->dec->getDecisions($id,4);


         /**
         * all data for  Extend
         */
        $data['extends'] = $this->ext->getALLWhere($id);
        $data['attachext'] = $this->schol->getAttachereType($id,3);



        /**
         * all data for  Main information
         */
        $data['coldep'] = $this->schol->getCollAndDep();
        $data['all'] = $this->schol->findSchol($id);
        $data['attaches'] = $this->schol->getAttach($id);
        $data['emp'] = $this->schol->findEmp($data['all']->EMP_NO);
        $data['qualifis'] = $this->schol->getQualifi($data['all']->EMP_NO);


        /**
         * flash data  for add attaches
         */

        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');


        $this->load->view('Scholarship/show', $data);
    }

    public function course()
    {
        $data['programs'] = $this->schol->programs();
        $this->load->view('Scholarship/course', $data);
    }

    /**
     * @param $id
     */
    public function emp($id)
    {
        $data['error'] = $this->session->flashdata('error');
        $data['emps'] = $this->schol->getEmps();
        $this->session->set_userdata('PROG_TYP_ID',$id);
        $data['program'] = $this->schol->findProgram($this->session->PROG_TYP_ID);
        $data['coldeps'] = $this->schol->getCollAndDep();
        $this->load->view('Scholarship/emp', $data);
    }

    /**
     * @param $emp
     * @param $cour
     */
    public function create()
    {

        $emp =  $this->input->post('EMP_NO');

//         $this->form_validation->set_rules('EMP_NO','اسم الموظف ');
//
//        if ($this->form_validation->run() == FALSE) {
//            $this->session->set_flashdata('error','لم يتم إختيار استاذ ');
//            redirect('/affirs/Scholarship/emp/17');
//
//        }



        $prog  =  $this->input->post('PROG_ID');
        $this->session->set_userdata('emp_no',$emp);
        $this->session->set_userdata('prog_id',$prog);
        list($emp, $prog) = $this->if_session($emp, $prog);
        $data['coldeps'] = $this->schol->getCollAndDep();
        $data['emp'] = $this->schol->findEmp($emp);
        $data['program'] = $this->schol->findProgram($prog);
        $this->load->view('Scholarship/test',$data);
    }

    public function insert1()
    {

        $data1 = $this->input->post();
        $data2 = $this->data2();
        $data_for_main = array_merge($data1,$data2);
        if ($this->input->post() != null)
        {
            $this->schol->insert($data_for_main);
        }

        $scol_id = $this->schol->findMax()->id;
        $this->session->set_userdata('schol_id', $scol_id);
        $data['find'] = $this->schol->find_Schol($this->session->schol_id);
        $data['qualifis'] = $this->schol->getQualifi($this->session->emp_no);
        $this->load->view('Scholarship/create2',$data);
    }

    public function insert2()
    {
        $data = $this->data1();
        if ($this->input->post() != null)
        {
          $this->schol->updateSchol($this->session->schol_id, $this->input->post());
        }

        if ($data['program']->PROG_TYP_ID == 3){
            $this->load->view('Scholarship/create3',$data);
        }elseif ($data['program']->PROG_TYP_ID == 4){
            $this->load->view('Scholarship/create3_2',$data);
        }elseif ($data['program']->PROG_TYP_ID ==1 || $data['program']->PROG_TYP_ID == 5 || $data['program']->PROG_TYP_ID == 2 ) {
            $data['error'] = $this->session->flashdata('error');
            $data['sucsess'] = $this->session->flashdata('sucsess');
            $this->load->view('Scholarship/create3_3', $data);
        }


    }


    public function insert3()
    {
        if ($this->input->post()  != null){

            $this->schol->updateSchol($this->session->schol_id, $this->input->post());
        }
        $data['error'] = $this->session->flashdata('error');

        $data['find'] = $this->schol->find_Schol($this->session->schol_id);

        $this->load->view('Scholarship/create4', $data);
    }

    public function insert4()
    {
        $close = $this->input->post('close');

        $id = $this->session->schol_id;

        $uploadData =handle_attache($id,"");

        upload_attache_schol($id, $uploadData,1);

        if(isset($close)){

            redirect('affirs/Scholarship/show/'.$this->session->schol_id);
        }
            redirect('affirs/Scholarship/insert3');


    }


    public function insert_type_1()
    {

        $this->schol->updateSchol($this->session->schol_id, $this->input->post());

        $uploaddata = handle_attache($this->session->schol_id,'/affirs/Scholarship/insert2');

        upload_attache_schol($this->session->schol_id,$uploaddata,2);

        $data['find'] = $this->schol->find_Schol($this->session->schol_id);

        $this->load->view('Scholarship/create4',$data);


    }


    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->schol->delete($id);
        $this->session->set_flashdata('update', 'تم حذف   المرشح  بنجاح  ');
        return redirect('/affirs/candidates');
    }


    /**
     * @param $id
     */

    public function addAttache($id)
    {
        $uploaddata = handle_attache($id,'/affirs/Scholarship/show/'.$id);

        upload_attache_schol($id,$uploaddata,$this->input->post('type'));

        $this->session->set_flashdata('success', 'تم رفع الملف بنجاح');

        return redirect('/affirs/Scholarship/show/'.$id);

    }

    /**
     * @param $id
     * @param $name
     * @param $ser
     */
    public function deleteAttache($id,$name,$ser)
    {
        $this->schol->deleteAttache($id,$name,$ser);
        $this->delete_attache_from_path($id, $name);
    }

    /**
     * Update phone for employee
     *@return boolean
     *
     */
    public function updatePhone()
    {
        $this->schol->updatePhone( $this->input->post('emp'), $this->input->post('phone'));
        return redirect('/affirs/Scholarship/show/'. $this->input->post('schol'));

    }

    /**
     * update Email for employee
     *@return boolean
     */
    public function updateEmail()
    {
        $this->schol->updateEmail( $this->input->post('emp'), $this->input->post('email'));
        return redirect('/affirs/Scholarship/show/'. $this->input->post('schol'));

    }

    public function getDepart()
    {
        $departs = $this->schol->getDepartWhereColID($this->input->post('coll_id'));
        foreach ($departs as $depart){
            echo "<option value='".$depart->DEP_ID."'>".$depart->DEP_NAME."</option>";
        }
    }


    /**
     * @param $emp
     * @param $prog
     * @return array
     */
    public function if_session($emp, $prog)
    {

        if ($emp == '' && $prog == '') {
            $emp = $this->session->emp_no;
            $prog = $this->session->prog_id;
        }
        return array($emp, $prog);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function data1()
    {
        $data['specials'] =  $this->schol->getSpecial();
        $data['countries'] = $this->schol->getCountry();
        $data['universities'] = $this->schol->getUniversities();
        $data['collages'] = $this->schol->getCollages();
        $data['program'] = $this->schol->findProgram($this->session->prog_id);
        $data['find'] = $this->schol->find_Schol($this->session->schol_id);
        $data['degrees'] = $this->schol->nextDegree($this->session->schol_id);
        return $data;
    }



    /**
     * @return array
     */
    public function data2()
    {
        $data2 = array(
            'LOC_NO' => user()->LOC_NO,
            'DEP_ID' => user()->DEP_ID,
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'YEAR_ID' => date('Y'),
            'USR_NO' => user()->USR_NO
        );
        return $data2;
    }



    /**
     * @param $id
     * @param $name
     */
    public function delete_attache_from_path($id , $name)
    {
        $this->file->remove(APPPATH . '/uploads/' . $id . '/' . $name);
        return redirect('/affirs/Scholarship/show/'.$id);
    }


    public function t()
    {
        $data['dolar'] = $this->schol->sumExpByDolar(55)->AMOUNT;
        $data['bound'] = $this->schol->sumExpBound(55)->AMOUNT;

        var_dump($data);
    }

}
