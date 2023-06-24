Boilerplate Theme
=============

A full-featured WordPress theme by Birk Thestrup Blauner.

## How to

In Theme folder run the following

`git clone https://github.com/bbcbirk/WP-Theme-Boilerplate.git THEMENAME`  
`cd .\THEMENAME\`  
`rm -R .\.git\`  

### Search and Replace the Following

`[THEMENAME]` - Name of Theme  
`[THEME_KEBAB]` - project-name (kebab lowercase)  
`[THEME_UNDERSCORED]` - project_name (underscored lowercase)  
`[THEME_CAMELCASED]` - projectName (camelCased)  
`[THEME_PASCALCASED]` - ProjectName (PascalCased)  

### Composer

Run `composer update`

## CSS & JS

Enter the assets/src and run in the terminal'

`npm install`  
`npm run start:dev`

When done run the following

`npm run build:prod:fix`

