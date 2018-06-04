# affairs

Scientific Affairs System


New Features
--------
deleteAttache

```PHP

function  deleteAttache($table,$app_id,$file_bath,$identifier_column,$identifier_value,$folder)
     {
         $CI =& get_instance();

           $upload_path=FCPATH.'uploads'.DIRECTORY_SEPARATOR.'attach'
                          .DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$app_id
                          .DIRECTORY_SEPARATOR.$file_bath;

          $delete =  $CI->db->where('APP_ID',$app_id)
                            ->where('FILE_BATH',$file_bath)
                             ->where($identifier_column,$identifier_value)
                             ->delete($table);

          if ($delete){

              if(file_exists($upload_path)) {

                  unlink($upload_path);
              }
          }

     }

```



