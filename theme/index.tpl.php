<!DOCTYPE html>
<html lang="<?=$lang?>" class="no-js"> <!-- Modernizr will replace the class 'no-js' with a list of features supported by the browser -->
<head>
<meta charset="utf-8"/>
<title><?=get_title($title)?></title>

<!-- favicon -->
<?php if(isset($favicon)): ?><link rel="shortcut icon" href="<?=$favicon?>"/><?php endif; ?>

<!-- stylesheets -->
<?php foreach($stylesheets as $val): ?>
<link rel="stylesheet" type="text/css" href="<?=$val?>" />
<?php endforeach; ?>

<!-- modernizr -->
<script src="<?=$modernizr?>"></script>

</head>
<body>

<div class="wrapper">
    <header><?=$header?></header>
    <main><?=$main?></main>
    <footer><?=$footer?></footer>
</div>

<!-- jQuery -->
<?php if(isset($jquery)):?><script src="<?=jquery?>"></script><?php endif;?>

<!-- js-files -->
<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
    <script src="<?=$val?>"></script>
<?php endforeach; endif; ?>

<!-- Google analytics -->
<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>
