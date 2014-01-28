<div class="postList">
    <?php if(isset($list) && is_array($list)) { //Check if the parsed variables exists for the view
        foreach($list as $customPostObject) { //Loop trough the list and echo out the different object data
        ?>
        <div class="customPostItem">
            <h2><?php echo $customPostObject->getPostTitle(); ?></h2>
            <p><small>Date: <?php echo $customPostObject->getPostDate()->format('Y-m-d'); ?></small></p>
            <p>Meta data: <?php echo $customPostObject->getMyCustomPostMeta(); ?></p>
            <p><?php echo $customPostObject->getPostContent(); ?></p>
        </div>
    <?php }} ?>
</div>