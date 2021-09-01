Filterable Portfolio
____________________________________________________________

Bootstrap v5
jQuery
sass including mixin and animations
npm packages for compiling scss files

__________________________________________________________

Intial setup commands

npm init --- This will create basic package.json file

require packages and their installation such as

npm install --save-dev sass
npm install bootstrap
npm install @fortawesome/fontawesome-free --save
npm install postcss-cli autoprefixer --save

Add script in package.json file. This command will compile the scss file and watch the changes in scss file contineousely.

"compile:sass": "sass --watch scss:assets/css"

create new scss directory in project roor directory.

Now run this command "npm run compile:sass" from terminal. After successful compilation you can see assets/css folders are created.

Next we have import bootstrap.scss file in our project style.scss file
@import "../node_modules/bootstrap/scss/bootstrap.scss";

Again run the command "npm run compile:sass" you will get compiled css files in assets/css directory.

So you have to use this style.css file as a main stylesheet for your project.
