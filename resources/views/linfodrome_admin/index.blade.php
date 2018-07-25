@extends('master');
@section('content')

            <table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            
                            
                           
                                                      
                        </tr>
                    <?php endforeach; ?>
                <tbody>
            </table>
@endsection

@section('js')
<script type="text/javascript">
	 $(document).ready(function () {
        
         var table = $('#example').DataTable( {
             "aProcessing": true,
            "aServerSide": true,
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
           });
</script>
@endsection