<?php render('_header',array('title'=>$title))?>
<div style='text-align: center;'>
    <p>
        <h3>Today is <?php echo date('d')?>-<?php echo date('M')?>-<?php echo date('Y')?></h3>
    </p>
</div>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Choose a product category</li>
    <?php render($content) ?>
</ul>

<?php render('_footer')?>