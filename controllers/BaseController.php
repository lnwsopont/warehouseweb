<?php
    class BaseController
    {
        /**
         *
         * @var Database 
         */
        protected $db;
        
        public function __construct() {
            $this->db = Database::create();
        }
    }


