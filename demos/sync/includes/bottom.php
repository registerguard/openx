<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../assets/scripts/jquery.cookie.min.js"></script>

<script src="//advertising.registerguard.com/assets/billboard/1.4/js/billboard.js"></script>

<script>
	
	$(document).ready(function() {
		
/* global define */
// https://github.com/umdjs/umd
// http://toddmotto.com/what-function-window-document-undefined-iife-really-means/
// ;(function (root, factory) {
// 	'use strict';
// 	if (typeof define === 'function' && define.amd) {
// 		define(function() {
// 			return (root.FOO = factory(root, (root.FOO || {})));
// 		});
// 	} else {
// 		root.FOO = factory(root, (root.FOO || {}));
// 	}
// 	}(this, function(foo) {
// 		if (typeof foo != '')
// 		return foo = {
// 			baz: window.innerWidth,
// 			bar: document.getElementsByTagName('body')[0],
// 			zilch: undefined
// 		};
// 	},
// window, document, undefined));
//!function(n,e){"function"==typeof define&&define.amd?define(function(){return n.FOO=e(n,n.FOO||{})}):n.FOO=e(n,n.FOO||{})}(this,function(n){return""!=typeof n?n={baz:window.innerWidth,bar:document.getElementsByTagName("body")[0],zilch:void 0}:void 0},window,document,void 0);

/* global define */
// https://github.com/umdjs/umd
// http://toddmotto.com/what-function-window-document-undefined-iife-really-means/
// ;(function (root, factory) {
// 	'use strict';
// 	if (typeof define === 'function' && define.amd) {
// 		define(function() {
// 			return (root.FOO = factory(root, (root.FOO || {})));
// 		});
// 	} else {
// 		root.FOO = factory(root, (root.FOO || {}));
// 	}
// }(this, function(foo) {
// 	return foo = {
// 		baz: window.innerWidth,
// 		bar: document.getElementsByTagName('body')[0],
// 		zilch: undefined
// 	};
// }));
// var $foo = window.document.FOO;
//console.log($foo.baz, $foo.bar, $foo);

// https://github.com/umdjs/umd
// http://toddmotto.com/what-function-window-document-undefined-iife-really-means/
// ;(function (root, factory) {
// 	if (typeof define === 'function' && define.amd) {
// 		define(function() {
// 			return (root.FOO = factory(root, (root.FOO || {})));
// 		});
// 	} else {
// 		root.FOO = factory(root, (root.FOO || {}));
// 	}
// 	}(this, function(foo) {
// 		// Screen and viewport info.
// 		// http://stackoverflow.com/a/11744120/922323
// 		var $window = window;
// 		var $document = document;
// 		var $screen = $window.screen;
// 		var $documentElement = $document.documentElement;
// 		var $body = $document.getElementsByTagName('body')[0];
// 		return foo = {
// 			w: $screen.width,
// 			h: $screen.height,
// 			x: $window.innerWidth || $documentElement.clientWidth || $body.clientWidth,
// 			y: $window.innerHeight || $documentElement.clientHeight || $body.clientHeight,
// 			r: $window.devicePixelRatio
// 		};
// 	},
// window, document, undefined));
// var info = window.document.FOO;
// console.log(info);
		
		var w = window;
		var d = document;
		var e = d.documentElement;
		var g = d.getElementsByTagName('body')[0];
		var x = w.innerWidth || e.clientWidth || g.clientWidth;
		var y = w.innerHeight || e.clientHeight || g.clientHeight;
		var sx = w.screen.width;
		var sy = w.screen.height;
		var dpr = w.devicePixelRatio;
		
		$('.details').append([
			'<br>',
			'<b>Screen:</b>',
			' ',
			sx + 'x' + sy,
			' ',
			'(' + dpr + ' dpr)',
			'<br>',
			'<b>Window:</b>',
			' ',
			x + 'x' + y,
			'<br>',
			((x <= 1005) ? 'mobile' : 'desktop')
		]);
		
	});
	
</script>
