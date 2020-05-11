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
    <input type="button" class="btn btn-lagre btn-primary" name="" value="Thêm">
<table id="table_id" class="table table-condensed table-striped table-hover">
    <thead>
        <tr>
            <th>Mã nhân viên</th>
            <th>Tên nhân viên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Giới tính</th>
            <th>Chức vụ</th>
            <th>Mật khẩu</th>
            <th>Lương cơ bản</th>
            <th>Hoạt Động</th>
            <th>Xóa</th>
            <th>Cập nhật</th>
        </tr>
    </thead>
    <?php foreach ($ds as $dm):?>
    <tr>
        <td><?= $dm['MANHANVIEN']?></td>
        <td><?= $dm['TENNHANVIEN']?></td>
        <td><?= $dm['NGAYSINH']?></td>
        <td><?= $dm['DIACHI']?></td>
        <td><?= $dm['GIOITINH']?></td>
        <td><?= $dm['CHUCVU']?></td>
        <td><?= $dm['MATKHAU']?></td>
        <td><?= $dm['LUONGCB']?></td>
        <td><?= $dm['HOATDONG']?></td>
        <td><a>Xóa</a></td>
        <td><a>Cập Nhật</a></td>
    </tr>
    <?php endforeach;?>
    <tbody>
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