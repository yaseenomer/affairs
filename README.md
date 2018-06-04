# affairs

Scientific Affairs System


New Features
--------
deleteAttache



```PHP
/**
     * @params
     *  $table => Table name in database
     * $app_id => APP_ID
     * $file_bath => FILE_BATH => name of attache 
     * $identifier_column => for example in APPLICATION_PRE_EDU(PRE_EDU_SER)
     * $identifier_value => value of identifier_column (1,2,3,...etc)
     * $folder => (CV,EXPERINCES, PRE_EDU,...etc)
     */

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

### Usage Instructions

inside your controller for example 

```PHP

class Apply  extends CI_Controller
{
  public function test()
    {
        deleteAttache('APPLICATION_PRE_EDU','140','Capture3.PNG','PRE_EDU_SER','5','pre_edu');
    }

}

```



