<?php namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model 
{
    public function __construct(){
        parent::__construct();
    }

    public function restore($row){
        $row['deleted_at'] = 0;
        $this->save($row);
    }
}
