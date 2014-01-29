<?php
/*
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
*/

/**
 * ::: WPMVC ROUTER FILE :::
 * The router file contains functionality for hooking up WP actions and filters to controller methods in the plugin.
 */

namespace plugins\WPMVCExamplePlugin;
use plugins\WPMVC\Core\WPMvcRouter;

class WPMVCExamplePlugin extends WPMvcRouter {

    /**
     * The $registerPostTypeModels variable tells WPMVC which models that are custom post types, so WPMVC can load in an create these post types in WP when loaded.
     * Please notice that models listed here should extend the plugins\WPMVC\Core\model\CustomPostModel
     * @var array
     */
    protected $registerPostTypeModels = array('ExamplePostType');

    /**
     * -------------
     * HookUp Method
     * -------------
     * The hookUp method gets automatically called in the parents constructor and has to exists in the router
     * Here we place all hooks to actions and filters in WP.
     * We can use the WPMvcRouter method loadController to pass in controller methods we wants to hook up.
     *
     * The syntax for the controller is as following:
     * $this->loadController(String controllerClassName, String controllerMethod), which will return an Array with a created object and method.
     * Controllers loaded trough this method has to be put into the controller folder of the plugin
     *
     * WPMVC will keep track on controllers and only create new controller objects when needed(singleton pattern)
     */
    public function hookUp() {

        //We are creating some shortcodes that will show a form and list of our custom post types
        add_shortcode('examplePostForm', $this->loadController('ExampleController', 'showPostForm'));
        add_shortcode('examplePostList', $this->loadController('ExampleController', 'showPostList'));
    }
}

if(!isset($WPMVCExamplePlugin)) {
    $WPMVCExamplePlugin = new WPMVCExamplePlugin();
}