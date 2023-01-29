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
  
  $font_size = (80 + (rand(0,15) * 5));
  
  $aligns = array('center', 'left', 'right', 'justify');
  $text_align = $aligns[rand(0,3)];
  
  $styles = array('bold', 'italic', 'underline', 'uppercase');
  $style = $styles[rand(0,3)];

  $pages = array('Please visit mirnesglamocic.com', 'Welcome to my page!');
  $page = $pages[rand(0,1)]
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Welcome to my page!</title>
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
