=== Say Sorry Google ===
Contributors: laoha
Tags: disable google fonts, Transfer google map, Transfer google lib
Requires at least: 2.6.0
Tested up to: 4.0
Stable tag: 1.0.0

自动禁用google fonts,自动将来自maps.googleapis.com 和ajax.googleapis.com的js文件转址到可访问的地方。

== Description ==

中国大陆地区使用wordpress无法访问google网站字体、库、地图的的替代插件

在中国，人们无法访问google.当使用wordpress时，如果主题或插件中引入了google fonts,网页打开将会很慢很慢,所以只能对google说声对不起了，这个插件就是用来禁用google fonts的，不管任何主题还是插件，如果导入了google fonts,都将自动屏蔽。 同时，来自 ajax.googleapis.com 的js将转址到 ajax.useso.com ,来自 maps.googleapis.com 的将转址到 ditu.google.cn (谷歌地图),确保你能访问到。

In China, We cannot access the Google . When using WordPress, if the Google fonts included in the theme or plugin, open the web page will be very slow, so only say "sorry google", we have to close the Google fonts. This plugin will disable all google fonts in any theme or plugin. At the same time, any js files from ajax.googleapis.com will be transferred to ajax.useso.com , and maps.googleapis.com will be transferred to ditu.google.cn , make sure you can access

== Installation ==

1. Upload `say-sorry-google.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

*Note that plugin Only apply in the people's Republic of China .

== Frequently Asked Questions ==


== Screenshots ==



== Changelog ==

= 1.0.0 =
* First version. 
