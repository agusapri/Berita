<?php 
  
 class TestUnit extends CI_Controller 
{ 
        public function __construct() 
        { 
                parent::__construct(); 
        } 
  
        private function kategori() 
        {
                return 7;
        } 
                public function test() 
        {
                   $test = $this->kategori(); 
                   $expected_result = 7; 
                   $test_name = "test menampilkan kategori"; 
     
                   echo $this->unit->run($test, $expected_result, $test_name); 
        }     
} 

  
                     
 