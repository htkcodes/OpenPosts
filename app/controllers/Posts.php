<?php

class Posts extends Controller{

    public function __construct()
    {
        if(!isLoggedIn())
        {
            redirect('users/login');
        }
        $this->postModel=$this->model('Post');
        $this->userModel=$this->model('User');
    }

    public function index()
    {
        $post=$this->postModel->getPosts();

        $data=[
            'posts'=>$post
        ];
        $this->view('posts/index',$data);
    }
    public function add()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
//Sanitize POST ARRAY

$_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

$data=[
    'title'=>trim($_POST['title']),
    'body'=>trim($_POST['body']),
    'user_id'=>$_SESSION['user_id'],
    'title_err'=>'',
    'body_err'=>''
];

//Validation

if(empty($data['title']))
{
    $data['title_err']='Please enter post title';
}
if(empty($data['body']))
{
    $data['body_err']='Please enter post content';
}

if(empty($data['title_err'])&& empty($data[
'body_err'
]))
{
if($this->postModel->addPost($data))
{
    flash('post_message','Post Added');
    redirect('posts');
}
else{
    
    die('lel good error');
}




}
else{
    //Load view with error
    $this->view('posts/add',$data);
}


        }
        else{
            $data=[
                'title'=>'',
                'body'=>'',
                'title_err'=>'',
                'body_err'=>''
            ];
        }
      
        $this->view('posts/add',$data);
    }
    public function show($id)
    {
        $post=$this->postModel->getPostById($id);
        $user=$this->userModel->findUserById($post->user_id);
        $data=['post'=>$post,
    'user'=>$user
    ];

        $this->view('posts/show',$data);
    }



public function edit($id)
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
//Sanitize POST ARRAY

$_POST =filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

$data=[
'id'=>$id,
'title'=>trim($_POST['title']),
'body'=>trim($_POST['body']),
'user_id'=>$_SESSION['user_id'],
'title_err'=>'',
'body_err'=>''
];

//Validation

if(empty($data['title']))
{
$data['title_err']='Please enter post title';
}
if(empty($data['body']))
{
$data['body_err']='Please enter post content';
}

if(empty($data['title_err'])&& empty($data[
'body_err'
]))
{
if($this->postModel->updatePost($data))
{
flash('post_message','Post Updated');
redirect('posts');
}
else{

die('lel good error');
}




}
else{
//Load view with error
$this->view('posts/edit',$data);
}


    }
    else{
        $post=$this->postModel->getPostById($id);

        if($post->user_id!=$_SESSION['user_id'])
        {
            redirect('posts');
        }
        //Checks for owner

        $data=[
            'id'=>$id,
            'title'=>$post->title,
            'body'=>$post->body,
            'title_err'=>'',
'body_err'=>''
        ];
    }
  
    $this->view('posts/edit',$data);
}

public function delete($id)
{
   
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($post->user_id!=$_SESSION['user_id'])
        {
            redirect('posts');
        }
        //Checks for owner

if($this->postModel->deletePosts($id))
{
    flash('post_message','Post Deleted');
    redirect('posts');

}
else{
    die('lel good error');
}
    }
    else{
        redirect('posts');
    }
}
}