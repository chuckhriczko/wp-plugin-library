# WP Plugin Skeleton
I wanted to make a simple skeleton using newer PHP features so it would be easier to prototype WordPress plugins.

## Installation
Since Composer features autoloading and it has a great community method, this is the only supported way to work with the library.
```
$ composer create-project chucksplayground/wp-plugin-skeleton:dev-master
```

## Basic Usage
The first thing you'll want to do is set up your composer.json file. It should be set up correctly but you'll want to change your namespacing in the psr-4 section. You will also want to update the init.php file and other files for namepacing changes.
