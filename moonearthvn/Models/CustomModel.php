<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{

    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function getBlogs(){
        $builder = $this->db->table('blogs');
        $builder-> join('users', 'blogs.author = users.id');
        $blog = $builder->get()->getResult();
        return $blog;
    }
}

?>