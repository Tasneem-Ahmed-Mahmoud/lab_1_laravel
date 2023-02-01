<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
function index(){
    $posts=[
["id"=>1,"title"=>"PHP","postedBy"=>"Ahmed","createdAt"=>"2000-2-22"],
["id"=>2,"title"=>"JS","postedBy"=>"Alaa","createdAt"=>"2022-2-22"],
["id"=>3,"title"=>"JAVA","postedBy"=>"Ahmed","createdAt"=>"2000-2-22"],
    ];

    return view("posts.index",["posts"=>$posts]);
}

function show($id){

$post=["id"=>3,"title"=>"JAVA","descreption"=>"Controllers are not required to extend a base "];
$user=["id"=>1,"name"=>"Ahmed","email"=>"ahmed@.com","createdAt"=>"2000-2-22"];
return view("posts.show",["post"=>$post,"user"=>$user ]);

}

}
