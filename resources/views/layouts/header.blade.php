<style>
header {
  display: grid;
  grid: 'logo motto auth' / auto 2fr 70px;
  text-align: center;
  border-top: 5px solid #000;
  border-bottom: 5px solid #000;
}
header :first-child { margin: 0; }
header :last-child { margin: 0; }
header img {
  grid-area: logo;
  background: yellow;
  padding: 1rem;
  height: 100px;
}
header motto {
  grid-area: motto;
  color: #008a00;
  position: relative;
  background: #3e65ff;
  background-image: url(" @include('imgs.god') ");
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  text-shadow: 
  -2px 0 #000, 0 2px #000, 1px 0 #000, 0 -1px #000;
}
header motto h3 {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
@media (max-width:400px) {
  header motto h3 {
    font-size: 15px;
  }
  header img { 
    height: 60px;
  }
}
@media (max-width:350px) {
  header motto h3 {
    font-size: 10px;
  }
}
header auth {
  position: relative;
  grid-area: auth;
  background: #fff;
}
header auth a {
  position: absolute;
  right: -10px;
  top: 50%;
  transform: translate(0, -50%);
  display: block;
  text-decoration: none;
  outline: none;
  padding: 20px;
}
header auth svg {
  background: #fff;
  width: 50px;
  height: 50px;
}
/*--------------------*/
#goUp {
  z-index: 3;
  width: 50px; 
  height: 50px; 
  position: fixed; 
  bottom: 5px; 
  right: 5px; 
  background: 
  linear-gradient(to right, #00c3ff, #ffff1c);   
  border: 4px solid #000; 
  border-radius: 50%;
} 
#goUp svg {
  position: absolute; 
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%);
}
#goUp:hover {
  border: 4px solid blue;
}
</style>

<a id="goUp" href="#up">
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M8 10h-5l9-10 9 10h-5v10h-8v-10zm8 12h-8v2h8v-2z"/></svg>
</a>

<header id="up">
  <img alt="logo" src=" @include('imgs.logo') ">
  <motto>
    <h3>Only in God we trust!</h3>
  </motto>
  <auth>
    @guest
    <a href=" {{ route('login') }} ">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm7.753 18.305c-.261-.586-.789-.991-1.871-1.241-2.293-.529-4.428-.993-3.393-2.945 3.145-5.942.833-9.119-2.489-9.119-3.388 0-5.644 3.299-2.489 9.119 1.066 1.964-1.148 2.427-3.393 2.945-1.084.25-1.608.658-1.867 1.246-1.405-1.723-2.251-3.919-2.251-6.31 0-5.514 4.486-10 10-10s10 4.486 10 10c0 2.389-.845 4.583-2.247 6.305z"/></svg>
    </a>
    @endguest
    @auth
    <div style="">
      <img src=" {{ auth()->user()->image }} " style="width: 50px; height: 50px;">
      <div>@include('layouts.dropdown')</div>
    </div>
    @endauth
  </auth>
</header>