@extends('frontend.master')

@section('content')
<style type="text/css">
    #dt.dataTable.no-footer{
       border-bottom: unset;
     }
     #dt tbody td {
         display: block;
         border: unset;
     }
     #dt>tbody>tr>td{
       border-top: unset;
     }
   </style>
 <section id="services">
    <div class="container wow fadeIn" >
        <div class="section-header" >
        <h3 class="section-title">Informasi</h3>
        <div class="col-lg-12" >
            <ul id="services-flters">
              <li data-filter=".1, .2, .3, .4" class="filter-active">All</li>
             @foreach ($cabang as $cabang)
              <li data-filter=".{{$cabang->id}},.0">{{$cabang->name}}</li>
              @endforeach
          </ul>
         </div>
    </div>
            {{-- <div class="row">
                @foreach ($info as $info)

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card mb-3">
                        <img class="card-img-top" src="/frontend/img/portfolio/app1.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">{{$info->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

        </div> --}}
        <div class="container py-4">
            <div class="row">

              <div class="col-12">

                <table id="table_info" class="table w-100">
                  <thead>
                    <tr>
                      <th>nama</th>
                      <th>description</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
</section>
<!-- #services -->

 @endsection

 @section('content-js')

 <script type="text/javascript">

    $(document).ready(function() {
            $("#table_info thead").hide();
    var dt = $('#table_info').DataTable({
        ajax :{
        url:"{{ route('info')}}",
        type:'GET'
    },
            bInfo: false,
     pageLength: 6,
   lengthChange: false,
    deferRender: true,
     processing: true,
     language: {
          paginate: {
              previous: "<",
              next: ">"
          },
        },
        columns: [
            {
                render: function (data, type, row, meta) {
                  var html =
                  '<div class="card shadow'+row.cabang_id+'">'+
                                        '  <img src="'+row.avatar+'" class="card-img-top">'+
                                        '  <div class="card-body" style="height:320px">'+
                  '    <div class="card-text"><h1 style=" text-align: center;">'+row.name+'</h1></div>'+
                  '    <div class="card-text"><h4 style=" text-align: justify;">'+row.description.substring(1, 100)+'...  <a href="#">Readmore</a></h4></div>'+
                                        '  </div>'+
                                        '</div>';
                  return html;
                }
            },
            {
              data :"name", visible: false
            }
        ]
    });

   dt.on('draw', function(data){
    $('#table_info tbody').addClass('row');
    $('#table_info tbody tr').addClass('col-lg-4 col-md-6 col-sm-12');
   });
    });
</script>

 @endsection


