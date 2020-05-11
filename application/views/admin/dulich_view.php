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
            <th>Mã tour</th>
            <th>Mã nhóm tour</th>
            <th>Tên khách sạn</th>
            <th>Mã phượng tiện</th>
            <th>Tên tỉnh</th>
            <th>Mã nhân viên</th>
            <th>tên tour</th>
            <th>ảnh đại diện</th>
            <th>giá</th>
            <th>ngày đi</th>
            <th>số ngày</th>
            <th>số người</th>
            <th>ghi chú</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ds as $dm):?>
    <tr>
        <td><?= $dm['MATOUR']?></td>
        <td><?= $dm['MANHOMTOUR']?></td>
        <td><?= $dm['TENKHACHSAN']?></td>
        <td><?= $dm['MAPHUONGTIEN']?></td>
        <td><?= $dm['TENTINH']?></td>
        <td><?= $dm['MANHANVIEN']?></td>
        <td><?= $dm['TENTOUR']?></td>
        <td><img src="<?php echo base_url();?>asset/image/<?= $dm['HINHANHDAIDIEN']?>"></td>
        <td><?= $dm['GIA']?></td>
        <td><?= $dm['NGAYDI']?></td>
        <td><?= $dm['SONGAY']?></td>
        <td><?= $dm['SONGUOI']?></td>
        <td><?= $dm['GHICHU']?></td>
        <td>
            <button class="btn btn-danger">Xóa</button>
            <button class="btn btn-success">Cập Nhật</button>
        </td>
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