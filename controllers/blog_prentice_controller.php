<?php 
	class blog_PrenticeController {
        public function index() {
        	if(isset($_GET['category'])) {
            	$datablog = BlogModelFront::getBlogCategory($_GET['category']);
        	} 
        	else 
        	{
            	$datablog = BlogModelFront::getBlog();
        	}
            require_once('views/blog_prentice/index.php');
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>