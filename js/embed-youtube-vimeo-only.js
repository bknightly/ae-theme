// From https://wordpress.stackexchange.com/questions/379612/how-to-remove-the-core-embed-blocks-in-wordpress-5-6#answer-380977

wp.domReady(function () {

  var embed_variations = [
    'amazon-kindle',
    'animoto',
    'cloudup',
    'collegehumor',
    'crowdsignal',
    'dailymotion',
    'facebook',
    'flickr',
    'imgur',
    'instagram',
    'issuu',
    'kickstarter',
    'meetup-com',
    'mixcloud',
    'pinterest',
    'reddit',
    'reverbnation',
    'screencast',
    'scribd',
    'slideshare',
    'smugmug',
    'soundcloud',
    'speaker-deck',
    'spotify',
    'ted',
    'tiktok',
    'tumblr',
    'twitter',
    'videopress',
    //'vimeo'
    'wolfram-cloud',
    'wordpress',
    'wordpress-tv',
    //'youtube'
  ];

  for (var i = embed_variations.length - 1; i >= 0; i--) {
    wp.blocks.unregisterBlockVariation('core/embed', embed_variations[i]);
  }
});

console.log('youtube/vimeo embed only workin');