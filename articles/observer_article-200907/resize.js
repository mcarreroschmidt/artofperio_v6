<!--
if (document.layers){
      //Netscape 4
      pre = 'document.';
      post = '';
   }
if (document.getElementById){
      //Netscape 6
      pre = 'document.getElementById("';
      post = '").style';
   }
if (document.all){
      //IE4+
      pre = '';
      post = '.style';
   }
var fontSize = 9;

function eventFaceLarger() {
fontSize = fontSize+1;
if (fontSize > 14) {fontSize = 14}
var toggle = eval(pre + 'storytext' + post);
toggle.fontSize= fontSize+"pt";

}
function eventFaceSmaller() {
fontSize = fontSize-1;
if (fontSize < 8) {fontSize = 8}
var toggle = eval(pre + 'storytext' + post);
toggle.fontSize= fontSize+"pt";
}

// -->	
