<?php
/**
 * Created by PhpStorm.
 * User: yaseen
 * Date: 1/22/2018
 * Time: 1:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('attache_loop'))
{
    function  attache_loop($filesCount, $id)

    {

        $CI =& get_instance();

        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['attach']['name'] = $_FILES['attachs']['name'][$i];
            $_FILES['attach']['type'] = $_FILES['attachs']['type'][$i];
            $_FILES['attach']['tmp_name'] = $_FILES['attachs']['tmp_name'][$i];
            $_FILES['attach']['error'] = $_FILES['attachs']['error'][$i];
            $_FILES['attach']['size'] = $_FILES['attachs']['size'][$i];

            // create folder  attachment for this user

            $userFile = '\\' . $id;
            $upload_path = realpath(APPPATH.'/uploads' );

            $bath = $upload_path . $userFile;

            if (!file_exists($bath)) {
                mkdir($bath, 0777, true);

            }


            $uploadPath = $upload_path . $userFile;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = '*';
            $config['max_size'] = 9000;
            $config['max_width'] = 9000;
            $config['max_height'] = 9000;

            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);
            if ($CI->upload->do_upload('attach')) {
                $fileData = $CI->upload->data();
                $uploadData[$i]['file_name'] = $fileData['file_name'];

            }
        }
        return $uploadData;

    }


}


if ( ! function_exists('error_upload'))
{
    function  error_upload($uploadData,$url='')
    {
        if (empty($uploadData))
        {
            $this->session->set_flashdata('error', 'لم يتم رفع الملف ');
            return redirect($url);
        }



    }


}

if ( ! function_exists('handle_attache'))
{
    function  handle_attache($id,$url='')
    {

        if (!empty($_FILES['attachs']['name'])) {
            $filesCount = count($_FILES['attachs']['name']);
            $uploadData = attache_loop($filesCount, $id);
            error_upload($uploadData,$url);
            return $uploadData;

        }
    }


}

if ( ! function_exists('upload_attache_schol'))
{
    function upload_attache_schol($id, $uploadData,$type)
    {
        $CI =& get_instance();
        $x =  count($uploadData);
        for ($i = 0; $i < $x; $i++) {

            $data_for_attach = array(
                'SCHOLAR_ID' => $id,
                'ATT_SER' => rand(1, 99999),
                'FILE_BATH' => $uploadData[$i]['file_name'],
                ' ATT_TYPE' => $type, # att_type == 1   Certificates, courses and skills  main attache
                'ENTRY_DATE' => date('d-M-y'),
                'UPDATE_DATE' => date('d-M-y'),
                'USR_NO' => user()->USR_NO,
            );
            $CI->load->model('affirs/M_Scholarship', 'schol');

            $CI->schol->upload($data_for_attach);
        }
    }


}


