# wpbs4

WordPress starter theme with bootstrap4 and webpack.

## Features

* Bootstrap4 ready
* fontawesome ready
* webpack ready
* Minimum and simple

## Installation

```bash
$ git clone git@github.com:ttskch/wpbs4.git
$ cd wpbs4
$ npm i
$ ln -s /path/to/wpbs4/public /path/to/wordpress/wp-content/themes/wpbs4
```

### How to change theme name

```bash
$ sed -i '1,/wpbs4/s/wpbs4/<theme-name>/' webpack.config.local.js public/*.php public/style.css
```
