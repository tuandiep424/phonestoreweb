
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List User</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th style="width:100px;"></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=users&action=update&id=">Edit</a>&nbsp;
                        <a href="index.php?controller=users&action=delete&id=" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <li class="page-item"><a href="index.php?controller=users&p=" class="page-link">1</a></li>
            </ul>
        </div>
    </div>
</div>