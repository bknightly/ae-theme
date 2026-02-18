<div id="title" class="overflow-hidden relative h-[260px] lg:h-[360px] xl:h-[460px]">
  <?php the_post_thumbnail('full', ['class' => 'h-full w-full object-cover grayscale', 'loading' => false]); ?>
  <div class="absolute w-full h-full bg-gradient-to-br from-color-primary to-color-secondary/60 top-0 left-0"></div>
  <div class="absolute bottom-[22%] lg:bottom-[18%] xl:bottom-[16%] left-0 w-full">
    <div class="container mx-auto w-full">
      <h1 class="text-white text-4xl md:text-5xl lg:text-6xl px-5 lg:px-10"><?php the_title(); ?></h1>
    </div>
  </div>
</div>