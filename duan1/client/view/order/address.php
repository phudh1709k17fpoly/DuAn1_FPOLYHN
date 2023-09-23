<?php
    $class  = new work;
    $public = $class->publicdiachi($_SESSION['user']);

?>
<div class="card p-3 py-3 mt-3 card-1 text-center">
        <h4>Địa chỉ của bạn</h4>
<div class="p-3 card-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;"> 
   <?php foreach($public as $iteams) : ?>
        <div class="p-3 card-child">
         <?php if(isset($_GET['id']) && $iteams['id'] == $_GET['id']) : ?>
         <h6 style="text-align: left; margin-top: -18px; color: green;" ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
         <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
         <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
         </svg></h6>
          <?php endif ?>
        <a href="?ctl=order&id=<?=$iteams['id']?>" style="color:black;" id="fouste">
            <div class="d-flex flex-row align-items-center" style="position: relative;">
              <span class="circle">
                  <i class="fa fa-home"></i>
              </span>
              <div class="">
                  <h6 class="fw-bold">Home</h6> 
                  <span><?=$iteams['name'].'  -  '.$iteams['phone'].'  -  '.$iteams['adress']?></span> 
                  <a href="?ctl=editAddress&id=<?=$iteams['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                 </svg></a>
              </div>    
              <a href="?ctl=deleteAddress&id=<?=$iteams['id']?>" style="position: absolute;left: 192px;
           top:-17px; text-decoration: none; list-style: none;" onclick="return confirm('Xóa địa chỉ này ?')">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
           <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
           <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
           </svg></a>
        </div>
        </a> 
        </div>
        <?php endforeach ?>    
        <div class="p-3 card-child mt-4 py-4">
           <a href="?ctl=form_address">
           <div class="d-flex flex-row align-items-center">
              <span class="circle-3">
                  <i class="fa fa-plus"></i>
              </span>
              
              <div class="d-flex flex-column ms-3 mt-1">
                  <h6 class="fw-bold text-primary">Add New Address</h6>
              </div>
                
            </div>
           </a>
        </div>
         
</div>
        
    
</div>