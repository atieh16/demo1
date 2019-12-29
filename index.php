<?php
date_default_timezone_set('Asia/Tehran');
# include all classes
foreach (glob("./class/*.php") as $filename) {
    include $filename;
}

@session_start();
db::init();




route('GET', '/', function () {

    $core = new Core;
    $themeURL = $core->getThemeURL(THEME_ID);

    return response(
        phtml(
            __DIR__ . '/views/login'
        )
    );
});


route('GET', '/login', function () {

    $core = new Core;
    $themeURL = $core->getThemeURL(THEME_ID);

    return response(
        phtml(
            __DIR__ . '/views/login',
            ['themeURL' => $themeURL]
        )
    );
});


route('GET', '/main', function () {

    $core = new Core;
    $themeURL = $core->getThemeURL(THEME_ID);

    return response(
        phtml(
            __DIR__ . '/views/index',
            ['themeURL' => $themeURL]
        )
    );
});


route('POST', '/api/getSnippetData', function () {

    $core = new Core;
    return jsonResponse(
        $core->snippetData($_POST)
    );
});


//My Route
//select cats
route('GET', '/api/cat', function () {
  
     $core = new Core;
     $result = $core->mySelect('snippet_cat');

     $string = "";
    
     for($i=0 ; $i<count($result) ; $i++){
         
         $numCode = $core->CountCode($result[$i]["id"]);

         $string .= '
               <li class="nav-item" item-id=' .$result[$i]["id"].'>
                   <a> 
                       <p id="paragraf">' . $result[$i]["title"] . '</p>   
                       <span class="badge badge-light badge-pill">'. $numCode.'</span>
                   </a>    
               </li>
               ';

     }
     
    return response($string);
});

//select tags
route('GET', '/api/tag', function () {
    
     $id = $_GET['id']; 
     $core = new Core;
     $result = $core->selectCatPosts($id); 
     $catTitle = $core->mySelect("snippet_cat" , "id = ".$id); 

     $cat = '<p class="cattitle" title-id="' .$catTitle[0]["id"].'">'.$catTitle[0]["title"].'</p>
     <button class="btn btn-light" id="edittitle">ویرایش<img src="https://img.icons8.com/small/16/000000/edit.png"></button>
     <button class="btn btn-light" id="canceltitle">کنسل<img src="https://img.icons8.com/small/16/000000/cancel--v1.png"></button>
     <div id="input"></div>';

     $string = "";  


     for($i=0 ; $i<count($result) ; $i++){
         
         $string .= '

               <li class="nav-item" item-id=' . $result[$i]["id"] .'>
                   <a> 
                       <p id="paragraf">' . $result[$i]["title"] . '</p>   
                   </a>    
               </li>
               ';
        }
    $string = $cat. " ".$string;        
    return response($string);
   
});


//edit title
route('POST', '/api/snippet/edittitle', function () {
     
    $string ="";
    $string = '<input  id="inputtitle" value = "' . $_POST['title'] .'"><button id ="savetitle">ذخیره</button>';
    return response($string);  
});


//save title
route('POST', '/api/snippet/savetitle', function () {
     
     $data =[
      'title' => $_POST['title']
     ];
    $dobj = new db;
    $dobj->update('snippet_cat' , $data , 'id='.$_POST['id']); 
    return response($_POST['title']);
 
});



route('POST', '/api/snippet/add', function () {
    
     
     // file_put_contents("var/www/html/demo1/atieh.txt", $_POST);

     $dobj = new db;
     $core = new Core;
     $data1 = [
  
      'data'=> $_POST['content'],
      'description'=> $_POST['description'] ,
      'title' => $_POST['title']      
     ];
     $codeId = $dobj->insert('snippet_code' , $data1);


    

      $data3 =[
      'title' => $_POST['label']
     ];

     $same = $core->search($_POST['label']);
     if($same == 0){

          $catId = $dobj->insert('snippet_cat' , $data3);
      }else{
         
         $catResult = $core->mySelect('snippet_cat' , 'title='.'"'.$data3['title'].'"');
         $catId = $catResult[0]['id'];      
      }



     $data5 =[
      'cat_id' => $catId,
      'code_id'=> $codeId
     ];
     $dobj->insert('snippet_code_cats' , $data5);

});


route('POST', '/api/snippet', function () {
    
     $core = new Core;
     $result = $core->mySelect('snippet_code' , 'id ='.$_POST['id']);   
     return jsonResponse($result);   
});




route('POST', '/api/snippet/edit', function () {
  
   // file_put_contents(__DIR__."/atieh", print_r($_POST , true));

   $core = new Core;
   $result = $core->mySelect('snippet_code' , 'id ='.$_POST['codeId']);
   return jsonResponse($result);  

});


route('POST', '/api/snippet/update', function () {

  $data =[
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'data'=> $_POST['content'] 
  ];

  $data1=[
   'title' => $_POST['label']
  ];


  $dobj = new db;
  $core = new Core;
  
  $dobj->update('snippet_code' , $data , 'id ='.$_POST['code_id']);
  $same = $core->search($_POST['label']);

  if($same == 0){

      
      $lastid = $dobj->insert('snippet_cat' , $data1);
      $data2=[
        'cat_id' => $lastid,
       ];
      $dobj->update('snippet_code_cats' , $data2 , 'code_id ='.$_POST['code_id']);  
      $id = $lastid;
      $title = $data1;


  }else{
    
       $result = $core->mySelect('snippet_cat' ,'title='.'"'.$_POST['label'].'"');
        $data2=[
        'cat_id' => $result[0]['id'],
       ];
       $dobj->update('snippet_code_cats' , $data2 , 'code_id ='.$_POST['code_id']);  
       $id = $result[0]['id'];
       $title = $result[0]['title'];
  }

   
   $final = $core->mySelect('snippet_code' , 'id='.$_POST['code_id']);

   $data=[
    'id' => $id,
    'title'=>$title,
    'final'=>$final
   ];

   return jsonResponse($data);  
  
});




route('POST', '/api/snippet/delete', function () {
  
  // file_put_contents(__DIR__."/atieh", print_r($_POST , true));
  $core = new Core;
  $core->Delete('snippet_code' , 'id ='.$_POST['id']);
  
});

route('POST', '/checklogin', function () {
   
    $loginFlag = 0;
    $core = new Core;
    $result = $core->mySelect('snippet_user');
    foreach ($result as $value) {

       if($_POST['user-name'] == $value['user_name'] AND md5('@13751375@'.$_POST['pass']) == $value['password']){

             $loginFlag = 1;
          }
    }
     if($loginFlag == 1){ 
       header("location:http://localhost/demo1/main");
     }else{
       header("location:http://localhost/demo1/login");
     }
  
});




$notFountURL = '/';
route('GET', $notFountURL, function () {

    die(); 
    return response(phtml(__DIR__ . '/views/login'));

});

dispatch();