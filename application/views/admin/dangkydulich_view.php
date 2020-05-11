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
            <th>Mã khách hàng</th>
            <th>Mã tour</th>
            <th>Phương thức thanh toán</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <?php foreach ($ds as $dm):?>
    <tr>
        <td><?= $dm['TAIKHOAN']?></td>
        <td><?= $dm['MATOUR']?></td>
        <td><?= $dm['HINHTHUCTHANHTOAN']?></td>
        <td>
            <button class="btn btn-danger">Xóa</button>
            <button class="btn btn-success">Cập Nhật</button>
        </td>
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