

   <?php

   if ($errors->any()){

       foreach ($errors->all() as $error){ ?>


        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
             <div class="alert-icon">
              <i class="fa fa-times"></i>
             </div>
             <div class="alert-message">
               <span><strong>Danger!</strong> <?php echo $error ?>!</span>
             </div>
           </div>


       </script>

           <?php   } } ?>
