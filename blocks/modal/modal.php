<?php
/* 
 * BLOCK: Modal
 * Modal block for sign up forms
 * Content: Modal Name, Image, Title, Description, Link?
*/

// Set class name from "Advanced" section in Dashboard edit page
// $className = '';
// if( !empty($block['className']) ) {
//     $className .= $block['className'];
// }

$modal_name = get_field('modal_name');
$image = get_field('image');
$title = get_field('title');
$description = get_field('description');
$button_text = get_field('button_text');
?>

<div class="block-modal mb-8 md:mb-12 last:mb-0">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 lg:gap-8">
        <div class="block-modal group h-full flex rounded-lg transition shadow hover:shadow-lg bg-white cursor-pointer" data-micromodal-trigger="<?php echo $modal_name; ?>">
            <div class="relative w-2/5 h-full rounded-tl-lg rounded-bl-lg overflow-hidden">
                <?php
                $image_class = array('class' => "w-full !h-full rounded-tl-lg rounded-bl-lg object-cover object-center transition-all group-hover:grayscale");
                echo wp_get_attachment_image($image, 'large', '', $image_class);
                ?>
                <div class="absolute w-full h-full top-0 left-0 rounded-tl-lg rounded-bl-lg transition-all duration-300 bg-gradient-to-br from-black/80 to-color-primary opacity-0 group-hover:opacity-90"></div>
                <svg class="absolute duration-500 opacity-0 fill-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-[40%] w-10 group-hover:opacity-100 group-hover:-translate-x-1/2 group-hover:-translate-y-1/2" enable-background="new 0 0 52 52" version="1.1" viewBox="0 0 52 52" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-white" d="M1,32v-12h18.9V1h12.1v18.9H51v12H32.1v19H19.9V32H1z"></path>
                </svg>
            </div>
            <div class="w-3/5 p-8 flex flex-col justify-center">
                <h3 class="text-2xl text-color-primary font-bold leading-none mt-4 mb-0 first:mt-0 transition-opacity hover:opacity-50">
                    <?php echo $title; ?>
                </h3>
                <p class="text-sm mt-4 mb-0 first:mt-0 !leading-6 2xl:text-base"><?php echo $description; ?></p>
                <div class="w-full rounded-lg overflow-hidden relative bg-gradient-to-tl from-gray-200 to-gray-50 border border-gray-200 py-5 mt-5 mb-0 transition-all hover:border-transparent hover:shadow-lg">
                    <div class="opacity-0 rounded-lg group-hover:opacity-100 transition duration-200 absolute inset-0 h-full w-full bg-gradient-to-br from-color-primary to-color-primary-dark"></div>
                    <span class="w-full font-lato text-sm font-bold text-slate-500 pl-4 transition-colors duration-300 group-hover:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 leading-none"><?php echo $button_text; ?> »</span>
                </div>
            </div>
            
        </div>
    </div>
</div>