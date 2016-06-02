<?php

namespace moment{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_moment extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('moment', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/moment/moment-{$this->version}/static/js/moment_locales.min.js")));
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>