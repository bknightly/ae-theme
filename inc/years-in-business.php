<?php
	// From https://stackoverflow.com/questions/1112835/calculate-years-from-date#answer-14590927
	$birthdate = new DateTime("1997-07-29");
	$today     = new DateTime();
	$interval  = $today->diff($birthdate);
	$years_in_business = $interval->format("%y");
?>
<?php if ( ! is_page('Home') && ! is_admin() ) : ?>
	<div class="absolute container left-1/2 -translate-x-1/2 text-right font-lato font-bold text-xs xl:text-base opacity-70 top-3 lg:top-24 xl:top-32 text-white z-[1] print:hidden">Serving Hawaii For <?php echo $years_in_business; ?> Years!</div>
<?php else : ?>
	<p id="element4" class="text-white font-lato text-sm xl:text-lg 2xl:text-xl font-bold my-0 leading-none">Serving Hawaii For <?php echo $years_in_business; ?> Years!</p>
<?php endif; ?>