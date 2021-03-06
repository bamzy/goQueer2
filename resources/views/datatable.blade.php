<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - Implementing datatables tutorial using yajra package</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container">
    <table id="users" class="table table-hover table-condensed" style="width:100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Post Title</th>
            <th>Category</th>
            <th>Tag</th>
        </tr>
        </thead>
    </table>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#users').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('datatable.getposts') }}",
            "columns": [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'tag', name: 'tag'}
            ]
        });
    });
</script>
</body>
</html>