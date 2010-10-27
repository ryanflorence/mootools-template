/*
---

name: console

description: Wraps console for browsers w/o one

license: MIT-style license.

copyright: Copyright (c) 2010 [Ryan Florence](http://ryanflorence.com/).

authors: Ryan Florence

provides: [console]

...
*/

if (!this.console) {
	var noop = function(){}
	, noops = 'assert group groupEnd info error trace warn'.split(' ');
	this.console = {
		// can print out messages with console.history
		history: [],
		log: function(){ this.history.push(Array.prototype.slice.call(arguments)); }
	};
	for (var i = 0, l = noops.length; i < l; i++){
		console[i] = noop;
	}
};
