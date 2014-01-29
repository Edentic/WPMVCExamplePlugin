<!--
The MIT License (MIT)

Copyright (c) 2013 Edentic I/S

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
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