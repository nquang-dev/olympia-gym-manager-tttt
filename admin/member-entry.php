<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}
?>
<!-- HNQ -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản lý Olympia GYM Club </title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part--><!-- HNQ -->
<div id="header">
  <h1><a href="dashboard.html">Perfect Gym Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="hidden" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->

<!--sidebar-menu-->
<?php $page='members-entry'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="#" class="tip-bottom">Manamge Members</a> <a href="#" class="current">Thêm hội viên</a> </div>
  <h1>Đăng ký hội viên</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Thông tin - cá nhân</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="add-member-req.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Họ và tên :</label>
              <div class="controls">
                <input type="text" class="span11" name="fullname" placeholder="Ghi đầy đủ họ tên" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tên đăng nhập :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" placeholder="Tên đăng nhập" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Mật khẩu :</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="**********"  />
                <span class="help-block">Thông tin "tên đăng nhập" và "mật khẩu" sẽ tạo tài khoản cho hội viên</span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giới tính :</label>
              <div class="controls">
              <select name="gender" required="required" id="select">
                  <option value="Nam" selected="selected">Nam</option>
                  <option value="Nu">Nữ</option>
                  <option value="Khác">Khác</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ngày sinh :</label>
              <div class="controls">
                <input type="date" name="dor" class="span11" />
                <span class="help-block">Ngày đăng ký</span> </div>
            </div>
            
          
        </div>
     
        
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Số tháng đăng ký : </label>
              <div class="controls">
                <select name="plan" required="required" id="select">
                  <option value="1" selected="selected">Một tháng</option>
                  <option value="3">Ba tháng</option>
                  <option value="6">Sáu tháng</option>
                  <option value="12">Một năm</option>

                </select>
              </div>

            </div>
            <div class="control-group">
              
              
            </div>
          </div>

          </div>



        </div>
      </div>
	  
	
    </div>

    
    
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Thông tin liên hệ</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Số điện thoại</label>
              <div class="controls">
                <input type="number" id="mask-phone" name="contact" placeholder="9876543210" class="span8 mask text">
                <span class="help-block blue span8">Không để trống SĐT</span> 
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Địa chỉ :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Nhập địa chỉ" />
              </div>
            </div>
          </div>

              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Gói dịch vụ</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            
            
            <div class="control-group">
              <label class="control-label">Gói</label>
              <div class="controls">
                <label>
                  <input type="radio" value="Gói 1" name="services" />
                  Gói 1 <small>- 300.000 VND/1 tháng</small></label>
                <label>
                  <input type="radio" value="Gói 2" name="services" />
                  Gói 2 <small>- 500.000 VND/1 tháng</small></label>
                <label>
                  <input type="radio" value="Gói 3" name="services" />
                  Gói 3 <small>- $900.000 VND/1 tháng</small></label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Tổng thanh toán</label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">VND</span> 
                  <input type="number" placeholder="50" name="amount" class="span11">
                  </div>
              </div>
            </div>
            
          
            
            <div class="form-actions text-center">
              <button type="submit" class="btn btn-success">Đăng ký hội viên</button>
            </div>
            </form>

          </div>



        </div>

        </div>
      </div>

	</div>
  </div>
  
  
</div></div>


<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Developed by Huỳnh Nhật Quang</a> </div>
</div>

<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
