<h1>Bonjour</h1>

<p>
<h1> <a href="<?php echo site_url('News/header'); ?>"> Header </a>   </h1>
<h1><a href="<?php echo site_url('News/afficher'); ?>">liste des articles </a> </h1>
<h1><a href="<?php echo site_url('News/footer'); ?>"> Footer </a>  </h1>
<h1> <a href="<?php echo site_url('News/article'); ?>"> Article  </a>   </h1>

</p>


<p>
    Ceci est mon paragraphe !  affichage des donnnes 
</p>

<p>
    Votre pseudo est <?php echo $pseudo; ?>.
</p>

<p>
    Votre email est <?php echo $email; ?>.
</p>

<p>
<?php if($en_ligne): ?>
    Vous êtes en ligne.
<?php else: ?>
    Vous n'êtes pas en ligne.
<?php endif; ?>
</p>