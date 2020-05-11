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
            <th>Mã giảm giá</th>
            <th>Tên giảm giá</th>
            <th>Ngày bắt đầu giảm gía</th>
            <th>Ngày kết thúc giảm gía</th>
            <th>Ghi chú</th>
            <th>Xóa</th>
            <th>Cập nhật</th>
        </tr>
    </thead>
    <?php foreach ($ds as $dm):?>
    <tr>
        <td><?= $dm['MAGIAMGIA']?></td>
        <td><?= $dm['TENGIAMGIA']?></td>
        <td><?= $dm['NGAYBD_GG']?></td>
        <td><?= $dm['NGAYKT_GG']?></td>
        <td><?= $dm['GHICHU']?></td>
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