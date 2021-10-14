<?php
namespace Application\Controllers;

use Application\Base\Controller;

class HomeController extends Controller {
    public function index() {
        return $this->view();
    }
}