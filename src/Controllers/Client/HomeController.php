<?php

namespace Kobiet\Hoinghien\Controllers\Client;

use Kobiet\Hoinghien\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('client/home');
    }
}
