module.exports = function(grunt) {

  grunt.initConfig({
    browserify: {
      buildJS: {
        src: 'resources/assets/js/app.js',
        dest: 'public/js/bundle.js',
        potions: {
          debug: true
        }
      }
    },
    uglify: {
      bundle: {
        src: 'public/js/bundle.js',
        dest: 'public/js/bundle.js'
      }
    },
    watch: {
      options: {
        livereload: true
      },
      js:{
        files: ['resources/assets/**/*.js'],
        tasks: ['browserify:buildJS']
      },
      css:{
        files: ['resources/assets/**/*.css'],
        tasks: ['concat:css']
      }

    },
    concat: {
      bowerJS: {
        src: ['bower_components/jquery/dist/jquery.min.js','bower_components/weather-widget/dist/weather-widget.js'],
        dest: 'public/js/bower_vendors.js'
      },
      bowerCSS: {
        src: ['bower_components/weather-widget/dist/weather-widget.css'],
        dest: 'public/css/bower_vendors.css'
      },
      css: {
        src: 'resources/css/*.css',
        dest: 'public/css/main.css'
      }
    }
  });

  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('stage', ['browserify:buildJS','concat']);
  grunt.registerTask('prod', ['browserify:buildJS', 'uglify', 'concat']);
  grunt.registerTask('dev', ['stage','watch']);

};