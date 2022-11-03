
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:200px;">Category</th>
                    <th style="width:50px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <tr>
                    <td>
                        <img src="../assets/upload/products/" style="width:100px;">
                    </td>
                    <td></td>
                    <td>
                    </td>
                    <td style="text-align:center;">
                        <span class="fa fa-check"></span>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=">Edit</a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <li class="page-item"><a href="index.php?controller=products&p=" class="page-link"></a></li>
            </ul>
        </div>
    </div>
</div>