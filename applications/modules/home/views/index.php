<div class="container">
    <h1><?php echo _TR_CategoriesList ?></h1>
    
    <hr/>

    <?php
    $i = 0;
    foreach($categories as $category)
    {
    	?>
    	<a href="./<?php echo $category->id ?>-<?php echo url($category->name) ?>/instances" class="shortcut <?php echo $category->sizeW." ".$category->sizeH." ".$category->color?> shadow" title="<?php echo ucfirst($category->name);?>">
    		<span class="glyphicon glyphicon-play-circle"></span>
    			<?php echo ucfirst($category->name);?>
    		<small class="bg-black fg-white"><?php echo $category->instancesCount ?></small>
    	</a>
    	<?php
    }
    ?>
</div>