<style>
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.zoom {  
  animation-name: zoom;
  animation-duration: 0.6s;
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
</style>

<section style="
  display: block;
  margin: {{ $margin }};
  margin-bottom: 10px;
  overflow: hidden;
  position: relative;
  width: {{ $width }};
  height: {{ $height }};
  border: 1px dashed gray;
  border-radius: 0.375rem;
  text-align: center;
  transition: all 0.15s ease;
  cursor: pointer;
" onmouseover="
  this.style.cssText+=`
    background: rgba(0, 0, 0, 0.9);
    color: #fff;
  `;
  this.children[2].style.cssText+=`
    color: #fff;
  `;
  this.children[3].style.cssText+=`
    color: #fff;
  `;
" onmouseout="
  this.style.cssText+=`
    background: #fff;
    color: #000;
  `;
  this.children[2].style.cssText+=`
    color: #000;
  `;
  this.children[3].style.cssText+=`
    color: #000;
  `;
"> 
  <input type="text" name="image" style="display:none;" 
  value="{{ $image }}">
  <slideshow></slideshow>
  <input multiple type="file" 
  style="opacity:0; position:absolute; 
  top:0; left:0; bottom:0; right:0; 
  z-index:1; width:100%; height:100%;" 
  oninput="
  var that, files, len, imgs, 
  i=-1, reader=[], src, alt, image, url=[];
  that = this;
  image = that.parentElement.children[0];
  
  files = [...that.files];
  len = files.length;
  
  that.previousElementSibling.outerHTML = `
    <img class='fade' 
    style='display:block; 
    width:100%;height:100%;'
    >
  `.repeat(files.length);
  
  imgs = that.parentElement
  .getElementsByClassName('fade');
  
  files.forEach((v, i) => {
    alt = v.name.slice(0, v.name.lastIndexOf('.'));
    reader[i] = new FileReader();
    reader[i].readAsDataURL(v);
    reader[i].onload = function() {
      imgs[i].src = reader[i].result;
      url.push(`'${imgs[i].src}'`);
      image.value = `[${url}]`;
      imgs[i].alt = alt;
    };
  });

  /*---------------------------*/
  function slideshow() {
    if(i<-1) { i=len-2; }
    if(i>=len-1) { i=-1; }
    ++i;
  
    [...imgs].forEach(v => {
      if(v == imgs[i]) {
        v.style.cssText += `
          display: block;
        `;
      } else {
        v.style.cssText += `
          display: none;
        `;
      }
    });
    
    that.parentElement.getElementsByTagName('index')[0]
    .textContent = i+1 + ' / ' + len;
    
    setTimeout(slideshow, 3000);
  } slideshow();
  /*---------------------------*/
  that.parentElement.getElementsByTagName('icon')[0]
  .style.display='none';
  that.parentElement.style.cssText+=`
    opacity: 1;
    border: 1px solid #000;
  `;
  that.parentElement.onmouseout='';
  that.parentElement.onmouseover='';
  ">
  <txt style="
  font-size: 2em;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  display: inline-flex;
  ">
  <icon style="width: 1em;">
<?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
	.st0{opacity:0.2;fill:#FFFFFF;}
	.st1{fill:#FFFFFF;}
	.st2{fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st3{fill:#5E61A3;}
	.st4{opacity:0.5;fill:#242C88;}
	.st5{fill:#39C89A;}
	.st6{fill:#CAEAFB;}
	.st7{fill:#589FFF;}
	.st8{fill:#FF5751;}
	.st9{fill:#BC8D66;}
	.st10{opacity:0.7;fill:#FFFFFF;}
	.st11{fill:#F1C92A;}
	.st12{opacity:0.4;fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st13{fill:#F3877E;}
	.st14{fill:#83D689;}
	.st15{opacity:0.4;fill:#242C88;}
	.st16{opacity:0.2;fill:#242C88;}
	.st17{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0.1,6;}
	.st18{fill:#FFC408;}
	.st19{opacity:0.4;fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0.1,6;}
	.st20{fill:none;stroke:#CAEAFB;stroke-width:12;stroke-linecap:round;stroke-miterlimit:10;}
	.st21{fill:none;stroke:#CAEAFB;stroke-width:7;stroke-linecap:round;stroke-miterlimit:10;}
	.st22{opacity:0.4;fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st23{opacity:0.5;}
	.st24{fill:#242C88;}
	.st25{fill:none;stroke:#242C88;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0.1,6;}
	.st26{opacity:0.5;fill:#FFFFFF;}
	.st27{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st28{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st29{fill:#E5BD9E;}
	.st30{fill:#A06D47;}
	.st31{opacity:0.3;fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0.1,6;}
	.st32{opacity:0.1;fill:#242C88;}
	.st33{opacity:0.5;fill:#FF5751;}
	.st34{opacity:0.2;fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st35{opacity:0.3;clip-path:url(#SVGID_2_);}
	.st36{fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0,6;}
	.st37{opacity:0.3;fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0,6;}
	.st38{clip-path:url(#SVGID_4_);}
	.st39{opacity:0.2;fill:none;stroke:#242C88;stroke-width:9;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st40{opacity:0.3;}
	.st41{opacity:0.4;fill:#FFFFFF;}
	.st42{opacity:0.5;fill:#CAEAFB;}
	.st43{opacity:0.6;fill:#242C88;}
	.st44{opacity:0.5;fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st45{opacity:0.3;fill:#242C88;}
	.st46{opacity:0.2;}
	.st47{clip-path:url(#SVGID_6_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st48{opacity:0.2;fill:none;stroke:#FFFFFF;stroke-width:8;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st49{clip-path:url(#SVGID_8_);fill:#FFFFFF;}
	.st50{clip-path:url(#SVGID_8_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st51{opacity:0.2;clip-path:url(#SVGID_8_);fill:#242C88;}
	.st52{opacity:0.2;clip-path:url(#SVGID_8_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st53{fill:none;stroke:#242C88;stroke-width:1.848;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st54{opacity:0.4;fill:none;stroke:#FFFFFF;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st55{opacity:0.2;fill:none;stroke:#242C88;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st56{opacity:7.000000e-02;fill:#242C88;}
	.st57{fill:none;stroke:#FFFFFF;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st58{opacity:0.4;fill:none;stroke:#FFFFFF;stroke-width:8;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st59{opacity:0.2;fill:none;stroke:#242C88;stroke-width:8;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st60{fill:none;stroke:#FF5751;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st61{fill:none;stroke:#242C88;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
</style><rect class="st1" height="78.6" transform="matrix(0.9761 0.2175 -0.2175 0.9761 15.4391 -12.3278)" width="101.2" x="13.1" y="24.7"/><rect class="st53" height="78.6" transform="matrix(0.9761 0.2175 -0.2175 0.9761 15.4391 -12.3278)" width="101.2" x="13.1" y="24.7"/><polygon class="st16" points="116,62 116,35.4 38.1,18 22.1,18 5.8,91.3 76.2,107 106,107 "/><polygon class="st1" points="97.2,23 10,23 10,102 111,102 111,36.8 "/><polygon class="st53" points="97.2,23 10,23 10,102 111,102 111,36.8 "/><g><rect class="st7" height="58" width="80" x="20" y="34"/><g><polygon class="st9" points="100.2,92 73.1,44.2 51.2,75.5 40,58.7 20.2,92 39.7,92   "/><circle class="st18" cx="57" cy="52" r="11"/><polygon class="st1" points="40,58.5 31.6,72.6 34.6,78.2 37.9,75.2 43.5,79.9 47,78.2 51,75.2   "/><path class="st1" d="M57.7,66c0,0,4.1,7.2,4.3,6.6c0.2-0.6,6.1-5.6,6.1-5.6l6.9,3.6l1.5-10.3L88.9,72L73.1,44.1L57.7,66z"/><polygon class="st15" points="73.1,44.2 83.6,92 100.2,92   "/><polyline class="st2" points="100.2,91.9 73.1,44.1 39.7,91.9   "/><polyline class="st2" points="51.2,75.4 40,58.5 20.2,91.9   "/><polygon class="st15" points="51.2,75.4 40,58.5 47,81.3   "/><polyline class="st2" points="51.5,91.9 67.1,70.5 80.4,91.9   "/><polygon class="st15" points="72.3,92 67.1,70.7 80.4,92   "/></g><rect class="st53" height="58" width="80" x="20" y="34"/></g><polygon class="st18" points="111,37 97,37 97,23 "/><polygon class="st53" points="111,37 97,37 97,23 "/></svg>
</icon>
  </txt>
  <index style="
  position: absolute; bottom:0; right:0;
  color: #000;
  background: rgba(60, 179, 113, 0.4);
  font: 12px bold;
  padding: 8px;
  "></index>
  <icon style="position: absolute; top:0; right:0;
  font: 1em bold;
  padding: 0 3px;
  z-index: 2;
  " onclick="
  var imgs, x;
  
  imgs = this.parentElement
  .getElementsByClassName('fade');

  if(imgs.length) {
    x = this.nextElementSibling;
    x.style.cssText+=` display:block; `;
  }
  
  [...imgs].forEach(v => {
    if(v.style.display=='block') {
      x.children[0].src = v.src;
      x.children[0].alt = v.alt;
    }
  });
  ">ℹ</icon>
  <modal style="
  display: none;
  position: fixed;
  z-index: 5;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;">
    <img class="zoom" style="
    display: block;
    height: 80%;
    width:100%;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    ">
    <close style="
    display: block;
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;"
    onmouseover="this.style.cssText+=`color: #bbb;`;" 
    onmouseout="this.style.cssText+=`color: #f1f1f1;`;" 
    onclick="this.parentElement.style.cssText+=`display: none;`;">
    &times;</close>
  </modal>
  
  <script>
  var that, urls, len, imgs, prev, next, i=0;
  that = document.currentScript
  .parentElement.children[0];
  
  if(that.value) {
    urls = eval(that.value);
    len = urls.length;

    that.nextElementSibling.outerHTML = `
      <img class='fade' 
      style='display:none; 
      width:100%;height:100%;'
      >
    `.repeat(urls.length);

    imgs = that.parentElement
    .getElementsByClassName('fade');
    imgs[0].style.display = 'block';

    urls.forEach((v, i) => {
      imgs[i].src = v;
    });
    /*---------------------------*/
    function slideshow() {
    if(i<-1) { i=len-2; }
    if(i>=len-1) { i=-1; }
    ++i;
  
    [...imgs].forEach(v => {
      if(v == imgs[i]) {
        v.style.display = 'block';
      } else {
        v.style.display = 'none';
      }
    });
    
    that.parentElement.getElementsByTagName('index')[0]
    .textContent = i+1 + ' / ' + len;
    
    setTimeout(slideshow, 3000);
  } slideshow();
    /*---------------------------*/
    that.parentElement.getElementsByTagName('icon')[0]
    .style.display = 'none';
    that.parentElement.style.cssText+=`
      opacity: 1;
      border: 1px solid #000;
    `;
    that.parentElement.onmouseout='';
    that.parentElement.onmouseover='';
  } else { that.value = ''; }
  </script>
</section>