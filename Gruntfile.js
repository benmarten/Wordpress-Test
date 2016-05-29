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
          // 'wordpress/wp-content/themes/twentyfourteen/js/*.js',
          'wordpress/wp-content/themes/twentyfourteen/js/bootstrap.min.js',
          'wordpress/wp-content/themes/twentyfourteen/js/gmaps.js',
          'wordpress/wp-content/themes/twentyfourteen/js/bootstrap.min.js',
          'wordpress/wp-content/themes/twentyfourteen/js/audio.min.js',
          'wordpress/wp-content/themes/Splendid/js/plugins.js',
          'wordpress/wp-content/themes/Splendid/js/smoothscroll.min.js',
          'wordpress/wp-content/themes/Splendid/js/scripts.js',
        ],
        dest: 'wordpress/wp-content/themes/Splendid/js/all.js'
      },
      css: {
        options: {
          separator: ';'
        },
        src: [
          'wordpress/wp-content/themes/twentyfourteen/genericons/genericons.css',
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
      }
    },
    watch: {
      files: ['<%= jshint.files %>', '<%= concat.js.src %>', '<%= concat.css.src %>'],
      tasks: ['jshint', 'build']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('lint', ['jshint']);
  grunt.registerTask('build', ['concat', 'uglify', 'cssmin']);

  grunt.registerTask('default', ['jshint', 'watch']);

};
