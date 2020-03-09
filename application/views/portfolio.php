<!-- Hero Section -->
   <div class="container space-top-2">
     <div class="w-md-80 w-lg-75 text-center mx-md-auto">
       <div class="mb-5">
         <h1 class="display-4 font-size-md-down-5 font-weight-semi-bold">Portfolio</h1>
         <p class="lead font-weight-normal">My Projects, Startup and Hackathon Wins</p>
       </div>
     </div>
   </div>
   <!-- End Hero Section -->

   <!-- Blog Card Section -->
   <div class="container space-2 space-bottom-lg-1">
     <div class="row">
      <?php
        $ctr = 0;
        foreach ($portfolios as $portfolio):
          $ctr++;
      ?>
       <div class="<?php
         if($ctr % 4 == 0){
           echo 'col-md-6 mb-5'; // large
         }elseif($ctr == 5){
           echo 'col-md-6 mb-5'; // large
           $ctr = 0;
         }else{
           echo 'col-md-6 col-lg-4 mb-5'; // small
         }
        ?>">
         <!-- Blog Card -->
         <article class="card shadow h-100">
           <img class="card-img-top" src="/uploads/portfolio/<?php echo $portfolio->image_filename; ?>" alt="<?php echo $portfolio->name; ?>">
           <div class="card-body p-5">
             <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="#"><?php echo $portfolio->tag_name; ?></a>
             <h3 class="h5 font-weight-medium">
               <a href="<?php echo $portfolio->url; ?>" target="_blank"><?php echo $portfolio->name; ?></a>
             </h3>
             <p><?php echo $portfolio->description; ?></p>
           </div>

           <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
             <div class="media align-items-center">
               <?php
                $stacks = explode(',', $portfolio->stacks);
                $stacks_image_filename = explode(',', $portfolio->stacks_image_filename);
                foreach ($stacks as $key => $stack): ?>
               <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="<?php echo $stack; ?>">
                 <img class="img-fluid rounded-circle" src="/uploads/icons/<?php echo $stacks_image_filename[$key]; ?>" alt="<?php echo $stack; ?>">
               </div>
               <?php endforeach; ?>
                <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                  <a href="<?php echo $portfolio->url; ?>" target="_blank">Demo</a>
                </div>
             </div>
           </div>
         </article>
         <!-- End Blog Card -->
       </div>
       <?php endforeach; ?>

     </div>

   </div>
   <!-- End Blog Card Section -->

   <!-- Subscribe Section -->
   <div class="space-1">
     <div class="bg-img-hero">
       <div class="container">
         <!-- Title -->
         <div class="w-md-60 text-center mx-auto mb-7">
           <h2 class="font-weight-semi-bold">Hire Me Now</h2>
           <p><a href="/pdf/MichaelGerardGalonCV.pdf">Download my resume</a></p>
         </div>
         <!-- End Title -->

       </div>
     </div>
   </div>
   <!-- End Subscribe Section -->
