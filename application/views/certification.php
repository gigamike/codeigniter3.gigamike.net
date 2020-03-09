<!-- Hero Section -->
 <div id="SVGwave1BottomSMShape" class="svg-preloader position-relative bg-light overflow-hidden">
      <div class="container space-top-2 space-bottom-3">
        <div class="w-md-80 w-lg-60 text-center mx-auto">
          <h1 class="display-4 font-size-md-down-5 text-primary">My <span class="font-weight-semi-bold">Certifications</span></h1>
          <p class="lead">A.W.S., PHP, Blockchain, Comptia and more</p>
        </div>
      </div>

      <!-- SVG Background -->
      <figure class="position-absolute right-0 bottom-0 left-0">
        <img class="js-svg-injector" src="/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
             data-parent="#SVGwave1BottomSMShape">
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Portfolio Section -->
    <div class="container space-2 space-bottom-md-3">
      <div class="u-cubeportfolio">
        <ul id="filterControls" class="list-inline cbp-l-filters-alignRight text-center">
          <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item" data-filter="*">All</li>
          <?php foreach ($certification_tags as $certification_tag): ?>
          <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".<?php echo $certification_tag->name; ?>"><?php echo $certification_tag->name; ?></li>
          <?php endforeach; ?>

        </ul>

        <!-- Content -->
        <div class="cbp"
             data-layout="grid"
             data-controls="#filterControls"
             data-animation="quicksand"
             data-x-gap="32"
             data-y-gap="32"
             data-media-queries='[
              {"width": 1500, "cols": 4},
               {"width": 1100, "cols": 4},
               {"width": 800, "cols": 3},
               {"width": 480, "cols": 2},
               {"width": 300, "cols": 1}
            ]'>
            <?php foreach ($certifications as $certification): ?>
          <!-- Item -->
          <div class="cbp-item <?php echo $certification->tag_name; ?>">
            <a class="cbp-caption" href="<?php echo $certification->url; ?>" target="_blank">
              <img class="rounded" src="/uploads/certification/<?php echo $certification->image_filename; ?>" alt="<?php echo $certification->name; ?>">
              <div class="py-3">
                <h4 class="h6 text-dark mb-0"><?php echo $certification->name; ?></h4>
                <p class="small mb-0"><?php echo $certification->description; ?></p>
              </div>
            </a>
          </div>
          <!-- End Item -->
          <?php endforeach; ?>
        </div>
        <!-- End Content -->
      </div>
    </div>
    <!-- End Portfolio Section -->
