<div id="title" class="overflow-hidden relative h-[260px] lg:h-[360px] xl:h-[460px]"> 
  <?php $large_image_url = wp_get_attachment_image( get_post_thumbnail_id(31), 'full', false, ['class' => 'h-full w-full object-cover grayscale', 'loading' => false]); ?>
  <?php echo $large_image_url; ?>
  <div class="absolute w-full h-full bg-gradient-to-br from-color-primary to-color-secondary/60 top-0 left-0"></div>
  <div class="absolute bottom-[22%] lg:bottom-[18%] xl:bottom-[16%] left-0 w-full">
    <div class="container mx-auto w-full">
      <h1 class="text-white text-center text-4xl md:text-5xl lg:text-6xl px-5 lg:px-10">404 Error</h1>
    </div>
  </div>
</div>