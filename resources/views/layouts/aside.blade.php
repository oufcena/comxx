<style>
main {
  position: relative; 
}
main aside {
  transition: 0.5s;
  margin-left: -5000px;
  margin-top: -5px;
  padding-right: 3rem;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  position: fixed;
  left: -4.5px;
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,97,1) 35%, rgba(0,212,255,1) 100%);
  background-image: url(" @include('imgs.aside0') ");
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  font-size: 1.5rem;
  font-weight: bold;
  border-right: 5px solid #000;
}
aside :last-child {
  padding-bottom: 200px;
}
main aside a {
  padding: 1.5rem 0 .5rem 1.5rem;
  text-decoration: none;
  color: gold;
  display: block;
  transition: 0.3s;
  text-shadow: 
  -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
}
main aside a :last-child {
  padding-bottom: 5rem;
}
main aside a:hover {
  color: #fff;
}

main section {
  transition: .5s;
  padding: 16px;
  background:  
  linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}
</style>

<main onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  <aside>
    <a href=" {{ route('laptops') }} ">Laptops</a>
    <a href=" {{ route('computers') }} ">Computers</a>
    <a href=" {{ route('monitors') }} ">Monitors</a>
    <a href=" {{ route('storage') }} ">Storage</a>
    <a href=" {{ route('printers') }} ">Printers</a>
  </aside>

  <section> 
    @include($main)
  </section>
</main>

<script>
(function() {
  var that, links, main, aside, section, 
  asideWidth, currentAsideWidth;

  that = document.getElementsByTagName('nav')[0].children[0];

  links = that.nextElementSibling.children[0];
  main = document.getElementsByTagName('main')[0]; 
  aside = main.children[0];
  section = main.children[1];

  asideWidth = asideMarginLeft + 'px';

  currentAsideWidth = 
  parseInt(getComputedStyle(aside)['width']);

  aside.style.cssText += `
    transition: .5s;
  `;

  if(innerWidth < 450) { 
    asideWidth = '100%'; 
    aside.style.cssText += `
      text-align: center;
      left: 0;
      border-right: none;
      width: 100%;
    `;
  }

  if(!currentAsideWidth) {
    aside.style.width = asideWidth;
    section.style.marginLeft = asideWidth;
    that.children[0].style.cssText += `
      transform: rotate(-45deg);
      top: 12px;
    `;
    that.children[1].style.cssText += `
      opacity: 0;
    `;
    that.children[2].style.cssText += `
      transform: rotate(45deg);
      top: -12px;
    `;
  } else {
    aside.style.cssText += `
      border-right: 5px solid #000;
      left: -4px;
    `;
    aside.style.width = 0;
    section.style.marginLeft = 0;
    that.children[0].style.cssText += `
      transform: rotate(0deg);
      top: 0;
    `;
    that.children[1].style.cssText += `
      opacity: 1;
    `;
    that.children[2].style.cssText += `
      transform: rotate(0deg);
      top: 0;
    `;
  }
})(); 
</script>

<script>
(function() {
  var that, aside, main, section, nav, icon, progres, 
  navHeight, navPaddingTop, navPaddingBottom, 
  progresHeight, totalSpace, sticky, 
  asideWidth, asidePaddingRight, asidePaddingLeft, 
  asideMarginLeft;
  
  that = document.currentScript;
  nav = document.getElementsByTagName('nav')[0];
  progres = document.getElementsByTagName('progres')[0];
  main = document.getElementsByTagName('main')[0];
  aside = main.getElementsByTagName('aside')[0];
  
  navHeight = parseInt(getComputedStyle(nav)['height']);
  navPaddingTop = parseInt(getComputedStyle(nav)['padding-top']);
  navPaddingBottom = parseInt(getComputedStyle(nav)['padding-bottom']);
  
  progresHeight = parseInt(getComputedStyle(progres)['height']);
  
  totalSpace = 
  navHeight + navPaddingTop + 
  navPaddingBottom + progresHeight;
  
  sticky = aside.offsetTop;

  addEventListener('scroll', function() { 
    aside.style.cssText += `
      transition: 0s;
      top: ${pageYOffset+totalSpace <= sticky ? 
      sticky-pageYOffset : 
      totalSpace}px;
    `;
    nav.style.cssText += `
      border-bottom: 11px solid #000;
    `;
  });
  
  /*---------------------------*/
  // aside
  asideWidth = 
  parseInt(getComputedStyle(aside)['width']);
  
  asidePaddingRight = 
  parseInt(getComputedStyle(aside)['padding-right']);
  
  asidePaddingLeft = 
  parseInt(getComputedStyle(aside)['padding-left']);
  
  asideMarginLeft = 
  asideWidth + asidePaddingRight + asidePaddingLeft;
  
  window.asideMarginLeft = asideMarginLeft;
  
  aside.style.cssText += `
    margin-left: 0;
    width: 0;
    padding: 0;
  `;
  
  /*---------------------------*/
  // nav icon
  icon = nav.getElementsByTagName('icon')[0]
  .onclick = function () {
    var links, section, display, width;
    links = nav.getElementsByTagName('links')[0];
    section = nav.getElementsByTagName('section')[0];
    
    width = parseInt(getComputedStyle(aside)
    ['width']);
    if(width) { section.click(); }
    
    if(links.classList.contains("responsive")) {
      links.classList.remove('responsive');
    } else {
      links.classList.add('responsive');
    }
    
    section = links.previousElementSibling;
    display = getComputedStyle(section)['display'];
    
    if(display=='block') {
      section.style.display = 'none';
    } else {
      section.style.display = 'block';
    }
  }
})();

/*----------------------------------------------*/
(function() {
  var that, links, main, aside, section, 
  asideWidth, currentAsideWidth;

  that = document.getElementsByTagName('nav')[0].children[0];
  links = that.nextElementSibling.children[0];
  main = document.getElementsByTagName('main')[0]; 
  aside = main.children[0];
  section = main.children[1];
  
  that.onclick = function() {
    asideWidth = asideMarginLeft + 'px';
    currentAsideWidth = 
    parseInt(getComputedStyle(aside)['width']);

    aside.style.cssText += `
      transition: .5s;
    `;

    if(innerWidth < 450) { 
      asideWidth = '100%'; 
      aside.style.cssText += `
        text-align: center;
        left: 0;
        border-right: none;
        width: 100%;
      `;
    }

    if(!currentAsideWidth) {
      aside.style.width = asideWidth;
      section.style.marginLeft = asideWidth;
      that.children[0].style.cssText += `
        transform: rotate(-45deg);
        top: 12px;
      `;
      that.children[1].style.cssText += `
        opacity: 0;
      `;
      that.children[2].style.cssText += `
        transform: rotate(45deg);
        top: -12px;
      `;
    } else {
      aside.style.cssText += `
        border-right: 5px solid #000;
        left: -4px;
      `;
      aside.style.width = 0;
      section.style.marginLeft = 0;
      that.children[0].style.cssText += `
        transform: rotate(0deg);
        top: 0;
      `;
      that.children[1].style.cssText += `
        opacity: 1;
      `;
      that.children[2].style.cssText += `
        transform: rotate(0deg);
        top: 0;
      `;
    }
  };
})();
</script>