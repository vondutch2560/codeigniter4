<?php namespace App\Libraries;

class Blog {
    public function blogItem($params) {
        return view('components/blog_item', $params);
    }
}

?>