<?php
// delete a value from an array using array_splice
function array_delete($value, $array) {
    $key = array_search($value, $array);
    $discarded = array_splice($array, $key, 1);
    return $array;
  }
  $colors = array('red', 'green', 'blue', 'yellow', 'purple');
  $color_count = count($colors);
  $bg_color = $colors[rand(0,$color_count-1)];

 $text_colors = array_delete($bg_color, $colors);
  $text_color_count = count($text_colors);
  $text_color = $text_colors[rand(0, $text_color_count -1)];
  
  $font_size = (80 + (rand(0,15) * 3));
  
  $aligns = array('center', 'left', 'right', 'justify');
  $text_align = $aligns[rand(0,3)];
  
  $styles = array('bold', 'italic', 'underline', 'uppercase');
  $style = $styles[rand(0,3)];

  $pages = array('Please visit <a href="https://mirnesglamocic.com" target="_blank">mirnesglamocic.com</a>', 'Welcome to <a href="https://mirnesglamocic.com" target="_blank">my page</a>!');
  $page = $pages[rand(0,1)]
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Welcome to my page!</title>
    <meta name="description" content="A simple single-serving web site that randomly changes text, background color, font style, font size, font color, and text-align.">
    <meta name="author" content="Mirnes Glamočić">
    <!-- Facebook & Viber -->
    <meta name="title" property="og:title" content="PHP-One page site">

    <!-- Facebook, Viber, LinkedIn, Whatsapp & KakaoTalk(meta tags) -->
    <meta property="og:url" content="https://php-one-page-site.mirnesglamocic.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://php-one-page-site.mirnesglamocic.com/mockup-og.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="PHP-One page site">
    <meta property="og:site_name" content="PHP-One page site">
    <meta property="og:locale" content="en_us">
    <meta property="fb:app_id" content="1007101964814604">

    <!-- LinkedIn, Whatsapp & KakaoTalk(meta tag) -->
    <meta property="og:title" content="PHP-One page site">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PHP-One page site">
    <meta name="twitter:description" content="A simple single-serving web site that randomly changes text, background color, font style, font size, font color, and text-align.">
    <meta name="twitter:image:src" content="https://php-one-page-site.mirnesglamocic.com/mockup-og.webp">
    <meta name="twitter:image:alt" content="PHP-One page site">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="https://php-one-page-site.mirnesglamocic.com/">
    <meta itemprop="description" content="A simple single-serving web site that randomly changes text, background color, font style, font size, font color, and text-align.">
    <meta itemprop="image" content="PHP-One page site">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: <?php echo $bg_color; ?>;
      color: <?php echo $text_color; ?>;
      font-size: <?php echo $font_size; ?>px;
      text-align: <?php echo $text_align; ?>;
      <?php
      switch($style) {
        case 'bold':
          echo "font-weight: bold;";
          break;
        case 'italic':
          echo "font-style: italic;";
          break;
        case 'underline':
          echo "text-decoration: underline;";
          break;
        case 'uppercase':
          echo "text-transform: uppercase;";
          break;
          case 'lowercase':
            echo "text-transform: lowercase;";
            break;
      }
      ?>
    }
  	</style>
  </head>
  <body>
    <p><?php echo $page; ?></p>
  </body>
</html>
