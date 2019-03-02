<?php
require("v_header.php");
?>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">You can use your email.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lưu tài khoản</label>
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
  <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
<?php
require("v_footer.php");
?>