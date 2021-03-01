<style>
footer {
  background: 
  linear-gradient(to right, #0f2027, #203a43, #2c5364);
  color: #fff;
  text-align: center;
  position: relative;
  z-index: 2;
  border-top: 5px solid #000;
  border-bottom: 5px solid #000;
  display: grid;
  grid: 'social copyrights' / min-content 1fr;
  text-shadow: 
  -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
}
footer :first-child { margin: 0; }
footer :last-child { margin: 0; }
footer copyrights {
  padding: 1rem;
  position: relative;
  display: block;
  grid-area: copyrights;
}
footer copyrights svg {
  width: 25px;
  height: 25px;
  position: relative;
  top: 5px;
}
footer social {
  grid-area: social;
  background: #fff;
  position: relative;
  height: 100%;
  display: block;
}
footer social img {
  display: block;
  border: 5px solid #fff;
  height: calc(100 / 5)%; 
}
footer social img:hover {
  border: 5px solid #4169e1;
}
footer a:link {
  color: gold;
}
footer a:visited {
  color: red;
}
</style>

<footer>
  <social>
    <a href="https://youtube.com">
    <img src=" @include('icons.youtube') " 
    alt="youtube" style="width: 100px;"></a>
    <a href="https://linkedin.com">
    <img src=" @include('icons.linkedin') " 
    alt="LinkedIn" style="width: 100px;"></a>
    <a href="https://facebook.com">
    <img src=" @include('icons.facebook') " 
    alt="Facebook" style="width: 100px;"></a>
    <a href="https://twitter.com">
    <img src=" @include('icons.twitter') " 
    alt="Twitter" style="width: 100px;"></a>
    <a href="https://instagram.com">
    <img src=" @include('icons.instagram') " 
    alt="Instagram" style="width: 100px;"></a>
  </social>
  
  <copyrights>
    <img src=" @include('imgs.footer') " alt="footer" style="width: 100%; 
    z-index:-1;position:absolute; left:0;top:0; height:100%; 
    width:100%;">
    <h2>Copyright 1994-2021</h2>
    <h2>By <a href="https://github.com/oufcena">
    Unknown Nameless Soldier.</a></h2> 
    <h2>All Rights Reserved.</h2>
    <h2>COMPU SCIENCE is Powered by <a 
    href="http://www.helolsoft.com">Helol Soft</a></h2>
    <h2>Made with 
      <a href="https://www.youtube.com/watch?v=09m0B8RRiEE&t=1135s"><svg><g><rect fill="none"></g> <g><path stroke="#000" fill="#f00" d="m12,4.435c-1.989,-5.399 -12,-4.597 -12,3.568c0,4.068 3.06,9.481 12,14.997c8.94,-5.516 12,-10.929 12,-14.997c0,-8.118 -10,-8.999 -12,-3.568z"></g></svg></a>
      from <a href="https://www.traveltoegypt.net/">Egypt!</a>
    </h2>
  </copyrights>
</footer>

<script>
(function() {
  var that, nav, nstyle, footer, fstyle, 
  height, paddingTop, paddingBottom,
  total, main, aside, last;
  
  that = document.currentScript;
  footer = that.previousElementSibling;
  style = getComputedStyle(footer);
  height = parseInt(style['height']);
  paddingTop = parseInt(style['padding-top']);
  paddingBottom = parseInt(style['padding-bottom']);
  
  total = height + paddingTop + paddingBottom;
  
  nav = document.getElementsByTagName('nav')[0];
  style = getComputedStyle(nav);
  height = parseInt(style['height']);
  paddingTop = parseInt(style['padding-top']);
  paddingBottom = parseInt(style['padding-bottom']);
  
  total += height + paddingTop + paddingBottom;
  
  main = document.getElementsByTagName('main')[0];
  aside = main.getElementsByTagName('aside')[0];
  
  last = aside.children[aside.children.length-1];
  last.style.cssText += `
    padding-bottom: ${total+50}px;
  `;
})();
</script>