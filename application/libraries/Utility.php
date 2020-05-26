<?php   defined('BASEPATH') OR exit('No direct script access allowed');

    class Utility{
        public static function getsocial(){
            $CI =& get_instance();

            $CI->db->select('*')->from('houdinv_social_links');
            $getSearchsocial = $CI->db->get()->row();
            return $getSearchsocial;

        }
    }

?>