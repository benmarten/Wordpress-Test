'use strict';

module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      files: [
        'Gruntfile.js',
        // 'src/**/*.js',
        // 'test/**/*.js'
      ],
      options: {
        globals: {
          jQuery: true
        },
        jshintrc: '.jshintrc'
      }
    },
    concat: {
      js: {
        options: {
          separator: ';'
        },
        src: [
          'wordpress/wp-includes/js/jquery/jquery.js',
          'wordpress/wp-includes/js/jquery/jquery-migrate.js',
          'wordpress/wp-content/themes/twentyfourteen/js/functions.js',
          'wordpress/wp-content/themes/twentyfourteen/js/loadCss.js'
        ],
        dest: 'wordpress/wp-content/themes/twentyfourteen/js/all.js'
      },
      css: {
        options: {
          separator: ';'
        },
        src: [
          // 'wordpress/wp-content/themes/twentyfourteen/genericons/genericons.css',
          'wordpress/wp-content/themes/twentyfourteen/style.css',
        ],
        dest: 'wordpress/wp-content/themes/twentyfourteen/css/all.css'
      }
    },
    uglify: {
      options: {
        mangle: false
      },
      js: {
        files: {
          'wordpress/wp-content/themes/twentyfourteen/js/all.min.js': ['wordpress/wp-content/themes/twentyfourteen/js/all.js']
        }
      }
    },
    cssmin: {
      prod: {
        files: [{
          expand: true,
          cwd: 'wordpress/wp-content/themes/twentyfourteen/css/',
          src: ['all.css'],
          dest: 'wordpress/wp-content/themes/twentyfourteen/css/',
          ext: '.min.css'
        }]
      },
      aboveTheFold: {
        files: [{
          expand: true,
          cwd: 'wordpress/wp-content/themes/twentyfourteen/css/',
          src: ['aboveTheFold.css'],
          dest: 'wordpress/wp-content/themes/twentyfourteen/css/',
          ext: '.min.css'
        }]
      }
    },
    watch: {
      files: ['<%= jshint.files %>', '<%= concat.js.src %>', '<%= concat.css.src %>'],
      tasks: ['jshint', 'build']
    },
    penthouse: {
      extract: {
        outfile: 'wordpress/wp-content/themes/twentyfourteen/css/aboveTheFold.css',
        css: './wordpress/wp-content/themes/twentyfourteen/css/all.css',
        url: 'http://localhost:8080',
        width: 1300,
        height: 900,
        skipErrors: false // this is the default
      },
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-penthouse');

  grunt.registerTask('lint', ['jshint']);
  grunt.registerTask('build', ['concat', 'uglify', 'cssmin:prod']);
  grunt.registerTask('generateCriticalCSS', ['penthouse', 'cssmin:aboveTheFold']);

  grunt.registerTask('default', ['jshint', 'watch']);

};
