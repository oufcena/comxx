<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
}
.about-section {
  text-align: center;
  background: #474e5d;
  color: white;
  padding: 2rem;
}
.title {
  color: grey;
}
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover {
  background: #555;
}
.head {
  text-align: center; 
  padding: 2rem; 
  color: #fff; 
  background: #333;
  text-shadow: -2px 0 #000, 0 2px #000, 1px 0 #000, 0 -1px #000;
}
.container {
  padding-top: 1rem;
}
.container h2 {
  text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
}
.flip { 
  transition: 0.8s; 
  transform-style: preserve-3d;
}
.flip:hover { transform: rotateY(180deg); }
</style>

<div class="about-section">
  <h1>About us!</h1>
  <p>An entire team of professionals is here provide you with the best products!</p>
  <p>
    Compu science helps people around save money and live better, anytime anywhere
    more than 100.000 customers and members visit our nearly 13 stores
    find out how innovative thinking, leadership through service, and above all, our commitment to saving people money so they can live better have made us the busniess we are today and shaping the company we will be tomorrow.
  </p>
</div>

<h2 class="head">Our Team</h2>
<row>
  <column class="card">
    <img class="flip" 
         src=" @include('imgs.adel') " alt="Adel" style="width:100%">
    <div class="container">
      <h2>Adel Emam</h2>
      <p class="title">CEO & Founder</p>
      <p>Farewell my friend!</p>
      <p>emam@hotmail.com</p>
      <p><button class="button">Contact</button></p>
    </div>
  </column>  

  <column class="card">
    <img class="flip" src=" @include('imgs.shaarawy') " alt="shaarawy" style="width:100%">
    <div class="container">
      <h2>Mike Ross</h2>
      <p class="title">Sheikh</p>
      <p>God is the one & only lord and creator!</p>
      <p>shaarawy@gmail.com</p>
      <p><button class="button">Contact</button></p>
    </div>
  </column>

  <column class="card">
    <img class="flip" 
         src=" @include('imgs.tamer') " alt="Tamer" style="width:100%">
    <div class="container">
      <h2>Tamer Amin</h2>
      <p class="title">Politician</p>
      <p>Respect & love Egypt for God's sake!</p>
      <p>amin@gmail.com</p>
      <p><button class="button">Contact</button></p>
    </div>
  </column>
</row>