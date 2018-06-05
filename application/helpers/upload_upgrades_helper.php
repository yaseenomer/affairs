 <?php
/**
 * Created by PhpStorm.
 * User: yaseen
 * Date: 1/22/2018
 * Time: 1:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('atta_loop'))
{
    function  atta_loop($filesCount, $id , $folder)
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
            $upload_path =FCPATH.'uploads'.DIRECTORY_SEPARATOR.'attach'.DIRECTORY_SEPARATOR.$folder;
            $bath = $upload_path . $userFile;

            if (!file_exists($bath)) {
                mkdir($bath, 0777, true);

            }


            $uploadPath = $upload_path . $userFile;
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = '*';
            $config['max_size'] = 9000000;
            $config['max_width'] = 900000;
            $config['max_height'] = 900000;

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




//if ( ! function_exists('attache'))
//{
    function  attache($id,$folder)
    {

        if (!empty($_FILES['attachs']['name'])) {
            $filesCount = count($_FILES['attachs']['name']);
            $uploadData = atta_loop($filesCount, $id,$folder);
            return $uploadData[0]['file_name'];

        }
    }

//}

 if ( ! function_exists('deleteAttache'))
 {

     function  deleteAttache($table,$app_id,$file_bath,$identifier_column,$identifier_value,$folder)
     {
         $CI =& get_instance();

           $upload_path =FCPATH.'uploads'.DIRECTORY_SEPARATOR.'attach'.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$app_id.DIRECTORY_SEPARATOR.$file_bath;

          $delete =  $CI->db->where('APP_ID',$app_id)->where('FILE_BATH',$file_bath)->where($identifier_column,$identifier_value)->delete($table);

          if ($delete){

              if(file_exists($upload_path)) {

                  unlink($upload_path);
              }
          }

     }

 }

 // this function remove folder if empty now not work it need some fix problem


// if ( ! function_exists('removeFolderIfEmpty'))
// {
//
//     function  removeFolderIfEmpty($folder,$app_id)
//     {
//         $upload_path =FCPATH.'uploads'.DIRECTORY_SEPARATOR.'attach'.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$app_id;
//         $check = glob($upload_path.DIRECTORY_SEPARATOR."*");
//
//        if(empty($check)){
//            chmod(FCPATH.'uploads',0777);
//            unlink($upload_path);
//        }
//
//
//
//     }
//
// }




