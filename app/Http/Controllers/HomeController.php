<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function home(){
    	return view('kids/list', array(
    			'data' => $this->listPro()
    		));
    }

    public function listPro(){
    	$pros = array();
    	array_push($pros, array(
    			'id' => 1,
    			'name' => '安徒生童话之神秘的妈妈',
    			'imgurl' => 'c_a1.jpg',
    			'desc' => '',
    			'source' => 'a1.m4a',
    		));
    	array_push($pros, array(
    			'id' => 2,
    			'name' => '白雪公主',
    			'imgurl' => 'c_a2.jpg',
    			'desc' => '',
    			'source' => 'a2.m4a',
    		));
    	array_push($pros, array(
    			'id' => 3,
    			'name' => '世界上下五千年',
    			'imgurl' => 'c_a3.jpg',
    			'desc' => '',
    			'source' => 'a3.mp3',
    		));
    	array_push($pros, array(
    			'id' => 4,
    			'name' => '小王子',
    			'imgurl' => 'c_a4.jpg',
    			'desc' => '',
    			'source' => 'a4.m4a',
    		));
    	return (object)$pros;
    	exit;
    }
}
