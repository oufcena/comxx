<style>
calculator {
  z-index: 3;
  width: 50px; 
  height: 50px; 
  position: fixed; 
  bottom: 70px; 
  right: 5px; 
  background: 
  linear-gradient(to right, #00c3ff, #ffff1c);   
  border: 4px solid #000; 
  border-radius: 50%;
} 
calculator img {
  position: absolute; 
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%);
  width: 40px;
  height: 40px;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
calculator:hover {
  border: 4px solid blue;
}
</style>

<audio preload="auto" controls loop style='display:none'>
  <source src="https://vgmdownloads.com/soundtracks/wolfenstein-3d-pc-1992/nycpflvc/02%20-%20Wondering%20About%20My%20Loved%20Ones.mp3">
</audio>

<calculator onclick="
var music, cal;
music = this.previousElementSibling;
cal = document.getElementById('root');
if(cal.style.display=='none') {
  this.style.cssText += `
    border: 4px solid blue;
  `;
  cal.style.cssText += `
    display: grid;
  `;
  music.play();
} else {
  this.style.cssText += `
    border: 4px solid #000;
  `;
  cal.style.cssText += `
    display: none;
  `;
  music.pause();
}

">
  <img src=" @include('icons.cal') ">
</calculator>

<style>
cal {
  display: block;
  z-index: 9;
  resize: both;
  overflow: hidden;
  border: 15px solid black;
  background: #1d1d1d; 
  padding: 1%; 
  position: absolute; 
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: grid;
  grid:
  "h h h h"
  "m m m m"
  ". . . ."
  ". . . e"
  ". . . e"
  ". . . e"
  ". . . e"
  ; 
  grid-gap: 1vw;    
  font-weight: bolder;
  min-width: 300px;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none;
}
cal header {
  cursor: move;
  grid-area: h;
  display: block;
  text-align: center;
  text-shadow: 2px 3px 5px black,
  -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; 
  border: 5px solid black;
  background: yellow;
  color: #ff2d55;
  font-size: 3vw;
}
cal #monitor { 
  grid-area: m;
  border: 5px solid black;
  background: #d4e2e3;
  color: blue;
  font-size: 3vw;
  text-align: center;
  text-shadow: 2px 2px 0 #000, 
  -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;
  overflow: auto;
  white-space: nowrap;
}
cal .monitor { 
  color: #aa00ff;
  text-shadow: 2px 2px 0 #000, 
  -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;
}
/* =============================================== */
cal .button {
  outline: 3px solid black;
  border: 2px solid #1d1d1d;
  background: #2ecc71;
  color: white;
  text-shadow: 2px 2px 0 #000, 
  -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;  
  cursor: pointer;
  transition: 0.2s;  
  font-size: 2vw;
}
cal .button:hover {
  background: #80ff00;
  transform: scale(1.2);
}

cal .operator {
  background: #4f84c4;
  color: red;
}
cal .operator:hover {
  background: #5ac8fa;
  color: red;
}

cal .equal {
  grid-area: e;
  background: #008a00;
  color: red;
}
cal .equal:hover {
  transform: scale(1); 
}

cal .clear {
  background: #7f8c8d;
  color: yellow;
}
cal .clear:hover {
  outline: 1px solid orange;
  background: #dc3545;
}
</style>
<body>

<cal id="root" style="display:none;">
  <header id='rootheader'>Calculator</header>
  <section id='monitor'>0</section>
</cal>

<script>
function buttons() {
  let arr = ['/', '-', 'X', '+', 7, 8, 9, 4, 5, 6, 1, 2, 3, 0, '.', 'C', '='];
  let music = [
    'https://vgmdownloads.com/soundtracks/claw-gamerip-sounds/dxhdnzfw/COIN.mp3', 
    'https://vgmdownloads.com/soundtracks/claw-gamerip-sounds/dxrxoogg/MILK.mp3', 
    'https://vgmdownloads.com/soundtracks/claw-gamerip-sounds/bgyftjmw/FLAGWAVE.mp3',
    'https://vgmdownloads.com/soundtracks/claw-gamerip-sounds/pzaxyfip/WARP.mp3'
  ];
  let root = document.getElementById('root');
  root.innerHTML += arr.map((v, i, a) => v == '=' ? 
  `<button class='button equal' onclick='calculate(this); playMe(this)'>${v}</button>` : v == 'C' ? 
  `<button class='button clear' onclick='calculate(this); playMe(this)'>${v}</button>` : '/-X+'.includes(v) ?
  `<button class='button operator' onclick='calculate(this); playMe(this)'>${v}</button>` :
  `<button class='button' onclick='calculate(this); playMe(this)'>${v}</button>`).join(' ');
  root.innerHTML += music.map((v, i, a) => 
  `<audio id='audio${i}' preload="auto" controls style='display:none'>
     <source src="${v}">
   </audio>`).join(' ');
} buttons();
/*===============================================*/
function calculate(input) {
  let button = input.textContent, monitor = document.getElementById('monitor'), result = monitor.textContent;

  /* if-else ladder logic */
  if(result == 'NaN' || result == 'Infinity' || button == 'C') {
    monitor.textContent = 0;
  } 
  else if(result == 0 && '0123456789'.includes(button) ) {
    monitor.textContent = Number(result + button);
  } 
  else if(result == 0 && '-'.includes(button) ) {
    monitor.textContent = button;
  } 
  else if(button == '=') {
    if('/X+-'.includes(result[result.length-1]) ) { 
      result = result.slice(0, result.length-1);
    }
    result = result.replace(/ /g, '')
                   .replace(/X/g, '*')
                   .replace(/[+|/|-]/g, function(found) { return ` ${found} `; })
    result = parseFloat( eval(result).toFixed(2).replace('-', '- ') );
    monitor.textContent = result;
  }
  /*===============================================*/
  else if( '/+'.includes(button) && 'X-'.includes(result[result.length-3]) ) {
    monitor.textContent = result.slice(0, result.length-3) + ` ${button}`;
  } 
  else if( '-'.includes(button) && 'X'.includes(result[result.length-3]) ) {
    monitor.textContent = result.slice(0, result.length-3) + `X ${button}`;
  } 
  else if( 'X-'.includes(button) && button == result[result.length-1] ) {
    if('X-'.includes(result[result.length-3]) ) {
      monitor.textContent = result.slice(0, result.length-3) + ` ${button}`;
    } else {
      monitor.textContent += ` ${button}`;
    }
  } 
  else if( '/X+-'.includes(button) && '/X+-'.includes(result[result.length-1]) ) {
    monitor.textContent = result.replace(result[result.length-1], button);
  } 
  else if( '/X+-'.includes(button) || '/X+-'.includes(result[result.length-1]) ) {
    monitor.textContent += ` ${button}`;
  }
  else {
    monitor.textContent += button;
  }  
  /*===============================================*/
  monitor.textContent = monitor.textContent
                               .replace(/[+|/|X|-]/g, function(found) { return `,${found},`; }) 
                               .split(',')
                               .map(v => v.split('').filter(v => v==='.').length > 1 ? 
                                    v =  v.replace('.', '') : v )
                               .join('');
  monitor.innerHTML = monitor.textContent.replace(/[-|/|X|+]/g, function(found) { 
                                return `<span class='monitor'>${found}</span>`; });
}
/*===============================================*/
window.onload = function() {
  document.getElementById('audio').play();
}
function playMe(x) {
  if('.0123456789'.includes(x.textContent) ) {
    document.getElementById('audio0').play();
  } 
  else if('-+/X'.includes(x.textContent) ) {
    document.getElementById('audio1').play();
  } 
  else if(x.textContent == 'C') {
    document.getElementById('audio2').play();
  }  
  else {
    document.getElementById('audio3').play();
  }
}
document.body.onkeypress = function keyboard(event) {
  let key = event.key;
  if('*x'.includes(key)) { key = 'X'; }
  if(key == 'Enter') { key = '='; }
  if(key == 'c') { key = 'C'; }
  [...document.querySelectorAll('button')].map(
    v => v.textContent == key ? v.click() : v);
}
</script>

<script>
dragElement(document.getElementById("root"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    elmnt.onmousedown = dragMouseDown;
  }
  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    document.onmousemove = elementDrag;
  }
  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }
  function closeDragElement() {
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>