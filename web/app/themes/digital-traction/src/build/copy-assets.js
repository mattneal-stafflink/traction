const utils = require( './utils' );

// Copy all Bootstrap SCSS files.
utils.copyDir( './node_modules/bootstrap/scss', './src/sass/assets/bootstrap5' );
