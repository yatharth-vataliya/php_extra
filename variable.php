<?php

/*	class nothing{

    public $helle=['nothing'=>'valid','why','is_everything'=>'valid_form_there'];
public static function call(){
    foreach (array('EVERYTHING',' & ','NOTHING') as $value) {
        echo $value;
    }


}
public function clear()
    {
        $props = array('thumb_marker', 'library_path', 'source_image', 'new_image', 'width', 'height', 'rotation_angle', 'x_axis', 'y_axis', 'wm_text', 'wm_overlay_path', 'wm_font_path', 'wm_shadow_color', 'source_folder', 'dest_folder', 'mime_type', 'orig_width', 'orig_height', 'image_type', 'size_str', 'full_src_path', 'full_dst_path');

        foreach ($props as $val)
        {
            $this->$val = '';
        }


    }


}
    // nothing::call();
    nothing::clear();*/ // i don't know the problem of above code that is copied from the codeigniter framework of php;

$name = 'yatharth vataliya';
class main
{
    public $variable; // we can create public variable using var keyword;

    public function display()
    {
        // echo $name; // this will give Notice: Undefined variable: name in G:\htdocs\PHP_EXTRA\variable.php on line 33 because we calling $name variable before telling the compiler that you have to call the global $name variable as below mentioned; That is working demo of it;
        global $name;
        echo $name; // this will work because we are calling the global variable $name at this moment;
    }
}
$main = new main;
$main->display();
