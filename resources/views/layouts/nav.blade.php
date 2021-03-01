<style>
nav {
  z-index: 2;
  position: sticky;
  top: 0;
  margin-top: -5px;
  border-top: 5px solid #000;
  font-size: 0;
  display: grid;
  grid: 'toggle links icon' 
  / max-content auto max-content;
}
nav :first-child { margin: 0; }
nav :last-child { margin: 0; }
nav section {
  grid-area: toggle;
  padding: 1rem;
  cursor: pointer;
  width: 30px;
  background: red;
  border-right: 5px solid #000;
}
nav section div {
  height: 5px;
  background: #fff;
  position: relative;
  top: 0;
  transition: all ease-in-out 0.4s;
}
nav links {
  grid-area: links;
  background: #333;
  background: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
  /*
  white-space: nowrap;
  */
  white-space: nowrap;
  position: relative;
  overflow: auto;
  height: 80px;
}
nav links scroll {
  display: grid;
  grid-template-columns: 
  repeat(auto-fit, minmax(100px, 1fr));
  /* Ability to scroll */
  width: 100%;
  height: 100%;
  overflow: auto;
  /* Hide scroll */
  position: absolute;
  left: 0;
}
/*=====================*/
nav links a {
  padding: 1rem;
  grid-row: 1;
  display: inline-block;
  color: #fff;
  text-decoration: none;
  overflow: hidden;
  text-align: center;
  font-size: 17px;
  border-color: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none; 
  outline: none;
  text-shadow: 
  -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
  box-sizing: border-box;
  margin-bottom: 7px;
}
nav links a:last-child,
nav links a:first-child {
  margin-bottom: 7px;
}
nav links a img {
  width: 50px; 
  height: 50px;
  position: relative;
  top: -15px;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
nav links a span {
  position: relative;
  top: -15px;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* ============================ */
nav links a:hover { 
  background: #000; 
  color: pink;
  border-top: 5px solid #000;
  border-bottom: 5px solid red;
  text-decoration: none;
}
nav links a.active {
  background: #4CAF50; 
  font-size: 1rem;
  color: gold;
  border-top: 5px solid #4CAF50;
  border-bottom: 5px solid blue;
}
/* ============================ */
nav icon {
  grid-area: icon;
  background: lightblue;
  background: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
  padding: 1rem;
  cursor: pointer;
  border-left: 5px solid #000;
}
nav icon div {
  width: 20px;
  height: 4px;
  background: #fff;
  margin: 3px 0;
}
/*===================*/
@media screen and (max-width: 600px) {
  nav links a { display: block; }
  nav links a:not(:first-child) {display: none;}
}
nav links.responsive a.active {
  background: #4CAF50; 
  font-size: 1rem;
  color: gold;
  border-top: 5px solid blue;
  border-bottom: 5px solid blue;
}
nav links.responsive {
  height: auto;
}
nav links.responsive scroll {
  position: initial;
  grid-template-columns: 1fr;
}
nav links.responsive a:last-child {
  margin-bottom: 7px;
}
nav links.responsive a {
  display: block;
  grid-row: initial;
  text-align: left;
  padding-left: 45%;
  padding-right: 10px;
  margin-bottom: 0;
  height: 63px;
}
nav links.responsive a span {
  margin-left: 10px;
}
nav links.responsive a:hover {
  border-top: 5px solid red;
  border-bottom: 5px solid red;
}
</style>

<nav> 
  <section>
    <div></div>
    <div style="margin: 7px 0;"></div>
    <div></div>
  </section>

  <links> 
    <scroll onclick="
    [...this.children].forEach(v => {
      /* RESET */
      v.classList.remove('active');
    });
    event.target.classList.add('active');
    ">
      <a href=" {{ route('home') }} " >
        <img src=" @include('icons.home') ">
        <span>Home</span>
      </a>
      <a href=" {{ route('dashboard') }} ">
        <img src=" @include('icons.dash') ">
        <span>Dashboard</span>
      </a>
      <a href=" {{ route('aboutUs') }} ">
        <img src=" @include('icons.about') ">
        <span>About us</span>
      </a>
      <a href=" {{ route('contactUs') }} ">
        <img src=" @include('icons.contact') ">
        <span>Contact us</span>
      </a>  
      <a href=" {{ route('faqs') }} ">
        <img src=" @include('icons.faqs') ">
        <span>FAQs</span>
      </a>
      <a href=" {{ route('terms') }} ">
        <img src=" @include('icons.terms') ">
        <span>Terms & conditions</span>
      </a>
    </scroll>
  </links>
  
  <icon>
    <div></div>
    <div></div>
    <div></div>
  </icon> 
  
  <!---------------------------------------->
  <style>
  nav progres { 
    z-index: 1;
    display: block;
    position: absolute;
    bottom: -7px;
    width: 100%;
    background: #ccc;
  }
  nav progres bar {
    display: block;
    height: 13px;
    background: #005357;
    width: 0%;
  }
  </style>

  <progres>
    <bar></bar>
  </progres>
  
  <script>
  var links, active;
  links = document.getElementsByTagName('links')[0].children[0];
  active = {{ $active }};
  links.children[active].classList.add('active');
  </script>

  <script>
  (function () {
    var that;
    that = document.currentScript;
    addEventListener("scroll", function() {
      let scroll, height, amount;
      scroll = document.documentElement.scrollTop;
      height = document.documentElement.scrollHeight 
      - document.documentElement.clientHeight;
      amount = (scroll / height) * 100;
      document.getElementsByTagName('progres')[0]
      .children[0].style.width = 
      amount + "%";
    }); 
  })();
  </script>
</nav>