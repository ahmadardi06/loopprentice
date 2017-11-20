<?php 
	class blog_single_PrenticeController {
        public function index() {
    		$data = BlogModelFront::getOneBlog($_GET['idblog']);
        	require_once('views/blog_prentice/single.php');
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>