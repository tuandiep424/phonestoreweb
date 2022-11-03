
 <div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=news&action=create" class="btn btn-primary">Add news</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List news</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:60px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <tr>
                    <td>
                        <img src="../assets/upload/news/" style="max-width: 100px;">
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <span class="fa fa-check"></span>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=news&action=update&id=">Edit</a>&nbsp;
                        <a href="index.php?controller=news&action=delete&id=" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
            	<li class="page-item"><a href="#" class="page-link">Trang</a></li>
            		<li class="page-item"><a href="index.php?controller=news&p=" class="page-link">1</a></li>
            </ul>
        </div>
    </div>
</div>