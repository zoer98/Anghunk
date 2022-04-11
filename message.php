<?php
/**
* 留言
*
* @package custom
*/

$this->need('header.php'); ?>
<div id="container">
    <header>
        <h1 class="post-title"><?php $this->title() ?></h1>
    </header>
    <div class="content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
   <?php $this->need('comments.php'); ?>
    
<?php $this->need('footer.php'); ?>
</div>

