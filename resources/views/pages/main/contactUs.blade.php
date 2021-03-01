<style>
input[type=text], 
input[type=tel], 
input[type=password], 
input[type=email] {
  display: block; 
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  transition: 0.5s;
}
input[type=text]:focus, 
input[type=tel]:focus, 
input[type=password]:focus, 
input[type=email]:focus {
  background: lightblue;
  border: 3px solid #555;
}
textarea {
  box-sizing: border-box;
  padding: 16px;
  font-size: 16px;
  border: 3px solid #ccc;
  transition: 0.5s;
  width: 100px;
  display: block;
}
textarea:focus {
  background: lightblue;
  border: 3px solid #555;
}
input[type=submit]:hover {
  background: #45a049;
}
input[type=submit] {
  background: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  width: 100%;
}
input[type=submit]:hover {
  background: #45a049;
}  
</style>

<h2 style="margin:0; background: yellow; color: #fff; 
           font-size: 2rem; height: 80%; 
           text-align: center; position: relative;
           text-shadow: 
           -2px 0 #000, 
           0 2px #000, 
           1px 0 #000, 
           0 -1px #000;">
  <img src=" @include('imgs.contactUs0') " alt="contact us" 
       style="width:100%; height:100%; 
              position:absolute; top:0;left:0; z-index:0;">
  <div style="position: absolute; left:50%; top: 50%; 
              transform: translate(-50%, -50%);">
    Please get in touch and our expert support team will 
    answer all your questions.
  </div>
</h2>

<h1 style="text-shadow: -2px 0 #fff, 
           0 2px #fff, 1px 0 #fff, 0 -1px #fff; 
           position: relative; 
           height: 20vh; margin: 0; text-align: center; 
           background: #3f51b5;">
  <c>
    Contact Us!
  </c>
</h1>

<row>
  <column style="grid-row: 1;">
    <img src=" @include('imgs.contactUs1') " 
         style="width: 100%; height: 100%;">
  </column>

  <column style="background: #009688;">
    <form action=" {{ route('contacts.store') }} " method="post" 
          style="color: #000; text-align:left;width:100%;height:100%; 
                 padding: 1rem; display:block; position:absolute; 
                left:50%; top: 50%; transform: translate(-50%, -50%);">
      @csrf
      <fieldset style="padding: 2rem; background: #ddffdd;">
        <legend style="color: #fff; 
                       text-shadow: -2px 0 #000, 0 2px #000, 
                       1px 0 #000, 0 -1px #000; font-weight: bold; 
                       font-size: 1.5rem;">Get in touch:</legend>

        <label> Email<span style="color:red;">*</span> 
          <br>
          <input type="email" type="email" required>
        </label> <p></p>

        <label> Phone<span style="color:red;">*</span>  
          <br>
          <input type="tel" placeholder="01000000000" 
                 pattern="[0]{1}[1]{1}[0,1,2,5]{1}[0-9]{8}" 
                 required>
        </label> <p></p>

        <fieldset>
          <legend>Type</legend>

          <label>
            <input type="radio" name="contact" 
                   value="complaint" checked> Complaint
          </label><br>

          <label>
            <input type="radio" name="contact" 
                   value="suggestion"> Suggestion
          </label><br>
        </fieldset><p></p>

        <label> Subject<span style="color:red;">*</span> 
          <p></p>
          <textarea id="subject" style="width:100%; height: 30vh;"   
                    placeholder="Write something.."></textarea>
        </label><p></p>

        <input type="submit" value="Send">
      </fieldset>
    </form>
  </column>
</row>