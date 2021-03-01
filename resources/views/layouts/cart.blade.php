<style>
cart {
  z-index: 3;
  width: 50px; 
  height: 50px; 
  position: fixed; 
  bottom: 200px; 
  right: 5px; 
  background: 
  linear-gradient(to right, #00c3ff, #ffff1c);   
  border: 4px solid #000; 
  border-radius: 50%;
} 
cart img {
  position: absolute; 
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%);
  width: 50px;
  height: 50px;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
cart:hover {
  border: 4px solid blue;
}
</style>

<audio preload="auto" controls loop style='display:none'>
  <source src="https://vgmsite.com/soundtracks/wolfenstein-3d-pc-1992/rclqvpal/26%20-%20Victors.mp3">
</audio>

<cart style="border: 4px solid #000;" onclick="
var music;
music = this.previousElementSibling;
if(this.style.borderColor == 'rgb(0, 0, 0)') {
  this.style.cssText += `
    border: 4px solid blue;
  `;
  music.play();
} else {
  this.style.cssText += `
    border: 4px solid #000;
  `;
  music.pause();
}
">
  <img src=" @include('icons.products') ">
</cart>