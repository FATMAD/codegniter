<?php

foreach ($list as $key => $value) {
	?>
<span><?php  echo site_url('News/nbre');   ?></span><br>

<br><a href = "<?php echo site_url('blog').'/'. $value->id ?>">

Article N°:<?php echo $value->id?></a><br>
<span><?php echo   $value->title; ?></span><br>

<span><?php echo substr($value->body, 0, 200); ?></span><br>

<span><?php echo substr($value->body, 0, 200); ?></span><br>

<a href=" <?php echo site_url('News/suite'); ?> ">
<input type="button" name="Lire suite " value="Suite"/></a>

<br><br><br>

<?php
};
?> 