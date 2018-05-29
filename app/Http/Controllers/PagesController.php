<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = 'Welcome To Laravel';
      return view('pages.index', compact('title'));
      // return view('pages.services')->with('title',$title);

    }
    public function services(){
      $data = array(
        'title' => 'Welcome To Services',
        'services' => ['Web Devlopment', 'Design', 'Programming']
      );
      return view('pages.services')->with($data);

    }
}
