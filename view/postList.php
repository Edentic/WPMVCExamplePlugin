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