@extends('layouts.app')

@section('content')
<div class="col">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col-4">
          <h5 class="card-title">Data Kegiatan</h5>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-end">
          <a href="{{ url('kegiatan/create/0')}} " type="button" class="btn btn-outline-primary m-b-xs "><i class="fas fa-plus-circle"></i> Buat Kegiatan</a>
        </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="table-responsive">
          <table id="datatable" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>SPT</th>
                <th>Jenis Kegiatan</th>
                <th>Bentuk Kegiatan</th>
                <th>Waktu Kegiatan</th>
                <th>Penanggung Jawab</th>
                <th>Kota</th>
                <th>Lokasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var datatable = $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('kegiatan/datatable') }}',
         columns: [
        {data: 'id', name:'id'},
        {data: 'spt', name:'spt'},
        {data: 'jenis_kegiatan', name:'jenis_kegiatan'},
        {data: 'bentuk_kegiatan', name:'bentuk_kegiatan'},
        {data: 'waktu_kegiatan', name:'waktu_kegiatan'},
        {data: 'penanggung_jawab', name:'penanggung_jawab'},
        {data: 'kota', name:'kota'},
        {data: 'lokasi', name:'lokasi'},
        {data: 'aksi', name:'aksi'},
        ],
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
          ],
      })
    function personel(id){

    }
    function deleteKeg(id,nospt){
        Swal.fire({   
                      title: "Anda Yakin?",   
                      text: "Data Kegiatan bernomor "+nospt+" akan terhapus",   
                      icon: "warning",   
                      showCancelButton: true,   
                      confirmButtonColor: "#e6b034",   
                      confirmButtonText: "Ya, Hapus Kegiatan" 
                       
                  }).then((result) => {
            if (result.value) {
                $.ajax({
                            method:'POST',
                            url:'{{ url("kegiatan/delete") }}',
                            data:{
                              id:id,
                              '_token': $('input[name=_token]').val()
                            },
                            success:function(data){
                                Swal.fire({title:"Terhapus!", text:"Kegiatan nomor "+nospt+" berhasil terhapus dari sistem", icon:"success"}
                                ).then((result) => {
                                    location.reload()
                                })
                              
                            }
                          }) 
            } 
         });
    }
</script>
@endsection