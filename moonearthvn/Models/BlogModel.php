<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends BaseModel
{
    protected $useSoftDeletes = true;
    protected $useTimestamps  = true;
    protected $table = 'blogs';
    protected $allowedFields = ['blog_title', 'blog_content', 'deleted_at'];
    
    // protected $primaryKey = 'id';
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $beforeInsert = ['changeContent'];
    // protected $beforeUpdate = ['changeName'];
    
    // public function changeName(array $data){
    //     $data['data']['blog_title'] = 'Change before update ' . $data['data']['blog_title']; 
    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    //     return $data;
    // }
    
    // public function changeContent(array $data){
    //     $data['data']['blog_content'] = 'Change content update ' . $data['data']['blog_content']; 
    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    //     return $data;
    // }

}