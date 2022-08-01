<?php include('includes/header.php');?>
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
<!--------------------- banner-------------------->

<div style="position: relative">
   <div class="menuHeader" style="background:url(images/parallax-bg-8.jpg) center center / cover scroll no-repeat;" >
      <div class="menuWrapper">
         <div class="menuText">
            <h1>Welcome to </h1>
            <h1>Our Restaurant</h1>
         </div>
      </div>
   </div>
<!--------------------begining of menu------------->

   <div class="menuType" style="position: relative;">
      <div class="menuwrapper text-center">
         <p>Try & Discover</p>
         <h1>Our Menu</h1>
      </div>
   </div>

   <div class="menus">
  <!------------menu title ------------------------>  
      <div class="menu_heading" >
         <h3  data-toggle="collapse"  href="#collapse1" aria-expanded="true" aria-controls="collapse1" class=" btn collapsed">Breakfast</h3>
      </div>
  <!-- ------------------menu content -------------->    
      <div class="collapse  " id="collapse1">
         <div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Masala Dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
         <div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Idli Vada</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Aloo Paratha</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Kathi roll special</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Set Dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Paper Dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Schezwan Cheese dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Neer Dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Onion Rava Dosa</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Paneer cheese toast</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
<div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Cheese sandwhich</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>


         <div class="flex-container">
            <div class="column">
               <img src="images/icons/nonveg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Garlic cheese toast</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

      </div>
<!-- //starter -->


 <div class="menu_heading" >
         <h3  data-toggle="collapse"  href="#collapse2" aria-expanded="true" aria-controls="collapse2" class=" btn collapsed">Main Course</h3>
      </div>
      <div class="collapse" id="collapse2">
         <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Masala Bhindi.</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
          <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Tikka Biryaani</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Dal- Chawal</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Ghee Rice</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Fried Rice</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Kofta</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Bukhaari pizza</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Paneer  pizza</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

         <div class="flex-container">
            <div class="column">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>BBQ pizza</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
           <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 </div>
<!-- 
Dinner -->
  <div class="menu_heading" >
         <h3  data-toggle="collapse"  href="#collapse3" aria-expanded="true" aria-controls="collapse3" class=" btn collapsed">Dinner</h3>
      </div>
      <div class="collapse" id="collapse3">
         <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Lemon Chicken</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
          <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Dum Aloo Lakhnawi</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Shahi Egg Curry</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Malabari Prawn Curry</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Dum Paneer Kali Mirch</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Dal Makhani</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4> Mutton Do Pyaaza</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
 <div class="flex-container">
            <div class="column diet">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Butter Chicken</h4>
               <div class="itemPrice">
                  <p > <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
            <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>

         <div class="flex-container">
            <div class="column">
               <img src="images/icons/veg.png"  width="20" height="20">
            </div>
            <div class="column item" >
               <h4>Chicken Bukhara</h4>
               <div class="itemPrice">
                  <p> <i class="fas fa-rupee-sign"></i>100</p>
                  <span class="custm">customization available</span>
               </div>
            </div>
           <div class="column">
               <button type="button" id="hide" class="btn addbtn" data-toggle="modal" data-target="#exampleModalLong">
               add<span style="font-size: 16px">+</span>
               </button>
               <div class="show" id="show">
                  <div class="inc_dec " >
                     <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc" />
                     <button type="button" class="alter" data-toggle="modal" data-target="#faki">+</button>            
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 </div>

      <!-- --------------Modal  AddOns------------ -->
      <div class="modal fade modal1" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span aria-hidden="true" data-dismiss="modal" >
                  <i class="fas fa-arrow-left" > </i></span>
               </div>
               <div class="modal-body">
                  <div class="customizationWrapper">
                     <h2>Paneer Tikka Pizza</h2>
                     <p>Extra Toppings</p>
                     <span>You can choose upto 8 option</span>
                     <div class="custombody">
                        <form action="" method="post">
                           <div class="extraTop">


                              <div class="flex-container">
                                <label class="style_radio">
                                 <input type="radio" name="asd" value="30" > 
                                 <span class="style_radio_mark"><span></span></span>
                                 half
                                 </label>
                                 <p> <i class="fas fa-rupee-sign"></i></p>
                              </div>                              <div class="flex-container">
                                <label class="style_radio">
                                 <input type="radio" name="asd" > 
                                 <span class="style_radio_mark" ><span></span></span>
                                 full
                                 </label>
                                 <p> <i class="fas fa-rupee-sign"></i>30</p>
                              </div>
                              <div class="flex-container">
                                 <label class="style_checkBox">
                                 <input type="checkbox" name="addon1" > 
                                 <span class="style_checkBox_mark"></span>
                                 jalapeno
                                 </label>
                                 <p> <i class="fas fa-rupee-sign"></i>30</p>
                              </div>
                              <div class="flex-container">
                                 <label class="style_checkBox">
                                 <input type="checkbox" name="addon2" > 
                                 <span class="style_checkBox_mark"></span>
                                 jalapeno
                                 </label>
                                 <p> <i class="fas fa-rupee-sign"></i>30</p>
                              </div>
                              <div class="flex-container">
                                 <label class="style_checkBox">
                                 <input type="checkbox" name="addon3" > 
                                 <span class="style_checkBox_mark"></span>
                                 jalapeno
                                 </label>
                                 <p> <i class="fas fa-rupee-sign"></i>30</p>
                              </div>
                           </div>
                           <div class="addItem text-center">
                              <input class="btn custmAddBtn " type="submit" value="Add " id="" data-toggle="modal" data-target="#ashba" data-dismiss="modal" onclick="buttonClick('hide','show'); ">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<!---------------------modal repeat AddOns ------------>
      <div class="modal fade modal2" id="faki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                
               <div class="modal-body">

                  <div class="customizationWrapper">
                     <h2>Paneer tikka pizza</h2>
                     <p>repeat last used customization ?</p>
                     <h6>Extra Toppings: jalapeno </h6>
                     <div style="display: flex ; padding-top: 10px; ">
                        <button type="button" id="hide" class="btn addnew" data-toggle="modal" data-target="#exampleModalLong" data-dismiss="modal">Add new</button>
                        <button data-dismiss="modal" class="btn addnew repeat" onclick="buttonClick();"> repeat last</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

  <!---------- View Cart -------------->    
     <div class="cart" id="faki1">
       <div class="">
         <div data-toggle="modal" data-target="#faki2">
          <div class="flex-container" >
            <div class="cartText">
              <!-- <span>1 item</span> <br> -->
              <input type="text" name="" id="inc1" class="viewcartitem">item <br>
              <span><i class="fas fa-rupee-sign"></i>100</span> <br>
              <span>plus taxes</span>
            </div>
            <div class="viewcart">
              <h2>View Cart <i class="fas fa-arrow-circle-right"></i></h2>
            </div>
          </div>
         </div>

       </div>
     </div>



<!-- ---------------------cart page-------------->


<div class="modal fade modal1" id="faki2"  tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
   <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">

   <div class="CartHeader">
     <i class="fa fa-arrow-left" aria-hidden="true"  data-dismiss="modal"></i></a>
     <span>Cart</span>
   </div>

    <div class="cart-item">
      <div class="flex-container nopadding">
         <div class="column">
            <img src="images/icons/veg.png"  width="20" height="20">
         </div>
         <div class="column item" >
            <h4>Paneer tikka pizza</h4>
            <div class="itemPrice">
               <p> <i class="fas fa-rupee-sign"></i>100</p>
            </div>
         </div>
      <!-- <div class="quantity">
            <div class="inc_dec " >
               <button type="button" class="alter" onclick="Click('hide','show');">-</button>
                     <input type="text" id="inc2" />
              <button type="button" class="alter" onclick="buttonClick();">+</button>              
            </div>
            <p class="varying"> <i class="fas fa-rupee-sign"></i>100</p>
         </div> -->
      </div>
   </div>
   <div class="euro">
      <div  class="specialInstruct" data-toggle="modal" data-target="#myModal" >
        <i class='fas fa-pepper-hot' style='font-size:20px'></i>
        <span>Add special cooking Instruction</span> 
      </div>
      <!------------Special cooking instruction ------------->
      <div class="modal fade modal3" id="myModal" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
               <div class=" modalHeader text-center">
                  <span class="">Special cooking instructions</span>
               </div>
               <div class="modal-body">
                  <form class="sum_form_style">
                     <div class="form-group ">
                        <label>please add your instructions....</label>
                        <input type="text" class="form-control" name="" id="instruct">
                        <span>the restaurant follow your instructions on the best effert basis.</span>
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
  
   <div class="total-item " >
      <div class="flex-container nopadding">
         <div class="itemTotal">
            <p>     
               Item Total:
            </p>
         </div>
         <div class="totalPrice text-center">
            <p ><i class="fas fa-rupee-sign"></i>100</p>
         </div>
      </div>
   </div>
   <div class="modal-footer">
   <div class="orderplace text-right">
      <button class="btn place" onclick="location.href='orderPayment.php'">Place Order <i class="fas fa-arrow-circle-right"></i></button>
   </div>
   </div>  
</div>











    
<script type="text/javascript">


   var i = 0;
   function buttonClick(id1,id2) {
       i++;
       document.getElementById('inc').value = i;
       document.getElementById('inc1').value = i;
        $("#"+id2).show();
         $("#"+id1).hide();
       if(i>=1)
       {
         $("#faki1").show();
       }
       // else if(i<1)
       // {
       //   $("#faki1").hide();
       // }
// 

   }
   function Click(id1,id2) {
       i--;
       document.getElementById('inc').value = i;
       document.getElementById('inc1').value = i;

       if(i==0)
       {
         $("#"+id1).show();
         $("#"+id2).hide();
         $("#faki1").hide();
       }
     }
     function toggleSidebar() {
     document.getElementById("sidebar").classList.toggle("active");
      // document.getElementByClass("toggle-btn").classList.toggle("active");
     }
      $('#inst').attr('disabled', true);
  $('#instruct').on('keyup',function() {
    if($(this).val() != '') {
        $('#inst').attr('disabled' , false);
    }else{
        $('#inst').attr('disabled' , true);
    }
});
     
</script>
<?php include('includes/footer.php');?>