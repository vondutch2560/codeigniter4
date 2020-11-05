<?php namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CustomModel;

class Blog extends BaseController
{
    public function index(){
        $model = new BlogModel();
        $blogs = $model->findAll();
        if($blogs)
            $data = [
                'meta_title' => 'List Blogs',
                'blogs' => $blogs
            ];
        else
            $data = [
                'meta_title' => 'No Blogs'
            ];

        return view('blog', $data);
    }

    public function post($id) {
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $data = [
                'meta_title' => $post['blog_title'],
                'title' => $post['blog_title'],
                'post' => $post
            ];
        } else {
            $data = [
                'meta_title' => 'Blog not found',
                'title' => 'Blog not found'
            ];
        }
        return view('single_post', $data);
    }

    public function new(){
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post'
        ];
        
        if ($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $model->save($_POST);
        }

        return view('new_post', $data);
    }


    public function edit($id){
        $model = new BlogModel();
        $post = $model->find($id);
        $data = [
            'meta_title' => $post['blog_title'],
            'title' => $post['blog_title'],
            'post' => $post
        ];
        
        if ($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $_POST['id'] = $id;
            $model->save($_POST);
            return redirect()->to('/blog');
        }

        return view('edit_blog', $data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post) {
            $model->delete($id);
            return redirect()->to('/blog');
        }
    }

    public function restore($id){
        $model = new BlogModel();
        $post = $model->onlyDeleted()->find($id);
        if($post) {
            $model->restore($post);
            return redirect()->to('/blog');
        }
        
    }
}
