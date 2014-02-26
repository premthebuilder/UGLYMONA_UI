module.exports = function(grunt){
  require('load-grunt-tasks')(grunt);
  grunt.initConfig({
    watch: {
      options: {
        livereload: true
      },
      sass: {
        files: 'public/assets/**/*.scss',
        tasks: ['sass:dev', 'notify:dev']
      },
      src: {
        files: ['public/assets/vendor/**/*.js', 'public/assets/scripts/**/*.js'],
        tasks: ['concat', 'notify:dev']
      }
    },

    notify: {
      dev: {
        options: {
          title: 'Tasks complete',
          message: 'Sass & Concat finished running'
        }
      }
    },

    concat: {
      structure: {
        src: [
          'public/assets/vendor/jquery/jquery.js',
          'public/assets/vendor/dropkickjs/dropkick.js',
          'public/assets/vendor/foundation/js/foundation.js',
          'public/assets/vendor/foundation/js/foundation.orbit.js'
        ],
        dest: 'public/scripts/structure.js'
      },
      app: {
        src: [
          'public/assets/scripts/app.js'
        ],
        dest: 'public/scripts/app.js'
      }
    },

    sass: {
      dev: {
        options: {
          noCache: true,
          includePaths: ['public/assets/vendor/foundation/scss', 'public/assets/styles']
        },
        files: [{
          expand: true,
          cwd: 'public/assets/styles',
          src: ['**/*.scss'],
          dest: 'public/styles',
          ext: '.css'
        }]
      }
    }
  });

  grunt.registerTask('default', ['watch']);
};