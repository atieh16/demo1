var sidebar1_ItemId;
var sidebar1_ItemTitle;

//my function
function doAjax(url , method , callback , data = ''){
 
  $.ajax({
        url: url,
        type: method,
        data:data,
        contentType: false ,
        processData: false,

        success: callback,
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
}

function updateSidebar1(){
  
      $('#sidebar1').html('');
      doAjax("http://localhost/demo1/api/cat" , 'get' , function(response){
      $('#sidebar1').append(response);
    });
}

function updateSidebar2(id , title){

    $('#sidebar2').html('');
    $('#card').css("display" , "block");
     
     doAjax("http://localhost/demo1/api/tag?id=" + id , "get" , function(response){

        $('#sidebar2').append(response);
        $('#l-id').val(title);
     });


}

//starting

$(document).ready(function(){		

 updateSidebar1();

 $(document).on('click','#sidebar1 > li',function(){

      
     var id = $(this).attr('item-id');
     var title = $(this).find('p').html();
     $('#card2').css("display" , "none");
     updateSidebar2(id , title);
     sidebar1_ItemId = id;
     sidebar1_ItemTitle = title;    

 });

//edit title
 $(document).on('click','#edittitle',function(){

       $('#edittitle').css("display" , "none");
       $('#canceltitle').css("display" , "block");
       var title = $(".cattitle").text();
       formData = new FormData();
       formData.append('title' , title);

    doAjax("http://localhost/demo1/api/snippet/edittitle" , "post" , function(response){

      $('#input').append(response);
    } , formData);
    

 });


//save title
 $(document).on('click','#savetitle',function(){
    
    
    formData = new FormData();
    formData.append('title' , $('#inputtitle').val());
    formData.append('id' , $(".cattitle").attr('title-id'));
    
    $('#edittitle').css("display" , "block");
    $('#canceltitle').css("display" , "none");
    $('#inputtitle').css("display" , "none");
    $('#savetitle').css("display" , "none");


   doAjax("http://localhost/demo1/api/snippet/savetitle" , "post" , function(response){
    updateSidebar1();
    $('.cattitle').text('');
    $('.cattitle').text(response);

  } , formData);

 });


//cancel title
 $(document).on('click','#canceltitle',function(){

    $('#edittitle').css("display" , "block");
    $('#canceltitle').css("display" , "none");
    // $('#inputtitle').css("display" , "none");
    // $('#savetitle').css("display" , "none");
    $('#inputtitle').remove();
    $('#savetitle').remove();

 });



//add
 $('#confirmbutton').click(function(){

    formData = new FormData();

    formData.append('title' , $('#t-id').val());
    formData.append('description' , $('#d-id').val());
    formData.append('label' , $('#l-id').val());
    // formData.append('content' , $('#editor').val());
    var editor = ace.edit("editor");
    var code = editor.getValue();
    formData.append('content' , code);

    $('input:not(#l-id)').val('');
    $('div #editor').empty();
    // $('#editor').setValue("");


    



    doAjax("http://localhost/demo1/api/snippet/add" , "post" , function(response){
      updateSidebar1(); 
      updateSidebar2(sidebar1_ItemId , sidebar1_ItemTitle);
    } , formData);


	});




//show result
 $(document).on('click','#sidebar2 > li',function(){

    $('#card').css("display" , "none");
    $('#card2').css("display" , "block");
    var id = $(this).attr('item-id');
    formData = new FormData();
    formData.append('id' , id);

    var title = $(this).find('p').html();



    doAjax("http://localhost/demo1/api/snippet" , "post" , function(response){

          $('.card-header-p').html(response[0].title);
          $('.card-header-d').html(response[0].description);
          //$('#editor1').html(response[0].data);
          $('#hide').val(response[0].id);
          editor1.setValue(response[0].data);
    } , formData);



  });




//edit
$('#edit').click(function(){
     
    $('#card').css("display" , "block");
    $('#card2').css("display" , "none");
    $('#confirmbutton').css("display" , "none");
    $('#update').css("display" , "inline-block");
    $('#notupdate').css("display" , "inline-block");
    var codeId = $('#hide').val();
    formData = new FormData();
    formData.append('codeId' , codeId);


    doAjax("http://localhost/demo1/api/snippet/edit" , "post" , function(response){

          $('#t-id').val(response[0].title);
          $('#d-id').val(response[0].description);
          // $('#editor').append(response[0].data);
          editor.setValue(response[0].data);
    } , formData);





  });


//update cancel
$('#notupdate').click(function(){
   
   $('#card').css("display" , "none");
   $('#card2').css("display" , "block");

});

//update
$('#update').click(function(){
   
    formData = new FormData();

    formData.append('title' , $('#t-id').val());
    formData.append('description' , $('#d-id').val());
    formData.append('label' , $('#l-id').val());
    formData.append('code_id' , $('#hide').val());
    var editor = ace.edit("editor");
    var code = editor.getValue();
    formData.append('content' , code);


      doAjax("http://localhost/demo1/api/snippet/update" , "post" , function(response){
      
           // alert(response['id'] + response['title'] + response['final'][0].title + response['final'][0].description+ response['final'][0].data);
           // console.log(response);
          $("#card2").css("display" , "block");
          $("#card").css("display" , "none");

          $('.card-header-p').html('');
          $('.card-header-d').html('');
          $('.card-header-c').html('');
         
          $('.card-header-p').append(response['final'][0].title);
          $('.card-header-d').append(response['final'][0].description);
          $('.card-header-c').append(response['final'][0].data);

          updateSidebar1();
          
          //updateSidebar2
          sidebar1_ItemId = response['id'];
          sidebar1_ItemTitle = response['title'];
          var id = sidebar1_ItemId;
          var title = sidebar1_ItemTitle; 

          $('#sidebar2').html('');
           
           doAjax("http://localhost/demo1/api/tag?id=" + id , "get" , function(response){

              $('#sidebar2').append(response);
              $('#l-id').val(title);
           });

          


    } , formData);



  });
   

//delete
$('#delete').click(function(){
   
     var id = $('#hide').val();
     formData = new FormData();
     formData.append('id' , id);
     $('#card').css("display" , "block");
     $('#card2').css("display" , "none");
     $('input:not(#l-id)').val('');



 doAjax("http://localhost/demo1/api/snippet/delete" , "post" , function(response){  
 updateSidebar1(); 
 updateSidebar2(sidebar1_ItemId , sidebar1_ItemTitle);
    } , formData);

  });






});

























