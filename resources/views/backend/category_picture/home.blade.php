@extends('backend.master')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="card">
            <div class="card-header">
              <h3 class="text-center">MASTER CATEGORY PICTURE</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered " id="category_picture">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('content-js')
<script type="text/javascript">
$(document).ready(function() {
    $('#category_picture').DataTable({
        processing :true,
        serverSide :true,
        ajax :{
            url:"{{ route('backend.category.picture.home')}}",
            type:'GET'
        },
        columns:[
            {data:'id',name:'id'},
            {data:'name',name:'name'},
        ],
        order:[[0,'asc']]
    });
} );
</script>

@endsection
