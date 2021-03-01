<!DOCTYPE html>
<html>
<style>
/* Fluid Typography */
html { font-size: 1rem; /* min */ }
/* Breakpoints */
@media (min-width:640px) and (max-width:1023px) {
  html { font-size: 1.0625rem; }
  form { width: 20%; }
}
@media (min-width:1024px) and (max-width:1279px) {
  html { font-size: 1.125rem; }
}
@media (min-width:1280px) {
  html { font-size: 1.1875rem; /* max */ }
}
html, body {
  height: 100%;
}
body {
  margin: 0;
  background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
  background-repeat: no-repeat;
  background-attachment: fixed;  
  overflow-x: hidden;
}
form {
  margin: auto;
  padding: .5rem;
  background: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
h2 {
  width: 80%;
  margin: 2rem auto;
  background: rgba(255, 255, 0, 0.5);
  border-radius: 3px;
  color: #000;
  font-weight: 300;
  text-align: center;
  z-index: 1;
  position: relative;
}
input {
  text-align: center;
  border: none;
  background: rgba(76, 175, 80, 0.5);
  color: blue;
  display: block;
  width: 80%;
  margin: 0 auto;
  margin-bottom: 20px;
  padding: .2rem;
  border-bottom: 1px solid #aaa;
  font-family: sans-serif;
  font-weight: 400;
  transition: 0.2s;
  z-index: 1;
  position: relative;
}
input:hover {
  background: rgba(76, 175, 80, .8);
}
input:focus {
  background: rgba(0, 0, 255, .3);
}
button {
  display: block;
  width: 80%;
  margin: 0 auto;
  margin-bottom: 20px;
  background: rgba(244, 67, 54, .5);
  padding: .5rem;
  border: none;
  border-radius: 2px;
  color: #fff;
  text-transform: uppercase;
  transition: 0.2s;
  cursor: pointer;
  z-index: 1;
  position: relative;
}
button:hover,
button:focus {
  background: rgba(244, 67, 54);
}

/* Breakpoints */
@media (min-width:640px)  {
 form { width: 40%; }
}
</style>

<body>

<form action="{{ route('register') }}" method="post"> 
  @csrf
  <section style="
  resize: both;
  overflow: hidden;
  position: relative;
  z-index: 1;
  margin: 10px auto;
  text-align: center;
  transition: all 0.15s ease;
  cursor: pointer;
  width: 130px; 
  height: 130px;
  border: 5px solid;
  border-radius: 50%;
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
  <img src=" @include('icons.user') " style="width:80px; background: transparent;
  position:absolute; transform: translate(-50%, -50%); top: 50%;
  left: 50%;">
  <input type="file" 
  style="opacity:0; position:absolute; 
  top:0; left:0; bottom:0; right:0; 
  z-index:1; width:100%; height:100%;" 
  oninput="
  var that, files, len, imgs,
  i=-1, reader=[], src, alt;
  that = this;
  
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
      imgs[i].alt = alt;
    };
  });
  /*---------------------------*/
  that.nextElementSibling.nextElementSibling
  .nextElementSibling.style.display='none';
  that.parentElement.style.cssText+=`
    opacity: 1;
    border: 1px solid #000;
  `;
  that.parentElement.onmouseout='';
  that.parentElement.onmouseover='';
  ">
  </section>
  <input type="text" name="image" style="display:none;">
  <input type="text" name="username" placeholder="Username" autocomplete="off" style="@error('username') border: 3px solid red; @enderror">
  <input type="email" name="email" placeholder="Email" style="@error('username') border: 3px solid red; @enderror">
  <input style="" type="password" name="password" placeholder="Password" onkeyup="var x = this.nextElementSibling.nextElementSibling; if(event.getModifierState('CapsLock')) { x.style.display = 'block'; } else { x.style.display = 'none'; }"  style="@error('username') border: 3px solid red; @enderror">
  <input type="password" name="password_confirmation" placeholder="Retype password" onkeyup="var x = this.nextElementSibling; if(event.getModifierState('CapsLock')) { x.style.display = 'block'; } else { x.style.display = 'none'; }" style="@error('username') border: 3px solid red; @enderror">
  <div style="display:none; font-size: 1.5vw; width: 70%; margin: 0 auto; margin-bottom: 20px; position: relative; z-index:1; padding: 20px; background: #ff9800; color: #000;"><strong>WARNING!</strong> Caps lock is ON</div>

  <button type="submit" onclick="
  var form, input, img;
  form = this.parentElement;
  img = form.children[0].children[0].src;
  input = form.children[1];
  input.value = img;
  ">Get started</button>
  <img src=" @include('imgs.register') " alt="background" style="width:100%; height: 100%; z-index:0; position:absolute; top:0; left:0;"> 
</form>

</body>
</html>