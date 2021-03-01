@include('layouts.slideshow', [
  'slideshow' => 0,
  'slides' => 6,
  'alt' => [
    'Help is on the way! Yay!',
    'Intel',
    '11th Generation',
    'Marvel Avengers',
    'Asus',
    'The Beauty is in the details',
  ],
])
@include('layouts.counter')
<style>
.x {background-image: linear-gradient(to right, #085078 0%, #85D8CE  51%, #085078  100%)}
.x {
  transition: 0.5s;
  background-size: 200% auto;
  box-shadow: 0 0 20px #eee;
  border: 3px solid #000;
  border-radius: 10px;
  padding: 1rem;
}
.x h3 {
  font-size: 1.5rem;
}
.x svg { 
  padding-bottom: 1rem;
  transition: 0.5s; 
  width: 50px;
  height: 50px;
}
.x:hover {
  background-position: right center;
  border: 3px solid #fff;
  color: #fff;
  text-decoration: none;
}
.x:hover svg {
  background: #fff;
}
</style>         

<section style="padding: 2rem; margin: 2rem 0; border: 5px solid #000;  text-align: center; font-size: 1.5rem;
  background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59);">
  <h2 style="color: #fff; text-shadow: -2px 0 #000, 0 2px #000, 1px 0 #000, 0 -1px #000;">ABOUT COMPU SCIENCE</h2>
  <p style="text-shadow: -.5px 0 #fff, 0 .5px #fff, .5px 0 #000, 0 -.5px #fff;">Our mission is to increase our wealth by selling fancy products to high-class customers! <br>
  we can get rich really fast!!
  </p>
</section>

<!----------------------------------->
<row>
  <column class="x">
    <svg width="50" height="50" viewBox="0 0 297.004 297.004">
<path d="M286.832,142.98h-12.218l-17.449-52.677c-1.381-4.162-5.27-6.974-9.655-6.974h-29.557V34.754	c0-5.616-4.555-10.17-10.172-10.17H10.172C4.555,24.584,0,29.138,0,34.754v178.043c0,5.617,4.555,10.171,10.172,10.171h9.83	c-0.159,1.534-0.242,3.088-0.242,4.665c0,24.695,20.077,44.787,44.756,44.787c24.676,0,44.749-20.092,44.749-44.787c0-1.577-0.083-3.131-0.242-4.665h88.83c0.158,1.534-0.242,3.088-0.242,4.665c0,24.695,20.077,44.787,44.759,44.787c24.676,0,44.752-20.092,44.752-44.787c0-1.578-0.083-3.132-0.243-4.667c5.595-0.025,10.126-4.567,10.126-10.169v-59.646C297.004,147.536,292.449,142.98,286.832,142.98z M240.163,103.672l13.02,39.309h-35.23v-39.309H240.163z M64.516,252.077c-13.461,0-24.413-10.966-24.413-24.444c0-13.48,10.952-24.445,24.413-24.445c13.458,0,24.407,10.965,24.407,24.445
C88.923,241.111,77.974,252.077,64.516,252.077z M197.61,202.625h-95.987c-8.048-11.925-21.678-19.782-37.107-19.782
c-15.433,0-29.065,7.857-37.114,19.782h-7.058V44.927H197.61V202.625z M242.369,252.077c-13.464,0-24.416-10.966-24.416-24.444	c0-13.48,10.952-24.445,24.416-24.445c13.459,0,24.41,10.965,24.41,24.445C266.779,241.111,255.828,252.077,242.369,252.077z
M242.369,182.843c-9.004,0-17.387,2.685-24.416,7.279v-26.799h49.315h9.392v35.571C268.444,189.091,256.123,182.843,242.369,182.843z"/></svg>
    <h3>FREE SHIPPING</h3>
    <p>Cairo & Alex</p>
  </column>
  
  <column class="x">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M13.427 3.021h-7.427v-3.021l-6 5.39 6 5.61v-3h7.427c3.071 0 5.561 2.356 5.561 5.427 0 3.071-2.489 5.573-5.561 5.573h-7.427v5h7.427c5.84 0 10.573-4.734 10.573-10.573s-4.733-10.406-10.573-10.406z"/></svg>
    <h3>30 DAYS RETURN</h3>
    <p>Refund and return policy</p>
  </column>
  
  <column class="x">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8 6h-3.135c-.385.641-.798 1.309-1.232 2h3.131l.5 1h-4.264l-.344.544-.289.456h.558l.858 2h-7.488l.858-2h.479l-.289-.456-.343-.544h-2.042l-1.011-1h2.42c-.435-.691-.848-1.359-1.232-2h-3.135l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
    <h3>OUR STORES</h3>
    <p>From 10AM: 10PM</p>
  </column>
  
  <column class="x">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path d="M19 11h-14v-2h14v2zm0 2h-14v2h14v-2zm0 4h-14v2h14v-2zm3-11v16h-20v-16h20zm2-6h-24v24h24v-24z"/></svg>
    <h3>TERMS & CONDITIONS</h3>
  </column>
</row>