<script>
//   new Glide('.glide-fade').mount()
console.log('LEH glide loaded in footer');
var glide_fade = document.querySelectorAll('.glide-fade');
for (var i = 0; i < glide_fade.length; i++) {
  var glide = new Glide(glide_fade[i], {
    animationDuration: 250,
    keyboard: false
  });
  glide.mount();
}
</script>