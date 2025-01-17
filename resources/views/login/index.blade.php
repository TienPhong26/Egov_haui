@extends('login.loginhome')
@section('body') 
<div class="wrapper">
    
    <form action="welcome.blade.php" method="POST">
      <div>
        <h1>Haui_Egov</h1>
       
      </div>
      <div class="input-box">
        <input type="text" placeholder="Tài khoản" id="username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Mật khẩu" id="password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Nhớ mật khẩu</label>
        <a href="#">Quên mật khẩu</a>
      </div>
      <button type="submit" class="btn">Đăng nhập</button>
      <div class="register-link">
      
      </div>
      @csrf
    </form>
  </div>

  @stop