<style>
:root {
  --tableBorder: {{ $tableBorder }};
  --accordionbg: {{ $accordionbg }};
  --accordionc: {{ $accordionc }};
  --rowOddbg: {{ $rowOddbg }};
  --rowOddc: {{ $rowOddc }};
  --rowEvenbg: {{ $rowEvenbg }};
  --rowEvenc: {{ $rowEvenc }};
}
section accordion {
  display: block;
}
section accordion button {
  width: 100%; 
  border: 5px solid var(--tableBorder);
  border-bottom: none; 
  cursor: pointer; 
  padding: 1rem; 
  text-align: left; 
  transition: 0.4s; 
  background: #fff; 
  color: #000;   
  font-weight: bold; 
  font-size: 1.5rem;
}
section accordion button:hover {
  background: #000;
  color: #fff;
}
section accordion .active {
  background: #000;
  color: #fff;
}
section accordion content {
  display: block;
  padding: 0 1rem; 
  overflow: hidden; 
  max-height: 0px; 
  transition: 0.3s; 
  background: var(--accordionbg); 
  color: var(--accordionc); 
  border-left: 5px solid var(--tableBorder); 
  border-right: 5px solid var(--tableBorder);
}
</style>

<style>
section content check {
  display: block;
  padding: 1rem;
}
section content check label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -moz-user-select: none;
  user-select: none;
}
section content check label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
section content check checkmark {
  position: absolute;
  top: 4px;
  left: 0;
  height: 25px;
  width: 25px;
  background: #eee;
}
section content check label:hover input ~ checkmark {
  background: #ccc;
}
section content check label input:checked ~ checkmark {
  background: #2196F3;
}
section content check checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
section content check label input:checked ~ checkmark:after {
  display: block;
}
section content check label checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  transform: rotate(45deg);
}
</style>

<style>
section table0 {
  overflow: auto;
  display: grid;
  grid-template-columns:
  repeat( auto-fit, minmax(0, auto) );
  border: 5px solid var(--tableBorder);
}
section table0 row {
  display: block;
  text-align: center;
  white-space: nowrap;
  position: relative;
  padding: 5px;
  margin: 0 auto;
  margin-bottom: 10px;
  padding-top: 35px;
}
section table0 row form {
  position: relative;
  display: inline-block;
  padding: 0;
}
section table0 row input {
  white-space: nowrap;
  border: none;
  position: relative;
  display: block; 
  width: 100%; 
  height: 100%;
  text-align: center;
  box-sizing: border-box;
  color: #55595c;
  background: #fff;
}
section table0 row input[type='submit'] {
  white-space: nowrap;
  border: none;
  position: relative;
  width: 100%; 
  font-size: 1rem;
  box-sizing: border-box;
  margin: 0;
  padding: 0; 
  display: inline-block;
  background: inherit;
  color: inherit;
}
section table0 row:first-child {
  font-weight: bold;
  text-align: center;
  padding: .5rem 0;
  color: #fff;
  text-shadow: 
  -1px 0 #000, 0 2px #000, 1px 0 #000, 0 -1px #000;
}
/*--------------------------*/
section table0 row:not(:first-child) { 
  /* even */
  background: var(--rowEvenbg);
  color: var(--rowEvenc);
  height: 100px;
}
section table0 row:not(:first-child):nth-child(even) { 
  /* odd */
  background: var(--rowOddbg);
  color: var(--rowOddc);
  height: 100px;
}

/*--------------------------*/
section table0 column {
  padding: 5px; /* Delete */
}
section table0 column:hover {
  z-index: 1;
}
@for($i=0; $i<(count($color)); $i++)
  section table0 column:nth-child( {{$i+1}} ) {
    background: {{ $color[$i] }};
    text-align: center;
    word-break: break-all;
  }
@endfor
</style>

<section>
  <accordion>
    <button>
      <span>OPTIONS</span>
      <span style="float:right;">+</span>
    </button>

    <content>
      <check>
        <label>ALL
          <input type="checkbox">
          <checkmark></checkmark>
        </label>

        @foreach ($head as $h)
          <label> {{ $h }}
            <input type="checkbox">
            <checkmark></checkmark>
          </label>
        @endforeach
      </check>
    </content>
  </accordion>

  <!---------------------------------->
  @if( $create )
    <!---- SAVE ---->
    <form style="margin:0;" action="{{ route($name.'.store') }}" method="POST">
      @csrf
  @elseif( $edit && isset($item) )
    <!---- SAVE ---->
    <form style="margin:0;" action="{{ route($name.'.update', $item) }}" method="POST">
      @method('PUT')
      @csrf
  @endif
  <table0>
    @for ($i=0; $i<(count($head)); $i++)
      <column>
        <?php $bb = strtolower($head[$i]); ?>
        
        <!---- head ---->
        <row> {{ $head[$i] }} </row>

        <!---- body ---->
        @foreach ($body as $b) 
          <!---- created_at ---->
          @if( $bb=='created_at' || $bb=='updated_at' )
            <row> {{ date_format( $b-> $bb, 'jS M Y') }} </row>
          @elseif ( $bb!='actions' )
            <!---- EDIT ---->
            @if( $bb=='image' ) 
              @include('image', [
                'image' => $b->$bb,
                'width' => '100px',
                'height' => '100px',
                'margin' => '0 auto',
              ])
            @elseif( !isset($b->$bb) )
              <row> <br> </row>
            @elseif( $edit && $item && $item==$b )
              <row style="padding:0;"> <?php echo $edit[$bb]; ?> </row>
            @else
              <row> {{ $b->$bb }} </row>
            @endif
          @endif
        @endforeach 

        <!---- CREATE ---->
        @if( isset($create[$bb]) )
          @if( $bb=='image' ) 
            @include('image', [
              'image' => '',
              'width' => '100px',
              'height' => '100px',
              'margin' => '0 auto',
            ])
          @else 
            <row style="margin:0;padding:5px;"><?php echo $create[$bb]; ?></row>
          @endif
        @endif

        <!---- actions ---->
        @if($bb=='actions' && !$create && !$edit)
          @foreach($body as $b)
            <row> 
              <!---- SHOW ---->
              <a style="margin:0;" href="{{ route($name.'.show', $b->id) }}"><i class="fas fa-eye text-success fa-lg"></i></a>

              <!---- EDIT ---->
              <a style="margin:0;" href="{{ route($name.'.edit', $b->id) }}"><i class="fas fa-edit  fa-lg"></i></a>

              <!---- DELETE ---->
              <form style="margin:0;" action="{{ route($name.'.destroy', $b->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="border: none; background:transparent;">
                  <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
              </form>
            </row>
          @endforeach

          @if(!$create && !$edit)
            <row style="margin:0;"> 
              <!---- CREATE ---->
              <a class="btn btn-success" href="{{ route($name.'.create') }}"> <i class="fas fa-plus-circle"></i></a> 
            </row>
          @endif 
        @elseif($bb=='actions' && $create)
          @foreach($body as $b)
            <row> <br> </row>
          @endforeach
          <row> 
            <!---- SAVE ---->
            <button type="submit" style="border: none; background:transparent; margin: 0 auto;display:block; color:blue;">
              <i style="width: 25px; height:25px;" class="fas fa-save"></i>
            </button>
          </row>
        @elseif($bb=='actions' && $edit)
          @foreach($body as $b)
            @if($b == $item)
              <row> 
                <!---- SAVE ---->
                <button type="submit" style="border: none; background:transparent; margin: 0 auto;display:block; color:blue;">
                  <i style="width: 25px; height:25px;" class="fas fa-save"></i>
                </button>
              </row>
            @else 
              <row> <br> </row> 
            @endif
          @endforeach
        @endif
      </column>
    @endfor
  </table0>

  @if( $edit || $create )
    </form>
  @endif

  <script>
  (function(){
    var that, 
    accordion, button, content, contentHeight,
    check, table;
    
    that = document.currentScript;
    
    accordion = that.parentElement
    .getElementsByTagName('accordion')[0];
    button = accordion
    .getElementsByTagName('button')[0];
    content = accordion
    .getElementsByTagName('content')[0];

    check = that.parentElement
    .children[0].children[1].children[0]
    .getElementsByTagName('input');

    table = that.parentElement
    .getElementsByTagName('table0')[0];  
    
    /*----------------------------*/
    button.onclick = function() {
      contentHeight = 
      getComputedStyle(content)['max-height'];
      if(contentHeight == '0px') {
        content.style.maxHeight = 
        content.scrollHeight + 'px';
        button.classList.add('active');
        button.children[1].textContent = '-';
      } else {
        content.style.maxHeight = '0px';
        button.classList.remove('active');
        button.children[1].textContent = '+';
      }
    };
    
    /*----------------------------*/
    function show(x, y) {
      [...table.children].forEach(v => {
        var head = v.children[0].textContent.trim();

        if(head == x) {
          if(y == 'none') {
            v.style.cssText += `
              transition: 0.6s;
              opacity: 0;
            `;
            setTimeout(function() { 
              v.style.cssText += `
                display: none;
              `;
            }, 600);
          } else {
            v.style.cssText += `
              display: block;
              opacity: 1;
            `;
          }
        }
      });
    }
    
    [...check].forEach((v, i) => {
      v.checked = true;
      if(!i) { 
        v.onclick = function() {
          if(v.checked) {
            [...check].forEach(v => {
              var x = v.parentElement.textContent.trim();
              v.checked = true;
              show(x, 'block');
            });
          } else {
            [...check].forEach(v => {
              var x = v.parentElement.textContent.trim();
              v.checked = false;
              show(x, 'none');
            });
          }
        };
      } else { 
        var x = v.parentElement.textContent.trim();
        v.onclick = function() {
          if(v.checked) {
            show(x, 'block');
          } else {
            show(x, 'none');
          }
        };
      }
    });
  })();
  </script>
</section>