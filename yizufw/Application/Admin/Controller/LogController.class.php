<?php
namespace Admin\Controller;
use Think\Controller;
class LogController extends Controller {

    public function log_list(){
        $this->display('Log/log_list');
    }


} 