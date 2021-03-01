<!DOCTYPE html>
<html>
<style>
body {
  background: linear-gradient(to right, #f0f2f0, #000c40);
}
.loginbox {
  width: 320px;
  height: 400px;
  background: #000;
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 50px 30px; 
  -moz-user-select: none;
  user-select: none;
}
h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}
.loginbox p {
  margin: 0;
  padding: 0;
  font-weight: bold;
}
.loginbox input {
  width: 100%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  padding: 8px 0;
  color: #fff;
  font-size: 16px;
}
.loginbox input[type="checkbox"] {
  width: 30px;
}
.loginbox button {
  width: 100%;
  margin-bottom: 15px;
  border: none;
  padding: 8px 0;
  background: #fb2525;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
  cursor: pointer;
}
.loginbox button:hover {
  background: #ffc107;
  color: #000;
}
.loginbox a {
  text-decoration: none;
  font-size: 15px;
  line-height: 20px;
  color: darkgrey;
  outline: none;
}
.loginbox a:hover {
  color: #ffc107;
}
</style>

<body>

<section class="loginbox">
  <h1>Login Here</h1>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <p>Email</p>
    <input type="text" name="email" placeholder="Enter Email">
    <p>Password</p>
    
    <div style="position:relative;">
      <input type="password" name="password" placeholder="Enter Password">
      <img style="width: 30px; position:absolute; right:0;" src=" @include('icons.eye') " onclick="
      var pass = this.previousElementSibling;
      if(pass.type == 'password') {
        pass.type = 'text';
      } else {
        pass.type = 'password';
      }
      ">
    </div>
    
    <label>
      <input type="checkbox" name="subscribe">Subscribe to newsletter 
    </label>

    <button type="submit">Let's go!</button>
    <a href=" {{ route('register') }} ">Don't have an account?</a>
  </form>      
</section>

</body>
</html>