'use strict';

const pkg = require( '../../package.json' );
const year = new Date().getFullYear();

function getBanner() {
	return `/*!
 * Digital Traction (${ pkg.homepage })
 * Copyright 2023-${ year } Matthew Neal
 * Licensed under ${ pkg.license }
 */`;
}

module.exports = getBanner;
