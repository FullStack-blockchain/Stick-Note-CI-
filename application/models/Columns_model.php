<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Columns_model extends CRM_Model
{
	protected $table_name = "columns";
    public function __construct()
    {
        parent::__construct($this->table_name);
    }    
}
?>