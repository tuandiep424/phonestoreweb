
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-primary">Add category</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List category</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=">Edit</a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left:20px;"><?php echo $rowsSub->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=">Edit</a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <li class="page-item"><a href="index.php?controller=categories&p=" class="page-link">1</a></li>
            </ul>
        </div>
    </div>
</div>