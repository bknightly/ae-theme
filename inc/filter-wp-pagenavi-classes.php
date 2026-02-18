<?php
// More Concise Usage - 1 callback for all filters
add_filter('wp_pagenavi_class_pages', 'theme_pagination_class');
add_filter('wp_pagenavi_class_first', 'theme_pagination_class');
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_extend', 'theme_pagination_class');
add_filter('wp_pagenavi_class_smaller', 'theme_pagination_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_class');
add_filter('wp_pagenavi_class_current', 'theme_pagination_class');
add_filter('wp_pagenavi_class_larger', 'theme_pagination_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_last', 'theme_pagination_class');

function theme_pagination_class($class_name) {
  switch($class_name) {
		
		// wp_pagenavi_class_pages
		case 'pages':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700';
			break;
		
		// wp_pagenavi_class_first			
		case 'first':	
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;
		
		// wp_pagenavi_class_previouspostslink	
    case 'previouspostslink':
      $class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
      break;
		
		// wp_pagenavi_class_extend
		case 'extend':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;
		
		// wp_pagenavi_class_smaller
		case 'smaller':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;

		// wp_pagenavi_class_page
		case 'page':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;

		// wp_pagenavi_class_current
		case 'current':
			$class_name = 'font-lato inline-block mx-2 sm:mx-3 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 text-white bg-gradient-to-tl from-color-primary-dark to-color-primary bg-no-repeat';
			break;

		// wp_pagenavi_class_larger
		case 'larger':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;

		// wp_pagenavi_class_nextpostslink
    case 'nextpostslink':
      $class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
      break;

		// wp_pagenavi_class_last
		case 'last':
			$class_name = 'font-lato text-slate-500 inline-block mx-2 sm:mx-3 text-slate-700 shadow py-3 px-5 rounded-lg transition-all ease-in-out duration-300 hover:bg-gradient-to-tl hover:from-color-primary-dark hover:to-color-primary hover:bg-no-repeat hover:text-white';
			break;

  }
  return $class_name;
}
