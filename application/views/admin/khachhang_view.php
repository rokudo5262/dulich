<!DOCTYPE html>
<html>
<head>
<script 
src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js">
</script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.css">
</head>
<body>
    <hr>
    <button class="btn btn-primary"><?php echo anchor("admin/themkhachhang", "Thêm");?></button>
    <hr>
<table id="table_id" class="table table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Giới tính</th>
            <th>Xóa</th>
            <th>Cập nhật</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ds as $dm):?>
	<tr>
		<td><?= $dm['TAIKHOAN']?></td>
		<td><?= $dm['MATKHAU']?></td>
		<td><?= $dm['TENKHACHHANG']?></td>
		<td><?= $dm['DIACHI']?></td>
		<td><?= $dm['GIOITINH']?></td>
		<td><a href="xoakhachhang/<?= $dm['TAIKHOAN']?>">Xóa</a></td>
		<td><a href="suakhachhang/<?= $dm['TAIKHOAN']?>">Cập Nhật</a></td>
	</tr>
	<?php endforeach;?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table_id').dataTable(
        {
        	autoFill: true,
        	responsive: true
        });
    });
</script>
</body>
</html>