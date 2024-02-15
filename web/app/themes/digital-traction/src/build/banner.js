'use strict';

const pkg = require( '../../package.json' );
const year = new Date().getFullYear();

function getBanner( pluginFilename ) {
	return `/*!
 * Digital Traction${ pluginFilename ? ` ${ pluginFilename }` : '' } v${ pkg.version } (${ pkg.homepage })
 * Copyright 2023-${ year } ${ pkg.author }
 * Licensed under ${ pkg.license } (${ pkg.licenseUrl })
 */`;
}

module.exports = getBanner;
