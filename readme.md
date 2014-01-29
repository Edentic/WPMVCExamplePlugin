WPMVC Example Plugin
====================
WPMVC Example Plugin is a example plugin for WordPress using the WPMVC framework.
Please see description of file function in the individual files.

The WPMVC Example Plugin consists of the following file structure:
------------------------------------------------------------------
            - index.php - Plugin main file
            - router.php - The plugin router which hooks up to WordPress using the hooks provided by WordPress
                /controller
                    - ExampleController.php - Example controller which has methods that hooks into WP
                /model
                    - ExamplePostType.php - Example custom post model, which represents a custom post type in WP
                /view
                    - form.php - HTML form for creating custom post entries
                    - postList.php - HTML list for listing custom post

Please notice that the [WPMVC plugin](https://github.com/Edentic/WPMVC) should be installed for the plugin to work properly.
