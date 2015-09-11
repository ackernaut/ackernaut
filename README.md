# ackernaut
ATP Global landing page as designed by eight90

## Local development
* Install:
  * [Jekyll](http://jekyllrb.com/docs/installation/)
  * [Bundler](http://bundler.io/#getting-started)
  * [SCSS-Lint](https://github.com/brigade/scss-lint#installation)
  * [node](https://nodejs.org/download/)
  * [gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
  * Consider using [Homebrew](http://brew.sh/) to install some of the tools.
* Run:
  * `npm install`
  * `gulp`
  * `bundle install`
  * `jekyll serve --baseurl ''`
  * Running `gulp watch` comes in handy while developing.

## Highlights

### Design
* Design by eight90: http://d.pr/i/1c2U9

### Scripts
* The script can be built and linted using `gulp scripts` and `gulp jshint`.
* The `gulpfile.js` represents a minimal build for this design.

### Styles
* Run `gulp styles` to build and `gulp scsslint` to lint.
* The styles are built using `gulp-autoprefixer` to keep the definitions clean of vendor prefix maintenance.
