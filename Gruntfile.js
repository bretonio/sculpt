module.exports = function(grunt) {

  grunt.initConfig({

    concat: {
      build: {
        src: ['js/inc/*.js', 'js/sculpt.js', '!js/inc/mc-validate.js'],
        dest: 'js/scripts.js',
      }
    },

    sass: {
      options: {
        style: 'normal'
      },
      dist: {
        files: {
          'scss/build.css': 'scss/style.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 3 versions', 'ie 9']
      },
      dist: {
        files: {
          'style.css': 'scss/build.css'
        }
      }
    },

    svgstore: {
      options: {
        prefix : '', // This will prefix each ID
        inheritviewbox: true,
        svg: { // will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
          viewBox : '0 0 100 100',
          xmlns: 'http://www.w3.org/2000/svg',
          style: 'display:none'
        }
      },
      default: {
        files: {
          'assets/sculpt_logo.svg' : 'assets/icons/src/logo/*.svg',
        }
      }
    },

    phplint: {
      options: {
        phpArgs : {
            '-lf': null
        }
      },

      all : {
        src : ['modules/*.php', '*.php']
      }
    },

    watch: {
      css: {
        files: 'scss/**/*.scss',
        tasks: ['sass', 'autoprefixer']
      },
      js: {
        files: ['js/sculpt.js', 'js/inc/*.js', '!js/inc/mc-validate.js'],
        tasks: ['newer:concat']
      },
      php: {
        files: '**/*.php',
        tasks: 'phplint'
      }
    }

  });


  // Load the plugins
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-svgstore');
  grunt.loadNpmTasks('grunt-phplint');

  // Default tasks
  grunt.registerTask('default', ['watch']);

}