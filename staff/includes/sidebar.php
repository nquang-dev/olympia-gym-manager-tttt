<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="index.php"><i class="icon icon-home"></i> <span>Bảng điều khiển</span></a> </li>
    <li class="<?php if($page=='member'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-group"></i> <span>Quản lý thành viên</span></a>
      <ul>
        <li><a href="members.php">Danh sách hội viên</a></li>
        <li><a href="member-entry.php">Mẫu đơn đăng ký hội viên</a></li>
        <li><a href="remove-member.php">Xóa hội viên</a></li>
        <li><a href="edit-member.php">Sửa thông tin hội viên</a></li>
      </ul>
    </li>

    <li class="<?php if($page=='equipment'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-cogs"></i> <span>Trang thiết bị</span> </a>
      <ul>
        <li><a href="equipment.php">Danh sách thiết bị</a></li>
        <li><a href="equipment-entry.php">Thêm thiết bị</a></li>
        <li><a href="remove-equipment.php">Xóa Thiết Bị</a></li>
        <li><a href="edit-equipment.php">Cập nhật thiết bị</a></li>
      </ul>
    </li>
    <li class="<?php if($page=='membersts'){ echo 'active'; }?>"><a href="member-status.php"><i class="icon icon-eye-open"></i> <span>Tình trạng thành viên</span></a></li>
    <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a href="payment.php"><i class="icon icon-money"></i> <span>Thanh toán</span></a></li>
    <li class="<?php if($page=='attendance'){ echo 'active'; }?>"><a href="attendance.php"><i class="icon icon-calendar"></i> <span>Manage Attendance</span></a></li>

  </ul>
</div>
<!--sidebar-menu-->