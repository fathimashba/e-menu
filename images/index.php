<?php include('includes/header.php');?>
<style type="text/css">
.modal {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
  height: 100%;
    background: #fff;
}

.modalDialog:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog > div {
  width: 100%;
  height: 100%;
  position: relative;
  /*margin: 10% auto;*/
  /*padding: 5px 20px 13px 20px;*/
  /*border-radius: 10px;*/
  background: #fff;
  /*background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);*/
}
</style>

<div class="headerWrapper">
   <header>
      <nav>
         <div class="toggle-btn" id="a" onclick="toggleSidebar();">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <div class="logo">
            <img src="images/logo.png" height="60" width="138">
         </div>
         <div id="sidebar" >
            <ul>
               <li><a href="">home</a></li>
               <li><a href="">abt</a></li>
               <li><a href="">contact</a></li>
            </ul>
         </div>
      </nav>
   </header>
</div>
<div style="position: relative">
   <div class="menuHeader" style="background:url(images/parallax-bg-8.jpg) center center / cover scroll no-repeat;" >
      <div class="menuWrapper">
         <div class="menuText">
            <h1>Welcome to </h1>
            <h1>Our Restaurant</h1>
         </div>
      </div>
   </div>
   <div class="menuType" style="position: relative;">
      <div class="menuwrapper text-center">
         <p>Try & Discover</p>
         <h1>Our Menu</h1>
      </div>
   </div>
   <div class="menus">
      <div class="menu_heading" >
         <h3  data-toggle="collapse"  href="#collapse1" aria-expanded="true" aria-controls="collapse1" class=" btn collapsed">breakfast</h3>
      </div>
      <div class="collapse  " id="collapse1">
         <div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Shezwan cheese roll</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
             <!-- <a href="#openModal">  <button id="hide" class="btn addbtn">add <span style="font-size: 16px">+</span></button></a> -->
             <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
  add<span style="font-size: 16px">+</span>
</button>

               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter minus">-</button>
                     <input type="text" id="txtAcrescimo" />
                     <button type="button" class="alter plus">+</button>            
                  </div>
               </div>
            </div>
         </div>
      </div>





<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
              <span aria-hidden="true" data-dismiss="modal" >
           <i class="fas fa-arrow-left" > </i></span>
            
         </div>
         <div class="modal-body">
            
            <div class="customizationWrapper">
               <h2>Shezwan cheese roll</h2>
               <p>Extra Toppings</p>
               <span>You can choose upto 8 option</span>
            
            <div class="custombody">
            <form action="menu.php" method="post">
               <div class="extraTop">
                  <div class="flex-container">
                     <label class="style_checkBox">
                     <input type="checkbox" name="" > 
                     <span class="style_checkBox_mark"></span>
                     jalapeno
                     </label>
                     <p> <i class="fas fa-rupee-sign"></i>30</p>
                  </div>
                  <div class="flex-container">
                     <label class="style_checkBox">
                     <input type="checkbox" name="" > 
                     <span class="style_checkBox_mark"></span>
                     jalapeno
                     </label>
                     <p> <i class="fas fa-rupee-sign"></i>30</p>
                  </div>
                  <div class="flex-container">
                     <label class="style_checkBox">
                     <input type="checkbox" name="" > 
                     <span class="style_checkBox_mark"></span>
                     jalapeno
                     </label>
                     <p> <i class="fas fa-rupee-sign"></i>30</p>
                  </div>
               </div>
               <div class="addItem text-center">
                  <input class="btn custmAddBtn" type="submit" value="Add"  data-dismiss="modal" onclick="faki('hide','show')">
               </div>
            </form>
         </div>
       </div>
      </div>
   </div>
</div>
</div>

   <div class="menu_heading" >
      <h3  data-toggle="collapse"  href="#collapse2" aria-expanded="true" aria-controls="collapse2" class=" btn collapsed">starter</h3>
   </div>
   <div class="collapse  " id="collapse2">
      <div class="flex-container">
         <div class="column diet">
            <img src="images/icons/veg.png"  width="20" height="20">
         </div>
         <div class="column item" >
            <h4>Shezwan cheese roll</h4>
            <div class="itemPrice">
               <p > <i class="fas fa-rupee-sign"></i>100</p>
               <span class="custm">customization available</span>
            </div>
         </div>
         <div class="column">
             <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
  add<span style="font-size: 16px">+</span>
</button>
            <div class="show" id="show1" style="display:none;">
               <div class="inc_dec " >
                  <button type="button" class="alter minus">-</button>
                  <input type="text" id="txtAcrescimo" />
                  <button type="button" class="alter plus">+</button>            
               </div>
            </div>
         </div>
      </div>
      <div class="flex-container">
         <div class="column">
            <img src="images/icons/veg.png"  width="20" height="20">
         </div>
         <div class="column item" >
            <h4>Shezwan cheese roll</h4>
            <div class="itemPrice">
               <p> <i class="fas fa-rupee-sign"></i>100</p>
               <span class="custm">customization available</span>
            </div>
         </div>
         <div class="column">
            <button id="hide2" class="btn addbtn" onclick="faki('hide2','show2')">add <span style="font-size: 16px">+</span></button>
            <div class="show" id="show2" style="display:none;">
               <div class="inc_dec " >
                  <button type="button" class="alter minus">-</button>
                  <input type="text" id="txtAcrescimo" />
                  <button type="button" class="alter plus">+</button>            
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="menu_heading" >
         <h3  data-toggle="collapse"  href="#collapse3" aria-expanded="true" aria-controls="collapse3" class=" btn collapsed">Dinner</h3>
      </div>
      <div class="collapse  " id="collapse3">
         <div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Shezwan cheese roll</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
             <!-- <a href="#openModal">  <button id="hide" class="btn addbtn">add <span style="font-size: 16px">+</span></button></a> -->
             <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
  add<span style="font-size: 16px">+</span>
</button>

               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter minus">-</button>
                     <input type="text" id="txtAcrescimo" />
                     <button type="button" class="alter plus">+</button>            
                  </div>
               </div>
            </div>
         </div>
      </div>


</div>
</div>
</script>
<script type="text/javascript">
   //   (function() {
   // // font size
   //     $('button.addbtn').click(function(){
   //         $.each($('#add'), function() {
   //             $(this).css('display','none');
   //         });
   //         $.each($('#inc_dec'), function() {
   //             $(this).css('display','flex');
   //         });
   //     });
   // })();
   
   // $(document).ready(function(){
   //   $("#hide").click(function(){
   //     $("#show").show();
   //     $("#hide").hide();
   //   });
   //   $("#hide2").click(function(){
   //     $("#show2").show();
   //     $("#hide2").hide();
   //   });
   //   $("#hide1").click(function(){
   //     $("#show1").show();
   //     $("#hide1").hide();
   //   });
   //   // $("#show").click(function(){
   //   //   $("p").show();
   //   // });
   // });
   









     function faki(id1,id2)
     { // var faki = id1;
       // var ashba = id2 ;
       $("#"+id1).hide();
       $("#"+id2).show();

     }
      var $input = $("#txtAcrescimo");
      $input.val(1);
      $(".alter").click(function(){
        if ($(this).hasClass('plus'))
            $input.val(parseInt($input.val())+1);
        else if ($input.val()>1)
            $input.val(parseInt($input.val())-1);
      });
      
      
      function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
       // document.getElementByClass("toggle-btn").classList.toggle("active");
      
      }
</script>


     
<?php include('includes/footer.php');?>