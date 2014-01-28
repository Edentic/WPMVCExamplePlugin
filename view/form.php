<div class="examplePostForm">
    <h2>Our example custom post form</h2>
    <form method="post">
        <p>
            <input type="text" placeholder="Example post title" name="exampleTitle" value="<?php echo (isset($_POST['exampleTitle'])) ? $_POST['exampleTitle'] : ''; ?>">
        </p>
        <p>
            <input type="text" placeholder="Example post meta field" name="exampleMeta" value="<?php echo (isset($_POST['exampleMeta'])) ? $_POST['exampleMeta'] : ''; ?>">
        </p>
        <p>
            <textarea placeholder="Example content" name="exampleContent">
                <?php echo (isset($_POST['exampleContent'])) ? $_POST['exampleContent'] : ''; ?>
            </textarea>
        </p>
        <input type="hidden" name="saveExamplePostData_noOnce" value="<?php echo (isset($noOnce)) ? $noOnce : ''; ?>">
        <input type="submit" value="Save" />
    </form>
</div>