
<?php





for( $i=0; $i<count($categories); $i++){
    ?>
    <ul>
        <li>
            <a href="<?php echo base_url(); ?>category?id=<?php echo $categories[$i]['category']->id; ?>"><?php echo $categories[$i]['category']->name; ?></a>
            <?php if(count($categories[$i]['childs'])) { ?>
                <ul>
                    <?php for( $j=0; $j<count($categories[$i]['childs']); $j++){ ?>
                        <li><a href="<?php echo base_url(); ?>category?id=<?php echo $categories[$i]['childs'][$j]->id; ?>"><?php echo $categories[$i]['childs'][$j]->name; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
    </ul>
    <?php
}
?>


this is header