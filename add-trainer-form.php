<link rel="shortcut icon" type="image/png" href="/img/fav.png">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,700i,800,900" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 
<div class="app-content content" id="myID">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
             <form class="form" id="addTrainer" action="https://gamechangefitness.com/stage2/admin/trainers/add_trainer" autocomplete="off">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="hidden-label-round-controls">Add New Trainer</h4>
                           <button class="count_btn" data-type="post" type="button">Get Post Count</button><div id="post_count">?</div>
            <button class="count_btn" data-type="page" type="button">Get Page Count</button><div id="page_count">?</div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">
                              
                                    <input type="hidden" id ="hash" name="ci_csrf_token" value=""  >
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="log_div">
                                                  <img src="https://gamechangefitness.com/stage2/backend_assets/img/deafault.jpg" id="pImg">
                                                   <div class="text-center upload_pic_in_album">
                                <input  accept="images/*" class="inputfile hideDiv input_img2" id="file-1" name="profileImage" onchange="return fileValidation();" style="display: none;" type="file">
                                        <label for="file-1" class="upload_pic">
                                            <span class="ft-camera"></span>
                                        </label>
                                                    </div>
                                                    <div id="profileImage-err"></div>
                                                </div>
                                                 <p style="color: gray;font-size: 11px;">Image should be at least 300*300px</p>
                                            </div>                                        
                                            <div class="form-group col-12 mb-2">
                                                <label class="sr-only" for="complaintinput1">Name</label>
                                                <input type="text" id="complaintinput1" class="form-control round" placeholder="Name" name="TrainerName"  autocomplete="off">
                                            </div>
                                            <div class="form-group col-12 mb-2">
                                                <label class="sr-only" for="complaintinput2">Email Id</label>
                                                 <input type="email" id="complaintinput2" class="form-control round" placeholder="Email Id" style="background: white;"name="email"readonly onfocus="this.removeAttribute('readonly');">
                                            </div>
                                             <div class="form-group col-12 mb-2">
                                                <label class="sr-only" for="complaintinput3">Password</label>
                                                <input type="password" id="complaintinput3" class="form-control round" placeholder="Password" name="password"  autocomplete="off">
                                            </div>
                                        
                                            <div class="form-group col-12 mb-2">
                                                <fieldset class="form-group mb-0 mt-10">
                                                    <select class="custom-select round"  name="userPlan">
                                                        <option selected value="0">Select level</option>
                                                        <option value="3">Level 3</option>
                                                        <option value="4">Level 4</option>
                                                        <option value="3,4">Both Level 3 and Level 4</option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                               <div class="form-group col-12 mb-2">
                                                <fieldset class="form-group mb-0 mt-10">
                                                    <select class="custom-select round"  name="trainerType">
                                                       
                                                        <option value="1">VIP</option>
                                                        <option  selected value="2" value="4">Standard</option>
                                                      
                                                    </select>
                                                </fieldset>
                                            </div> 
                                              <div class="form-group col-12 mb-2">
                                        
                                        <fieldset class="form-group mb-0 mt-10 multiLevelSelect">
                                            <select data-placeholder="Select Trainer Specialisation" class="form-control multiSelctBox"  name="trainer_cat_id[]"  id="multi" multiple="multiple">
                                            <option class='cat-options cat-level-0' data-cat-level='0' value='1' data-level='0'  >Cardio Speciall</option><option class='cat-options cat-level-1' data-cat-level='1' value='2' data-level='1'  >Cardio sub</option><option class='cat-options cat-level-1' data-cat-level='1' value='14' data-level='1'  >My menu</option><option class='cat-options cat-level-0' data-cat-level='0' value='3' data-level='0'  >KETO</option><option class='cat-options cat-level-0' data-cat-level='0' value='4' data-level='0'  >Welness</option><option class='cat-options cat-level-0' data-cat-level='0' value='5' data-level='0'  >Bikini</option><option class='cat-options cat-level-0' data-cat-level='0' value='6' data-level='0'  >Body Fit</option><option class='cat-options cat-level-0' data-cat-level='0' value='7' data-level='0'  >Main Cate</option><option class='cat-options cat-level-1' data-cat-level='1' value='8' data-level='1'  >Sub Cat</option><option class='cat-options cat-level-0' data-cat-level='0' value='9' data-level='0'  >Life Style</option><option class='cat-options cat-level-1' data-cat-level='1' value='10' data-level='1'  >Women</option><option class='cat-options cat-level-1' data-cat-level='1' value='11' data-level='1'  >Men</option>                                            </select>
                                        </fieldset>

                                            </div> 
 

                                            <div class="form-group col-12 mb-2">
                                                <label class="sr-only" for="complaintinput5">Complaint Details</label>
                                                <textarea id="complaintinput5" rows="5" class="form-control round" name="details" placeholder="Bio"></textarea>
                                            </div>
                                            

                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-content collpase show">
                            <div class="card-body">
                                <div class="form-group prmte-trnr">
                                    <span id="hideme">
                                    <input type="checkbox" id="switchery1" class="switchery"  name="PersonaliseLink" checked/>
                                   </span>
                                    <label for="switchery" class="font-medium-2 text-bold-600 ml-1">Set Up Personalise link
                                    </label>
                                </div>
                                <div class="form-group prmte-trnr">
                                    <span>
                                    <input type="checkbox" id="switc" class="switchery"  name="showSliderTrainer"/>
                                   </span>
                                    <label for="switchery" class="font-medium-2 text-bold-600 ml-1" >Hide for online coaching
                                    </label>

                                </div>

                              

                                  <div class="form-group prmte-trnr">
                                    <span>
                                    <input type="checkbox" id="switc1" class="switchery"  name="privileges" checked/>
                                   </span>
                                    <label for="switchery" class="font-medium-2 text-bold-600 ml-1" > All privileges
                                    </label>
                                    
                                </div>

                              <!--   <form class="form"> -->
                                    <div class="form-body" id="personalLinkgh1">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label>Show Trainer in Trainer Online Coaching</label>
                                                <fieldset class="form-group mb-0 mt-10">
                                                    <select class="custom-select round"  name="showTrainer"">
                                                        <option selected="">Only Trainer</option>
                                                        <option value="1">Trainer Of first and 3-4 other</option>
                                                        <option value="2">Trainer of first and all other</option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            <p class="col-12 head-bld">Commission</p>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">No Subscription (£)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionFree">
                                                         
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 1 (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                         <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel1">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 2 (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                         <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel2">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">level 3 with same trainer (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                       <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel3Same">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 3 with other trainer (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                         <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel3Other">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                                    <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">level 4 with same trainer (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                       <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel4Same">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 4 with other trainer (%)</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group">
                                                         <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="commissionLevel4Other">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-12 head-bld">Customer Discount</p>
                  
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 1</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                        <!--   <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel1"> -->
                                                        <select class="form-control round" name="discountLevel1">
                                                           <option>Select Coupons</option>

                                                                                                <option value="9">

                        25OFF (25%)</option>
                                                                                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 2</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                        <!--  <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel2"> -->
                                                         <select class="form-control round" name="discountLevel2">
                                                           <option>Select Coupons</option>
                                                                                                                        <option value="9">25OFF (25%)</option>
                                                                                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">level 3 with same trainer</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                     <!--  <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel3Same"> -->
                                                      <select class="form-control round" name="discountLevel3Same">
                                                           <option>Select Coupons</option>
                                                                                                                        <option value="9">25OFF (25%)</option>
                                                                                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 3 with other trainer</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                     <!--    <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel3Other"> --> <!--  <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel4Other"> -->
                                                      <select class="form-control round" name="discountLevel3Other">
                                                            <option>Select Coupons</option>
                                                                                                                        <option value="9">25OFF (25%)</option>
                                                                                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">level 4 with same trainer</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                     <!--  <input type="text" class="form-control round" placeholder="Enter" aria-label="Amount (to the nearest dollar)" name="discountLevel4Same"> -->
                                                      <select class="form-control round" name="discountLevel4Same">
                                                            <option>Select Coupons</option>
                                                            <option value="9">25OFF (25%)</option>
                                                                                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-lg-12 form-group">
                                                <div class="col-lg-7">
                                                    <label class="label-control lne-hgt-lbl">Level 4 with other trainer</label>
                                                </div>
                                                <div class="col-lg-5 pr-0">
                                                    <div class="input-group Inpfnt">
                                                      <select class="form-control round" name="discountLevel4Other">
                                                            <option>Select Coupons</option>
                                                                                                                        <option value="9">25OFF (25%)</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="form-actions frm-btns mt-0">
                                        <a href="" id="urlbase"  class="btn btn-danger mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </a>
                                            <button type="button" class="btn btn-primary" id="add_trainer"><i class="la la-check-square-o"></i>Add</button>
                                    </div>
                               <!--  </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 
<div id="tl_admin_loader" class="tlr_loader" style="display: none;"></div>
 