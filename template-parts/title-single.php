<div id="title" class="overflow-hidden relative h-[calc(100vh-48px)] sm:h-screen lg:h-[calc(100vh-60px)] xl:h-screen">
  <?php the_post_thumbnail('full', ['class' => 'h-full w-full object-cover grayscale', 'loading' => false]); ?>
  <div class="absolute w-full h-full bg-gradient-to-br from-color-primary to-color-secondary/60 top-0 left-0"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full">
    <div class="container mx-auto w-full">
      <h1 class="text-white w-full md:w-3/4 mx-auto text-center text-[2.75rem] md:text-[5rem] xl:text-[6rem] 2xl:text-[7rem] md:px-5 lg:px-10"><?php the_title(); ?></h1>
    </div>
  </div>
</div>