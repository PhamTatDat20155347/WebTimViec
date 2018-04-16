<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Chart;
use DB;

class HomeController extends Controller
{
    public function charts()
    {
    	$users = $this->dataCountUser();
    	$post = $this->dataCountPost();
    	$dates = $this->dateofmonth();
    	$charts = [

		    'chart' => ['type' => 'line'],
		    'title' => ['text' => 'User statistics and article stats'],
		    'xAxis' => [
		        'categories' => $dates,
		    ],
		    'yAxis' => [
		        'title' => [
		            'text' => 'Total'
		        ]
		    ],
		    'series' => [
		        [
		            'name' => 'user',
		            'data' => $users
		        ],
		        [
		            'name' => 'post',	
		            'data' => $post
		        ],
		    ]
		];
		return view('admin/index', ['chart'=>$charts]);
    }

    private function dateofmonth(){
	    $start = Carbon::now()->subMonths(1);
	    $end = $start->addDay(1);
	    $datesArray = [];
	    $dates = [];
	    for ($i = 0; $i <= 30; $i++) {
	        $datesArray[] = $end->toDateTimeString();
	        $end->addDay(1);
	    }
	    for ($i=0; $i <= 30 ; $i++) {
	    	$dates[] = Carbon::parse($datesArray[$i])->format('Y-m-d');
	    }

	    return $dates;
    }

    private function dataCountUser(){
    	$dates = $this->dateofmonth();
    	$users = [];
    	for ($i=0; $i <= 30 ; $i++) { 
    		$date = $dates[$i];
    		$users[] = DB::table('users')
                ->where('created_at', 'like', $date.'%')
                ->count();
    	}
    	return $users;
    }

    private function dataCountPost(){
    	$dates = $this->dateofmonth();
    	$post = [];
    	for ($i=0; $i <= 30 ; $i++) { 
    		$date = $dates[$i];
    		$post[] = DB::table('post')
                ->where('created_at', 'like', $date.'%')
                ->count();
    	}
    	return $post;
    }
}
