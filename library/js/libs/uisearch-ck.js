/**
 * uisearch.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */(function(e){"use strict";function t(){var t=!1;(function(e){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(e)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4)))t=!0})(navigator.userAgent||navigator.vendor||e.opera);return t}function n(e,t){this.el=e;this.inputEl=e.querySelector("form > input.sb-search-input");this._initEvents()}!e.addEventListener&&e.Element&&function(){function e(e,t){Window.prototype[e]=HTMLDocument.prototype[e]=Element.prototype[e]=t}var t=[];e("addEventListener",function(e,n){var r=this;t.unshift({__listener:function(e){e.currentTarget=r;e.pageX=e.clientX+document.documentElement.scrollLeft;e.pageY=e.clientY+document.documentElement.scrollTop;e.preventDefault=function(){e.returnValue=!1};e.relatedTarget=e.fromElement||null;e.stopPropagation=function(){e.cancelBubble=!0};e.relatedTarget=e.fromElement||null;e.target=e.srcElement||r;e.timeStamp=+(new Date);n.call(r,e)},listener:n,target:r,type:e});this.attachEvent("on"+e,t[0].__listener)});e("removeEventListener",function(e,n){for(var r=0,i=t.length;r<i;++r)if(t[r].target==this&&t[r].type==e&&t[r].listener==n)return this.detachEvent("on"+e,t.splice(r,1)[0].__listener)});e("dispatchEvent",function(e){try{return this.fireEvent("on"+e.type,e)}catch(n){for(var r=0,i=t.length;r<i;++r)t[r].target==this&&t[r].type==e.type&&t[r].call(this,e)}})}();!String.prototype.trim&&(String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")});n.prototype={_initEvents:function(){var e=this,t=function(t){t.stopPropagation();e.inputEl.value=e.inputEl.value.trim();if(!classie.has(e.el,"sb-search-open")){t.preventDefault();e.open()}else if(classie.has(e.el,"sb-search-open")&&/^\s*$/.test(e.inputEl.value)){t.preventDefault();e.close()}};this.el.addEventListener("click",t);this.el.addEventListener("touchstart",t);this.inputEl.addEventListener("click",function(e){e.stopPropagation()});this.inputEl.addEventListener("touchstart",function(e){e.stopPropagation()})},open:function(){var e=this;classie.add(this.el,"sb-search-open");t()||this.inputEl.focus();var n=function(t){e.close();this.removeEventListener("click",n);this.removeEventListener("touchstart",n)};document.addEventListener("click",n);document.addEventListener("touchstart",n)},close:function(){this.inputEl.blur();classie.remove(this.el,"sb-search-open")}};e.UISearch=n})(window);