<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="https://compuscience.com.eg/img/favicon.ico?1570094753">

<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<!-- Font Awesome JS -->
<script src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<style>
html, body { height: 100%; scroll-behavior: smooth; }
a { 
  text-decoration: none;
  outline: none; 
}
::-moz-selection { /* Code for Firefox */
  color: red;
  background: yellow;
}
::selection {
  color: red;
  background: yellow;
}
body {
  margin: 0;
  background: lightblue;
  overflow-x: hidden;
}
/* Fluid Responsive Typography */
html { font-size: 1rem; /* min */ }
/* Breakpoints */
@media (min-width:640px) and (max-width:1023px) {
 html { font-size: 1.0625rem; }
}
@media (min-width:1024px) and (max-width:1279px) {
 html { font-size: 1.125rem; }
}
@media (min-width:1280px) {
 html { font-size: 1.1875rem; /* max */ }
}
/* CENTER */
c {
  display: block;
  position: absolute;
  left:50%; 
  top: 50%; 
  transform: translate(-50%, -50%);
}
/* Responsive */
row {
  margin: 1rem; 
  display: grid; 
  grid-template-columns: 
  repeat(auto-fit, minmax(100px, 1fr)); 
  text-align: center; 
  grid-gap: 1rem;
}
column {
  display: block;
  box-sizing: border-box;
  text-align: center;
  color: #fff;
  grid-row: 1;
  height: initial;
  border: 2px solid #000;
  position: relative;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
@media screen and (max-width: 600px) {
  row {
    grid-template-columns: 1fr;
  }
}

</style>

<title>@yield('title')</title>
</head>
<body>

@yield('content')

</body>
</html>