<?php include('includes/header.php') ?>
<div class="container">
   <i class="fa fa-arrow-left" aria-hidden="true" data-target="#faki2" ></i>
   <div style="padding: 20px;">
   	<h2>Pay<span>     <i class="fas fa-rupee-sign"></i>100 </span></h2>
      <div class="order" >
         <h3 style="padding-bottom: 10px;">  Wallets</h3>
         <div class="wallets" data-toggle="modal" data-target="#paytm"> 
           <div class="icons">
             <img src="images/icons/paytm.png"  width="40" class="imgborder " > 
           </div>
            <div>Paytm </div>
            <div class="proceed"></div>
         </div>
         <div class="wallets" data-toggle="modal" data-target="#mobikwik"> 
            <div class="icons">
            <img src="images/icons/mobikwik.png"  width="40" class="imgborder">
            </div>
              <div>Mobikwik</div>
              <div class="proceed"></div>
         </div>
         <div class="wallets " data-toggle="modal" data-target="#freecharge">
            <div class="icons">
             <img src="images/icons/freecharge.png"  width="30" >
            </div> 
             <div>Freecharge</div>
             <div class="proceed"></div>
         </div>
      </div>
      <div class="order">
         <div style="padding-bottom:5px;">
         <h3  >Online Payments</h3>
         </div>
         <div class="wallets" data-toggle="modal" data-target="#creditcard1">
            <div class="icons">
               <img src="images/icons/creditcard1.png"  width="30"  >
            </div>
            <div>Credit & Debit Cards</div>
            <div class="proceed"></div> 
         </div>
         <div  class="wallets" data-toggle="modal" data-target="#sodexo"> 
            <div class="icons">
               <img src="images/icons/sodexo.png"   width="40" class="imgborder " >
            </div>
            <div>Sodexo Meal Pass</div>
            <div class="proceed"></div>
         </div>
         <div class="wallets " data-toggle="modal" data-target="#netbanking">
            <div class="icons">
               <img src="images/icons/net-banking.svg"   width="40"  >
            </div> 
            <div> Netbanking</div>
            <div class="proceed"></div>
         </div>
         
      </div>
      <div class="order">
         <div style="padding-bottom:5px;">
         <h3  >UPI</h3>
         </div>
         <div class="wallets" data-toggle="modal" data-target="#paytm">
            <div class="icons">
               <img src="images/icons/paytm.png"  width="40"  class="imgborder ">
            </div>
            <div>Paytm</div>
            <div class="proceed"></div> 
         </div>
         <div  class="wallets" data-toggle="modal" data-target="#Google_Pay"> 
            <div class="icons">
               <img src="images/icons/google-pay.svg"   width="40" class="imgborder " >
            </div>
            <div>Google Pay</div>
            <div class="proceed"></div>
         </div>
         <div class="wallets " data-toggle="modal" data-target="#Phone">
            <div class="icons">
               <img src="images/icons/PhonePe.svg"   width="40"  class="imgborder ">
            </div> 
            <div> Phone Pay</div>
            <div class="proceed"></div>
         </div>
         
      </div>
      <div class="wallets " data-toggle="modal" data-target="#"> Cash on table
         <div class="proceed"></div>
      </div>

   </div>
   <div class="modal fade paytmwallet" id="paytm" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Paytm wallet</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with paytm..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
       <div class="modal fade paytmwallet" id="mobikwik" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Mobikwik wallet</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with Mobikwik..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="freecharge" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Freecharge wallet</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with freecharge..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="creditcard1" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Credit card or Debit card</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address Linked with the card</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="sodexo" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Sodexo</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with Sodexo..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="netbanking" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link netbanking</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with netbanking..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="paytm" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Paytm wallet</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with paytm..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="Google_Pay" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Gpay</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with Gpay..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade paytmwallet" id="Phone" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Link Phonepe wallet</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group label_trans">
               <label>Email address linked with Phonepe..</label>
               <input type="text" class="form-control" name="email" autocomplete="off" required>
            </div>
            <div class="flex-container">
               <div class="form-group india">
                  <div style="position: absolute;
    top: 14px;
    bottom: 0;
    padding-right: 10px;
    border-bottom: 1px solid #dadada;">
                     <img src="images/icons/Indian_Flag.png" width="24px" height="16px">
                     
                  </div>
                  <input type="tel" class="form-control india_code" name="" disabled value="+91" >

                  
               </div>
               <div class="form-group label_trans">
               <label > Mobile number</label>
               <input type="tel" name=""  class="form-control">
               
                </div>
                
            </div>   
                       <div class="text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add" id="inst">
                           </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
  
   </div>
</div>

<script type="text/javascript">
    $('#faki').modal(remote);
</script>