<?php

namespace Books\Controller;

use Books\Model\Books;
use Symfony\Component\HttpFoundation\Response;

class BooksController {

	public function indexAction($page, $test){

		$model = new Books();
		$data = $model->getList();

		echo'<pre>';
		print_r($data);

		return new Response($page.','.$test);
	}
}