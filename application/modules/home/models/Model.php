<?php


    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model extends CI_Model {

        var $base_api_url	= "http://masakindo.id/ws/global_ws/";

        function getData($service_name){

            $data = array('consID' => '67549029836465');

            $url = $this->base_api_url.'/'.$service_name; 
           
            $field_string = http_build_query($data);

            $options = array(
                    CURLOPT_RETURNTRANSFER => true,     // return web page
                    CURLOPT_HEADER         => false,    // don't return headers
                    CURLOPT_FOLLOWLOCATION => true,     // follow redirects
                    CURLOPT_ENCODING       => "",       // handle all encodings
                    CURLOPT_AUTOREFERER    => true,     // set referer on redirect
                    CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
                    CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
            );

            $ch = curl_init($url);
            curl_setopt_array($ch, $options);

            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
            // execute!
            $response = curl_exec($ch);
            // close the connection, release resources used

            curl_close($ch);

            // do anything you want with your response
            return json_decode($response);

        }

        public function getMenu($table)
        {
            $this->db->from($table);
            $this->db->where(array('is_active' => 'Y'));
            $this->db->order_by('menu_counter','ASC');
            $query = $this->db->get();
            return $query->result(); 
        }
        
        public function getPrice($table)
        {
            $this->db->from($table);
            $this->db->join('tmp_price',''.$table.'.paket_id=tmp_price.paket_id','left');
            $this->db->join('tmp_fasilitas',''.$table.'.paket_id=tmp_fasilitas.paket_id','left');
            $this->db->where(array(''.$table.'.is_active' => 'Y'));
            $query = $this->db->get();
            return $query->result();
        }

              
    }

    /* End of file Model.php */


?>