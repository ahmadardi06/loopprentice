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
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
 ?>