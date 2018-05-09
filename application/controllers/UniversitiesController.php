<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset =  utf-8');

class UniversitiesController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UniversitiesModel');
        $this->load->model('GeneralModel');
        $this->auth_model->middlewareAuth();

    }
/*****************************/

	public function index()
    {

            $data['approve'] = $this->session->flashdata('approve');
            $data['addcon'] = $this->session->flashdata('addcon');
            $data['editcon'] = $this->session->flashdata('editcon');
            $data['deletecon'] = $this->session->flashdata('deletecon');
            $data['dis_approve'] = $this->session->flashdata('dis_approve');
            $data['generals'] = $this->UniversitiesModel->GetUniversities();
            $this->load->view('Universities/UniversitiesShow', $data);

    }
/*************************************/
    public function AddUniversities(){

           $data2['levels'] = $this->UniversitiesModel->getLevels();
		   $this->load->view('Universities/AddUniversities', $data2 );

    }
/*******************************************************/
public function ShowUniversities($id){

        $data['d'] = $this->UniversitiesModel->GetUniversitiesWhere($id);
        
        $this->load->view('Universities/ShowUniversities', $data);
        

        }
/*******************************************************/
    public function Showcountry($id){

        $data = $this->UniversitiesModel->GetCountrname($id);

        $this->load->view('Universities/ShowUniversities', $data);

        }
    /*******************************************************/

    public function EditUniversities($unid){


        $data['approves'] = $this->UniversitiesModel->GetUniversitiesWhere($unid);
        $this->load->view('Universities/EditUniversities',$data);

        
    }
    /*****************************************/
    
    public function UpdateUniversitiesItem($conid)
    {

        $array = array(
             'UNV_ARAB_NAME' => $this->input->post('UNV_ARAB_NAME'),
             'UNV_ENG_NAME' => $this->input->post('UNV_ENG_NAME'),
             'ENTRY_DATE' => date('d-M-y')  ,
             'USR_NO' =>  user()->USR_NO  ,     
        );
       
        $this->UniversitiesModel->UpdateUniversities($conid, $array);
        $this->session->set_flashdata('editcon', 'تم التعديل بنجاح  ');
        return redirect('/UniversitiesController');


    }
    /**************************************/
    
     public function UniversitiesSetItems()
    {

         $items = array(
             'COUNTRY_NO' => $this->input->post('COUNTRY_NO'),
             'UNV_ARAB_NAME' => $this->input->post('UNV_ARAB_NAME'),
             'UNV_ENG_NAME' => $this->input->post('UNV_ENG_NAME'),
             'ENTRY_DATE' => date('d-M-Y') ,
             'USR_NO' => user()->USR_NO   
            );

        $this->session->set_flashdata('addcon', ' تمت اضافة البيانات بنجاح  ');
         
         $this->UniversitiesModel->AddUniversities($items);
        return redirect('/UniversitiesController');

    }
    /**************************************************/
    
     public function DeleteUniversities($id, $UNIVER_NO = '')
    {

        $this->UniversitiesModel->DeleteUniversities($id, $UNIVER_NO);
        $this->session->set_flashdata('deletecon', ' تم حذف البيانات بنجاح ');
        return redirect('/UniversitiesController');



    }
/************************************************/
}