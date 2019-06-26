<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends MX_Controller {

        function __construct() {
            parent::__construct();
                        
            $this->load->model('Model','model'); 
        }
    
        public function index()
        {

            $this->get_header();

            $this->get_content();  

            $this->get_footer();  

        }

        public function get_header()
        {           

            $data = $this->model->getData('get_menu_template');

            if($data->status==200){
                $data = array(
                    'data_menu' => $data->data->data_menu
                );
            }

            $this->load->view('header', $data);

        }

        public function get_content()
        {
            
           $response = $this->model->getData('get_price_template');

            $data = $response->data->data_paket;
        
           /*get max pengguna */
           $users = $this->max_attribute_in_array($data,'pengguna');

           for ($i=0; $i < count($data); $i++) { 

                $data[$i]->fasilitas = array();

                /*set best seller */
                if($data[$i]->pengguna==$users)$data[$i]->best_seller=1;

                /*set price structure */
                $price = number_format($data[$i]->pr_new_price,0,",",".");
                $data[$i]->pr_new_price_1 = explode(".",$price)[0];
                $data[$i]->pr_new_price_2 = ".".explode(".",$price)[1];

                if(explode(".",$data[$i]->resource_power)[1]==0)$data[$i]->resource_power=explode(".",$data[$i]->resource_power)[0];

                /*set fasilitas */
                 $data[$i]->fasilitas[] = '<b>'.ucfirst($data[$i]->disk_space).'</b> Disk Space';
                 $data[$i]->fasilitas[] = '<b>'.ucfirst($data[$i]->bandwidth).'</b> Bandwidth';
                 $data[$i]->fasilitas[] = (isset($data[$i]->pop3_email))?'<b>'.ucfirst($data[$i]->pop3_email).'</b> Bandwidth':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->databases))?'<b>'.ucfirst($data[$i]->databases).'</b> Databases':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->addon_domains))?'<b>'.ucfirst($data[$i]->addon_domains).'</b> Addon Domains':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->backup))?'<b>'.ucfirst($data[$i]->backup).'</b> Backup':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->backup_and_restore))?'<b>'.ucfirst($data[$i]->backup_and_restore).'</b> Backup And Restore':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->domain) and $data[$i]->domain=='gratis')?'<b>Domain Gratis</b> Selamanya':'<b>'.ucfirst($data[$i]->domain).'</b> Domain';
                 $data[$i]->fasilitas[] = (isset($data[$i]->ssl))?'<b>'.ucfirst($data[$i]->ssl).' SSL</b> Gratis Selamanya':'';
                 $data[$i]->fasilitas[] = (isset($data[$i]->name_server))?'<b>'.ucfirst($data[$i]->name_server).'</b> Name Server':'';
                if(isset($data[$i]->layanan_support) and $data[$i]->layanan_support=='prioritas'){
                    $rate = '';
                    for($x=0; $x < 5; $x++) { 
                        $rate .= '<span class="text-primary"><i class="fas fa-star"></i></span>'; 
                    };
                     $data[$i]->fasilitas[] = '<b>'.ucfirst($data[$i]->layanan_support).'</b> Layanan Support <br>'.$rate.'';
                }
               
                 $data[$i]->fasilitas[] = (isset($data[$i]->mail_protection) and $data[$i]->mail_protection=='SpamAssasin')?'<b>'.$data[$i]->mail_protection.'</b> Mail Protection':(isset($data[$i]->mail_protection) and $data[$i]->mail_protection=='SpamExpert')?'<b>'.$data[$i]->mail_protection.'</b> Pro Mail Protection':'';

           }

           $data = array(
                'data' => $data
            );

            $this->load->view('content', $data);  

        }

        function max_attribute_in_array($array, $prop) {
            return max(array_map(function($o) use($prop) {
                                    return $o->$prop;
                                 },
                                 $array));
        }

        public function get_footer()
        {
            
            $this->load->view('footer');

        }

    
    }
    
    /* End of file Home.php */
    
?>