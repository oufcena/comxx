<script>
function dropdead(name='Dropdown', links, colors) {
  if(!links) {
    links = [
      { what: `Home`, where: `#home` },
      { what: `About`, where: `#about` },
      { what: `Contact`, where: `#contact` }
    ];
  }  
  
  if(!colors) {
    colors = {
      parent: { 
        bg: `#4caf50`, bgH: `#3e8e41`, 
        c: `#fff`, cH: `#fff` 
      },
     
      child: { 
        bg: `#fff`, bgH: `#555`,
        c: `#000`, cH: `#fff` 
      }
    };
  }
  
  var CSS, JS, HTML='', JSX=document.body;
  
  CSS = [
    `style="
      position: relative;
      display: inline-block;
    "`,
    `style="
      width: 30vw;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;   
      background: ${colors.parent.bg};
      color: ${colors.parent.c};
    " onmouseover="this.style.cssText += \`
        background: ${colors.parent.bgH};
        color: ${colors.parent.cH};
      \`;
    " onmouseout="this.style.cssText += \`
        background: ${colors.parent.bg};
        color: ${colors.parent.c};
      \`;
    "  
    `,
    `style="
      display: none;
      position: absolute;
      z-index: 10;
      width: 100%;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    "`,
    `style="
      display: block;
      text-decoration: none;
      padding: 12px 16px;
      background: ${colors.child.bg};
      color: ${colors.child.c};
    " onmouseover="this.style.cssText += \`
        background: ${colors.child.bgH};
        color: ${colors.child.cH};
      \`;
    " onmouseout="this.style.cssText += \`
        background: ${colors.child.bg};
        color: ${colors.child.c};
      \`;
    "`,
    ``
  ];
  
  JS = [
    `
    var x, that;
    x = this.nextElementSibling;

    if(x.style.cssText.includes('display: none;')) { 
      this.onmouseout='';    
            
      x.style.cssText += \`
        display: block;
      \`;
    } else {      
      this.onmouseout = function() {
        this.style.cssText += \`
          background: ${colors.parent.bg};
          color: ${colors.parent.c};
        \`;
      }
      
      x.style.cssText += \`
        display: none;
      \`;
    }    
    
    that = this;
    window.onclick = function(event) {
      if(event.target !== that) {
        that.style.cssText += \`
          background: ${colors.parent.bg};
          color: ${colors.parent.c};
        \`;
      
        that.onmouseout = function() {
          that.style.cssText += \`
            background: ${colors.parent.bg};
            color: ${colors.parent.c};
          \`;
        }
      
        x.style.cssText += \`
          display: none;
        \`;
      }
    }
    `,
    ``
  ];  
  
  HTML = `
  <section ${CSS[0]}>
    <button ${CSS[1]} onclick="${JS[0]}">${name}</button>
    
    <div ${CSS[2]}>
      ${links.map((v, i) => 
      `<a ${CSS[3]} href="${v.where}">${v.what}</a>`
      ).join('')}
    </div>
  </section>
  `;
  
  JSX.innerHTML += HTML;
} dropdead(
  '', 
  [
    { what: `<img src="@include('icons.users')" style="width:50px;height:50px;"> Profile`, where: ` {{ route('profile') }} ` },
    { what: `<img src="@include('icons.products') style="width:50px;height:50px;"> Orders`, where: ` {{ route('orders') }} ` },
    { what: `<img src="@include('icons.logout') style="width:50px;height:50px;"> Logout`, where: ` {{ route('logout') }} ` }
  ], 
  {
    parent: { 
      bg: `DodgerBlue`, bgH: `royalblue`, 
      c: `#fff`, cH: `#fff` 
    },
    child: { 
      bg: `#f1f1f1`, bgH: `gray`, 
      c: `#000`, cH: `#fff`   
    }
  }
);
</script>