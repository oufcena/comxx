<style>
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@800&family=Reem+Kufi&display=swap');
news {
 display: block;
 height: 3rem;	
 overflow: hidden;
 background: red;
 color: #fff;
 border-top: 5px solid #000;
 border-bottom: 5px solid #000;
 position: fixed;
 width: 100%;
 bottom: 0;
 font-weight: bold;
 z-index: 1;
}
news p {
 position: absolute;
 width: 100%;
 font-family: 'Almarai', sans-serif;
 top: 10px;
 white-space: nowrap;
 /* Starting position */
 transform: translateX(100%);
 animation: scroll-left 20s linear infinite;
}
news p img {
  width: 50px;
  display: inline-block;
  margin: 0 .5rem;
}
@keyframes scroll-left {
 0% { transform: translateX(-100%); }
}
</style>

<news>
  <p>
  الحق أقوى الخصومات قبل نفاذ الكمية 
  <img src=" @include('imgs.logo') ">
  أسعار ياباني مش راجعة من تاني
  <img src=" @include('imgs.logo') ">
  الغايب يفكر الحاضر وقد أعذر من أنذر يا بني آدم
  <img src=" @include('imgs.logo') ">
  وميرسي على لفت الانتباه والدعاية البلوشي تكسبك ثواب
  </p>
</news>