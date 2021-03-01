<style>
section {
  background-image: url(" @include('imgs.faqs0') ");
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  width: 100%;
}
</style>

<script>
function accordion(name='Accordion', content, colors, JSX=document.body) {
  var HTML, CSS, JS;

  if(!content) {
    content = `
      Lorem ipsum dolor sit amet, 
      consectetur adipisicing elit, 
      sed do eiusmod tempor incididunt 
      ut labore et dolore magna aliqua. 
      Ut enim ad minim veniam, 
      quis nostrud exercitation ullamco 
      laboris nisi ut aliquip ex ea commodo consequat.
    `;
  }

  if(!colors) {
    colors = {
      parent: {
        c: '#000', bg: '#fff',
        cH: '#fff', bgH: '#000'
      },
      child: {
        c: '#fff', bg: '#555'
      }
    };
  }

  CSS = [
    `style="
    background: ${colors.parent.bg};
    color: ${colors.parent.c};
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: transparent;
    text-align: left;
    font-size: 15px;
    transition: 0.4s;
    "`,
    `style="
    padding: 0 18px;
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.3s ease-out;
    background: ${colors.child.bg};
    color: ${colors.child.c};
    "`
  ];

  JS = [
    `onclick="
    var panel = this.nextElementSibling;
    if(panel.style.maxHeight == '0px') {
    panel.style.maxHeight = 
    panel.scrollHeight + 'px';
    this.onmouseout = '';
    this.style.cssText += 
    \`
    background: ${colors.parent.bgH};
    color: ${colors.parent.cH};
    \`;
    this.children[0].textContent = '-';
    } else {
    panel.style.maxHeight = '0px';
    this.onmouseout = function () {
    this.style.cssText += 
    \`
    background: ${colors.parent.bg};
    color: ${colors.parent.c};
    \`;
    }
    this.children[0].textContent = '+';
    }
    "
    onmouseover="
    this.style.cssText += 
    \`
    background: ${colors.parent.bgH};
    color: ${colors.parent.cH};
    \`;
    "
    onmouseout="
    this.style.cssText += 
    \`
    background: ${colors.parent.bg};
    color: ${colors.parent.c};
    \`;
    "
    `,
    ``
  ];   

  HTML = `
    <button ${CSS[0]} ${JS[0]}>
      ${name}
      <span style="float:right;">+</span>
    </button>
    <div ${CSS[1]}>
      <p>${content}</p>
    </div>
  `;

  JSX.innerHTML += HTML;
} 
</script>

<script>
accordion(
  'How does the service work?', 
  '<h3>Just visit our online quote page, fill in all your laptop details and a price will be displayed on the screen, if you would like to ahead just accept the price fill in your personal and payment details, send your laptop in to us, we receive your laptop check it in and get payment across to your chosen method within 48 hours, you can find out more by visiting our how it works page.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'Who are COMPU SCIENCE?', 
  '<h3>Our aim is solely to provide customers with a simple easy and cost effective way to recycle their laptops.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'What promises do COMPU SCIENCE make?', 
  '<h3>We guarantee to completely eradicate all of your data on your laptops. We guarantee a top notch level of customer service and support.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'How do I find out what my laptop is worth?', 
  '<h3>Simply visit our online quote tool page, fill in your laptops details and you will be given a price instantly on the screen.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'I can\'t seem to get the quote tool to work for my laptop?', 
  '<h3>Contact us and let us know the details and we will be more than happy to assist you in getting a price for your laptop</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'My laptop is in bad condition - it\'s falling apart! I don\'t think you\'d want to buy it.', 
  '<h3>Yes we also buy laptops in poor and non-working condition. The quote given for this will be the up to price depending on the parts we can salvage upon testing. In most cases we pay the maximum price shown and in the rare case the price is lower, then you may cancel the sale with no penalties and have the laptop returned free of charge.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'What payment methods do you support?', 
  '<h3>We will make payment by Cheque payment, Paypal and Direct Bank Transfer.</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);

accordion(
  'When do I get paid?', 
  '<h3>As soon as your machine has been accepted it will be put forward for payment and completed within 48 business hours</h3>', 
  {
    parent: {
      c: '#fff', bg: 'transparent',
      cH: '#fff', bgH: '#000'
    },
    child: {
      c: 'red', bg: 'yellow'
    }
  }
);
</script>