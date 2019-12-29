<?php

include_once"/var/www/html/demo1/class/_const.php";
include_once ROOT."class/database.php";


// $sql = "SELECT title FROM snippet_cat";
// $obj = new db;
// $result = $obj->fetchAll($sql);
// var_dump($result);


 include_once ROOT."views/includes/head.php";
 include_once ROOT."views/includes/logo_header.php";
 include_once ROOT."views/includes/navbar.php";
 include_once ROOT."views/includes/sidebar.php";

 ?>
		
	 <div class="content">
			<div class="absolute-top">
				<div class="fixed-div">  		
				   	<div class="row">	
				   		  <div class="col-md-2 padding">
							    <div class="sidebar sidebar-style-2">			
									<div class="sidebar-wrapper scrollbar scrollbar-inner">
										<div class="sidebar-content sidebar">
											<ul class="nav nav-primary" id="sidebar2">
											
												
											
											</ul>

										</div>
									</div>
								</div>
						  </div>

					
						  <div class="col-md-10 padding">
			                    <div class="card" id='card'>
					                  <div class="card-header displayblock">
					                  	  <p class="card-header-title no-wrap">اسنیپت جدید</p>
					                  </div>



					                   <div class="card-body" id='main-card-body'>

												<form  class="form-horizontal" method="post" action="">
									                <fieldset>
									                   
									                    <div class="control-group">
									                    	
									                    	<div class="row">
									                    		<div class="col-md-1">
									                    			 <label class="control-label" for="t-id">لیست کد<span>*</span></label>

									                    		</div>
									                    		<div class="col-md-9">
											                       
											                        <div class="controls">
											                          <input  id ="t-id"name="title" class="form-control" type="text" placeholder="" class="input-large" required="">

											                        </div>
											                    </div>
											                </div>
										                    
									                    </div>

									                    
									                    <div class="control-group">
									                    	<div class="row">
									                    		<div class="col-md-1">
									                                  <label class="control-label" for="d-id">توضییحات</label>
									                              </div>
									                            <div class="col-md-9">

												                        <div class="controls">
												                            <input id="d-id" name="description" class="form-control" type="text" placeholder="" class="input-large" required="">
												                        </div>
												                </div>        
									                      </div>
									                  </div>

									                    
									                    <div class="control-group">
									                    	<div class="row">
									                    	    <div class="col-md-1">	
									                                <label class="control-label" for="l-id">دسته بندی</label>
									                            </div>

						                                    <div class="col-md-9">
											                        <div class="controls">
											                            <input id="l-id" name="label" class="form-control" type="text" placeholder="" class="input-large" required="" value="">
											                        </div>
											                 </div> 
											               </div>      
									                    </div>

	                                               
								                      <div class="control-group card">
								                                

	                                                            <div class="card-body">
									                                <div class="controls">
									                                    
																			<div id="editor"></div>

									                                </div>
								                                </div>

								                                <div class="card-footer">
								                                	
								                                	<button type="button" class="btn btn-primary" id="confirmbutton">افزودن</button>

								                                	<button type="button" class="btn btn-primary" id="update">به روز رسانی</button>

								                                	<button type="button" class="btn btn-primary" id="notupdate">لغو</button>

								                                	
								                                </div>
								                        </div>
									                    
									                </fieldset>
									            </form>	
											
									   </div>
							    </div>	

                                <div id="card2"> 
								  <div class="card">
								  	    <div class="card-header">
									  	     	
									  	    	<div class="card-header-p"></div>

									  	    	<button class="btn btn-light" id="edit">ویرایش<img src="https://img.icons8.com/small/16/000000/edit.png"></button>

									  	    	<button class="btn btn-light" id="delete">حذف<img src="https://img.icons8.com/color/16/000000/delete-forever.png"></button>
								  	    	
								  	    </div>
										<div class="card-body">
											<div class="card-header-d"></div>
											<input id="hide" type="hidden" value="">
									    </div>
									    <div class="card-footer">		
											<div class="card-header-c" id="editor1"></div>
											<div class="card-header-c"></div>
										</div>								  	
								  </div>
								</div>			
						 </div>
							 












					</div>
				</div>
			 </div>
		 </div>	
		


<?php
 include_once ROOT."views/includes/footer.php";
?>