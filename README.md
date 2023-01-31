# PHP assignment test project - Q Agency

## About
The project consists of two folders: php_client and wp-content. Let's go quickly through both of these: 
1. php_client folder contains all the logic for connecting and working with [Q Symfony Skeleton API](https://symfony-skeleton.q-tests.com/docs). It's a small PHP client application based on [Guzzle](https://docs.guzzlephp.org/en/stable/).
2. wp-content contains the logic for manipulating all the movie data defined in the test.

## How to use
Both folders ( php_client & wp_content ) should be placed into the root directory of the WordPress site. The test is fully working on WordPress version 6.1.1


### php_client
The first application ( php_client ) can only work once the dependencies are installed, and this is handled by [Composer](https://getcomposer.org/). 
You can install these by running this command through your terminal from the php_client directory: 
``` composer
composer installl
```
Once the process is completed, you can test the application through path: www.{SITE_URL}.com/php_client

### wp-content
The second folder ( wp-content ) consists of a default WordPress theme [twentytwentyone](https://wordpress.org/themes/twentytwentyone/) and a custom plugin called Movies. Before testing these two, you should import the database from the database.sql file. Link for sed command: `http://localhost/wp_tester02`
Once the import is completed, you can test the features from the test assignment ( assuming the plugin and the theme are activated ).

## How to edit / modify 
* Twentytwentyone theme from the wp-content/themes folder contains a file `single-movies.php` which renders all the data from the movies custom post type.
* Movies plugin from the wp-content/plugins folder contains all the logic for displaying & editing the movie data from custom post type movies. The block data showing up in the WP backend can be modified from /src/edit.js
All the server-side logic is placed under /features directory. In order for any block changes to work, you need to install dependencies & run the npm script for automation from the root plugin folder:  
    ``` npm
    npm install 
    npm run start
    ```
   The starting point for this plugin was the npx script from [create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/) WordPress resource:
    ``` npx
    npx @wordpress/create-block --variant dynamic movies
    ```
## Conclusion
If you have any questions or remarks, feel free to shoot me an email: todorovic.j.nenad@gmail.com