# Test task

Made for aisconverse.com

## Main template hierarchy 
  - acf-json
  - favicon
  - frontend
  - lib
  - templates
  - footer.php
  - front-page.php
  - functions.php
  - header-front.php
  - header.php
  - index.php
  - searchform.php
  - style.css

### Acf-json
Folder stores acf fields in json format to quick transfer to another site

### Favicon
List of favicon files and config

### Frontend
Main folder with `styles/js/img/fonts`. All developer files stored in `./src/` directory.
### scss
All scss devided to separate files basing to the blocks name according to BEM methodology. Custom styles lied are located in folder `./components/`.
All those files imported in file `app.scss`, which is compiled into `app.css` and included to html with custom function `miracle_reg_scripts()` (`init.php` file in `./lib/` directory).
Before custom styles I have imported bootstrap files from directory `./bootstrap/`.

### js
All js, that I used is located in `app.js`. Before this I also include `bootstrap.js` file with all needed components.
Js also includes on page with function `miracle_reg_scripts()`

### lib
##### ajax.d
Folder for ajax functions, which is connecting to `functions.php` from `init.php`
##### func.d
Folder for template functions. All functions devided onto separate files and have own documentation
##### opt.d
Folder for functions, which are modifying admin panel adn adding pages and subpages
##### init.php
File, which includes `css` and `js` to html

### templates
Structure components, repeatable blocks for content, that is using more than once.

### footer.php
Code for footer

### front-page.php
Code for main page. Content of this page is tet for block `About us`. `News` is custom posts.  Slides are default posts, which user can modify with admin panel. All url's are active

### functions.php
Here includes all files from lib directory

### header-front.php
Code for header of the page. Here located only visible html after `<body>` starts. Menu is generating, using `WP_Bootstrap_Navwalker`, which is located in `./lib/func.d/walker-menu.class.php`. Search form includes from widget area from admin panel. `HTML` template for this widget is located in `searchform.php`.

### header.php
All the html before `<body>`.

### index.php
Default file for pasting content of every page. Creating this file will prevent this site from blank pages.

### searchform.php
Template for searchform

### style.css
Default file for wordpress themplate with all the info about theme.

## test-child
  - functions.php
  - style.css
  - single.php

### functions.php
Additional functionality  for theme. Here located functions for adding test `shortcode` and test task dividing array on subarrays.

### style.css
Required file for child theme. Here located link to parent theme directory

### single.php
File created specially for testing task with dividing array. Every time array fills with random numbers from 0 to 10. Then `divide_array` function is calling. Result of this function is subarrays, sum of it's elements almost equal each other.

## HelloWorld plugin
Contains one file, which is hangs on `the_content` filter and adds on the end of it text `hello_world` with color, which depends on part of the day.

### Installation

To compile files use this instructions. However directory `dist` contains all compiled files.

For this project I use [Node.js](https://nodejs.org/) v9.3.0 to run.

Install the dependencies and devDependencies in `frontend` directory and start the server.

```sh
$ npm install
$ npm start
```