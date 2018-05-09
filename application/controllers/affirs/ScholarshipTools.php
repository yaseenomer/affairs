<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 1/24/2018
 * Time: 2:01 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ScholarshipTools  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('affirs/M_Scholarship', 'schol');
        $this->load->model('affirs/M_Scholarship_Decisions', 'dec');
        $this->load->model('affirs/M_Scholarship_expenses','exp');
        $this->load->model('Scholarships_extend_model/Scholar_extend_model','ext');
        $this->load->model('UniversitiesModel','unv');
        $this->load->model('CountriesModel');
        $this->load->model('Specialties/Specialties_mod','Specialties_mod');

        $this->auth_model->middlewareAuth();

    }

    /**
     *
     */
    public function index()
    {


    }


    /**
     * UniversitiesSetItems
     */

    public function UniversitiesSetItems()
    {

        $items = array(
            'COUNTRY_NO' => $this->input->post('COUNTRY_NO'),
            'UNV_ARAB_NAME' => $this->input->post('UNV_ARAB_NAME'),
            'UNV_ENG_NAME' => $this->input->post('UNV_ENG_NAME'),
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO
        );

        $this->unv->AddUniversities($items);
        return redirect('affirs/Scholarship/insert2');

    }

    /**
     *  UniversitiesSetItems
     */

    public function addCountry()
    {
        $items = array(
            'COUNTRY_NAME' => $this->input->post('COUNTRY_NAME'),
            'ENTRY_DATE' => date('d-M-y'),
            'USR_NO ' => user()->USR_NO
        );
        $this->CountriesModel->AddCountries($items);
        return redirect('affirs/Scholarship/insert2');
    }

    /**
     *  getUnvWhereCountry
     */
    public function getUnvWhereCountry()
    {
        $id = $this->input->post('count');

        $unvs = $this->schol->getUniversitiesWhereCountry($id);
        foreach ($unvs as $unv){
            echo "<option value='$unv->UNV_ID'>$unv->UNV_ARAB_NAME</option>";
        }

    }



    public function insertExtend()
    {
        $scol_id =  $this->input->post('scholar_id');

        $data = $this->data_for_extend();

        $uploaddata = handle_attache($scol_id,'/affirs/Scholarship/show/'.$scol_id);

        upload_attache_schol($scol_id,$uploaddata,$this->input->post('type'));

        $this->session->set_flashdata('success', 'تم رفع الملف بنجاح');

        $this->ext->insert($data);

        return redirect('affirs/Scholarship/show/'.$scol_id);
    }



    /**
     *  addSpecialties
     */
    public function addSpecialties()
    {
        $items = array(
            'SP_NAME' => $this->input->post('SP_NAME'),
            'LOC_NO' => 1,
            'DEP_ID' => 1,
            'SP_DESC' => $this->input->post('SP_DESC'),
            'ENTRY_DATE' => date('d-M-y') ,
            'USR_NO' => user()->USR_NO
        );

        $this->Specialties_mod->addSpeci($items);
        return redirect('/affirs/Scholarship/insert2');
    }


    public function add_details()
    {
        $this->schol->add_details($this->data_for_scholar_detail());
        redirect('/affirs/Scholarship/show/'.$this->input->post('SCHOLAR_ID'));
    }



    /**
     * @return array
     */
    public function data_for_scholar_detail()
    {
        $data = array(
            'SCHOLAR_ID' => $this->input->post('SCHOLAR_ID'),
            'START_DATE' => date('d-M-y',strtotime($this->input->post('START_DATE'))),
            'END_DATE' => date('d-M-y',strtotime($this->input->post('END_DATE'))),
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'USR_NO' => user()->USR_NO
        );
        return $data;
    }

    /**
     * @return array
     */
    public function data_for_extend()
    {
        $data = array(
            'SCHOLAR_ID' => $this->input->post('scholar_id'),
            'EXT_SER' => rand(1, 99),
            'EXT_DURRATION' => $this->input->post('EXT_DURRATION'),
            'START_DATE' => date('d-M-y', strtotime($this->input->post('START_DATE'))),
            'END_DATE' => date('d-M-y', strtotime($this->input->post('END_DATE'))),
            'EXT_REASON' => $this->input->post('EXT_REASON'),
            'RECOMMENDATION' => $this->input->post('RECOMMENDATION'),
            'EMP_NO' => $this->input->post('super_name'),
            'ENTRY_DATE' => date('d-M-y'),
            'UPDATE_DATE' => date('d-M-y'),
            'USR_NO' => user()->USR_NO
        );
        return $data;
    }


    public function t()
    {



    }


}
