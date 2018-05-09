<?php
/**
 * Created by PhpStorm.
 * User: Yaseen
 * Date: 4/11/2018
 * Time: 12:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');



/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('main_header'))
{
    function main_header(array $header)
    {
        echo <<<'TAG'
          
                   <div class="page-content-wrapper">
                   <div class="page-content">
                       <div class="page-header">
                         <div class="header-title">
                               
TAG;
        foreach ($header as $item){
            echo " <span class='h-main'>$item / </span>";
        }
        echo <<<'TAG'

</div>
        </div>
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
TAG;

    }


}



/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */


if ( ! function_exists('canvas_header'))
{
   function canvas_header($header = '')
    {
        echo <<<'TAG'
          <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i><span class="main_color"> 
TAG;
                               echo $header ;
                               echo <<<'TAG'
                                </span>
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=" تقوم بطي هذة المساحة  ">
TAG;
                               echo ' </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="display: block;">';



                   

    }


}


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */


if ( ! function_exists('canvas_footer'))
{
    function canvas_footer()
    {
        echo <<<'TAG'
          
                    </div>
                    </div>
                    </div>
                    </div>
TAG;
    }


}



/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */


if ( ! function_exists('tab_left_header_open'))
{
    function tab_left_header_open()
    {
        echo <<<'TAG'
        <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <ul class="nav nav-tabs tabs-left">
TAG;
    }
}


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tab_left_header_close'))
{
    function tab_left_header_close()
    {
        echo " </ul></div>";
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tab_header_active'))
{
    function tab_header_active($id,$icon,$name,$option = '')
    {

        echo  " <li class='active'><a href='#$id' data-toggle='tab'>
                        <i class='$icon'> </i>$name";
                       if ($option != null){
                           echo $option;
                       }"
                    
                    </a>
                </li>";
    }
}


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tab_header'))
{
    function tab_header($id,$icon,$name,$option = '')
    {
        echo  "
                <li class=''><a href='#$id' data-toggle='tab'>
                        <i class='$icon'> </i>$name";
                        if ($option != null){
                           echo $option;
                       }"
                    </a>
                </li>
            ";
    }
}


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tab_content_open'))
{
    function tab_content_open()
    {
        echo  "<div class=\"col-md-9 col-sm-9 col-xs-9\">
            <div class=\"tab-content\">";
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tab_content_id_open'))
{
    function tab_content_id_open($id)
    {
        echo  "<div class='tab-pane fade active in' id='$id'>";
    }
}


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('close_div'))
{
    function close_div()
    {
        echo  "</div>";
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */


if ( ! function_exists('tab_content_close'))
{
    function tab_content_close()
    {
        echo  "</div></div></div>";
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('tip'))
{
    function tip($title,$position = 'top')
    {
        echo  "data-toggle='tooltip' data-placement='$position' title='$title' ";
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */


if ( ! function_exists('flash'))
{
    function flash($message,$type = 'success')
    {
        if ($message) {
            echo "<div class='alert alert-$type'>$message</div> ";
        };
    }
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 */

if ( ! function_exists('flashs'))
{
    /**
     * @param string $success
     * @param string $danger
     */
    function flashs($success = '', $danger ='')
    {
        if ($success) {
            echo "<div class='alert-success'>$success</div>";
        }elseif ($danger){
            echo "<div class='alert-danger'>$danger</div> ";

        };
    }
}






if ( ! function_exists('open_row'))
{
    function open_row($width = 12,$offset = '')
{
    $off = ($offset == '') ? '' :"col-md-offset-$offset";

    echo "<div class='row'><div class='col-md-$width $off'>";

}
}

if ( ! function_exists('close_row'))
{
    function close_row()
    {


        echo "</div></div>";

    }
}

if ( ! function_exists('lable'))
{
    function lable($lable)
    {

        echo " <label class='main_color'> $lable </label>";

    }
}


if ( ! function_exists('data'))
{
    function data($name)
    {
        return array(
            'class'=>'form-control',
            'name' =>$name
        );


    }
}










