<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="template-customer">
    <h1>Đăng ký tài khoản</h1>
    <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
    <div class="row" style="margin-top:50px;">
      <div class="col-md-6">
        <div class="wrapper-form">
          <fieldset style="width: 500px; height: 300px; border-color: #337ab7; margin: 0 auto;">
            <form method='post' action="index.php?controller=account&action=registerPost">
              <input name="__RequestVerificationToken" type="hidden" value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTBzdju-hUg15GcW6GapXzfmQE3y2P-Pa1gLzKPnkBBOeGOPfIY8YizaUAza1qjuq-S7qBC9cNJ5wBCsY1hvEGhDYHpl9GdoxvRVGcVgf20tVL6_NtcL9vQLmmDhdq91T0" />
              <p class="title" style="height: 40px; background-color: #337ab7;  text-align: center; color: white;"><span>Đăng ký tài khoản</span></p>
              <style type="text/css">
                table tr td{padding-top: 4px;}
              </style>
              <table style="margin: 0 auto; margin-top: 30px;">
                <tr >
                  <td>Ho va ten: </td>
                  <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr style="padding-top: 30px;">
                  <td >Email: </td>
                  <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>Dia chi: </td>
                   <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>Dien thoai: </td>
                  <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>Email: </td>
                  <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>Mat khau: </td>
                  <td style="padding-left: 15px;"><input type="text" name=""></td>
                </tr>
                <tr>
                  <td><input style="font-size: 16px; height: 30px; width: 100px; color: white; background-color: #d9534f; border-color: #d43f3a;" type="submit" name="" value="Dang ky"></td>
                </tr>
              </table>
              <!-- <div class="info" style="margin-left: 100px;">
                <div class="form-group">
                  <label>Họ và tên:</label>
                  <input style="right: 10px;" type="text" name="name" class="input-control">
                </div>
                <div class="form-group">
                  <label>Email:<b id="req">*</b></label>
                  <input style="margin-left: 50px;" type="text" name="email" class="input-control" required>
                </div>
                <div class="form-group">
                  <label>Địa chỉ:</label>
                  <input type="text" name="address" class="input-control">
                </div>
                <div class="form-group">
                  <label>Điện thoại:</label>
                  <input type="text" name="phone" class="input-control">
                </div>
                <div class="form-group">
                  <label>Mật khẩu:<b id="req">*</b></label>
                  <input type="password" name="password" class="input-control" required="">
                </div>
                <div class="form-group">
                  <input type="submit" class="button" value="Đăng ký">
                </div>
              </div> -->
          </form>
          </fieldset>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wrapper-form">
          <p class="title"><span>Đăng nhập</span></p>
          <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
          <a href="index.php?controller=account&action=login" class="button">Đăng nhập</a> </div>
      </div>
    </div>
</div>