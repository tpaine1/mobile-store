<?php render('_header',array('title'=>$title))?>

<p>Welcome!  Today is <?php echo date('D')?>, <?php echo date('M d')?>, <?php echo date('Y')?></p>

<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Choose a product category</li>
    <?php render($content) ?>
</ul>

<?php render('_footer')?>