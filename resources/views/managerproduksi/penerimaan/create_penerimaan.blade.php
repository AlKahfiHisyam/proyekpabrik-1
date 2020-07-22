@section('title') 
Surat Penerimaan Barang
@endsection 
@extends('managerproduksi.layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />





<style type="text/css">
    tr {
        cursor: pointer;
    }
</style>

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Surat Penerimaan Barang</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/penerimaan/history_penerimaan')}}">Penerimaan Barang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Surat Penerimaan Barang</li>
                </ol>
            </div>
        </div>
       
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
   <div class="row">
    
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title" id="date"></h5>
                </div>
                <div class="card-body" style="padding-bottom: 80px;">
                    <form method="post" action="/penerimaan/store_penerimaan" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group ml-3">
                                    <div class="form-row">
                                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                                        <label for="inputSuratJalan" class="mr-4 ml-1">Jenis Penerimaan</label>
                                    </div>
                                    
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="penerimaan_supplier" name="penerimaan" class="custom-control-input" onclick="getSupplier();" >
                                          <label class="custom-control-label" for="penerimaan_supplier">Penerimaan Supplier</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="pemindahan_bahan" name="penerimaan" class="custom-control-input" onclick="getSupplier();">
                                          <label class="custom-control-label" for="pemindahan_bahan">Pemindahan Bahan</label>
                                        </div>

                                        <input type="hidden" id="jenis_penerimaan" name="id_jenis_penerimaan" value="">
                                </div>
                               
                            </div>
                            <div class="form-group col-md-6" >
                                <div class="form-group col-md-8" id="supplier" style="display: none">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                    <label for="pilih_supplier">Supplier</label>
                                    <select id="pilih_supplier" name="id_supplier" class="form-control">
                                        <option disabled selected readonly>- Pilih Supplier -</option>
                                        @foreach($supplier as $s)
                                        <option value="{{ $s->id_supplier }}" >{{ $s->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <label for="inputSuratJalan">No. Surat Jalan</label>
                                    <input type="text" class="form-control" id="inputSuratJalan" name="id_transaksi" placeholder="Masukkan Nomor Surat Jalan">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <label for="inputKontainer">Nomor Kontainer</label>
                                    <input type="text" class="form-control" id="inputKontainer" name="nomor_kontainer" placeholder="Masukkan Nomor Kontainer">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <label for="inputPolisi">Nomor Polisi</label>
                                    <input type="text" class="form-control" id="inputPolisi" name="nomor_polisi" placeholder="Masukkan Nomor Polisi">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-archive" aria-hidden="true"></i>
                                    <label for="inputGudangSimpan">Gudang Simpan</label>
                                    <select id="inputGudangSimpan" name="id_gudang" class="form-control">
                                        <option disabled selected readonly>Pilih Salah Satu...</option>
                                        @foreach($gudang as $g)
                                        <option value="{{ $g->id_gudang }}">{{ $g->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                    <div class="form-group col-md-8">
                                        <i class="fa fa-industry" aria-hidden="true"></i>
                                        <label for="kode-bahan">ID Bahan Baku</label>
                                        <div class="input-group mb-3">
                                            <input type="text" id="kode-bahan" class="form-control" placeholder="Masukkan ID Bahan Baku" aria-label="ID Bahan Baku" aria-describedby="button-addon-group" name="id_bahan_baku">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="button-addon-group" data-toggle="modal" data-target="#modal">Pilih Bahan Baku</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-industry" aria-hidden="true"></i>
                                    <label for="nama-bahan">Nama Bahan Baku</label>
                                    <input type="text" class="form-control" id="nama-bahan" placeholder="Masukkan Nama Bahan Baku">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    <label for="inputBSJ">Berat Surat Jalan (Kg)</label>
                                    <input type="number" class="form-control" id="berat_suratjalan" name="berat_surat_jalan" placeholder="Masukkan Berat Surat Jalan">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                    <label for="inputNetto">Berat Netto/Aktual (Kg)</label>
                                    <input type="number" class="form-control" id="berat_netto" name="berat_aktual" placeholder="Masukkan Berat Netto" oninput="hitungSusut();">
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-level-down" aria-hidden="true"></i>
                                    <label for="inputPKG">Penyusutan (Kg)</label>
                                    <input type="number" class="form-control" id="penyusutan" name="berat_susut_kg" placeholder="Masukkan Penyusutan" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-md-8">
                                    <i class="fa fa-level-down" aria-hidden="true"></i>
                                    <label for="inputPersen">Penyusutan (%)</label>
                                    <input type="number" class="form-control" id="percent_penyusutan" name="berat_susut_persen" placeholder="Masukkan Penyusutan" value="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        
                        <div class="form-row">
                            <div class="widgetbar" align="center">
                                <a href="" class="btn btn-light">Simpan Sementara</a>
                            
                                <button type="submit" class="btn btn-primary"> Selesai </button> 

                                <a href="{{ url('/penerimaan/cetak_barcode') }}" class="btn btn-primary">Cetak Barcode</a>
                          
                                <a href="{{url('/penerimaan/history_penerimaan')}}" class="btn btn-primary">Tutup</a>
                            </div>                        
                        </div>
                       
                          
                                
                      
                            
                    
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->

 <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                    <h3 class="modal-title">Pilih Bahan Baku</h3>
                    </center>
                </div>
                    <div class="modal-body">
                            <table width="100%" class="table table-hover" id="table-modal">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID Bahan Baku</th>
                                        <th>Nama Bahan Baku</th>
                                        <th>Tipe Bahan Baku</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $nomor = 0;
                                    ?>
                                    @foreach($bahanbaku as $bb)
                                    <?php
                                        $nomor = $nomor+1;
                                    ?>
                                    
                                    <tr id="bhn-baku" data-kode="{{$bb->id_bahan_baku}}" data-nama="{{$bb->nama_bahan_baku}}" class="center" >
                                        <td><?php echo $nomor."."; ?></td>
                                        <td>{{$bb->id_bahan_baku}}</td>
                                        <td>{{$bb->nama_bahan_baku}}</td>
                                        <td >{{$bb->nama_tipe_bahan_baku}}</td>
                                    </tr>

                                    @endforeach

                                   

                                </tbody>
                            </table>
                       
                    </div> 
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
            </div>
        </div>
    </div>
@endsection 
@section('script')

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>

function getSupplier(){
    var penerimaan_supplier = document.getElementById("penerimaan_supplier");
    var supplier = document.getElementById("supplier");
    if (penerimaan_supplier.checked) {
        supplier.style.display =  "block";
        document.getElementById("jenis_penerimaan").value = 1;//penerimaan dari supplier

    }else{
        supplier.style.display =  "none";
        document.getElementById("jenis_penerimaan").value = 2;//penerimaan dari pemindahan bahan
    }


   
}


$(document).ready(function(){
    $('#table-modal').DataTable();
   
    $(document).on('click', '#bhn-baku', function (e) {
        document.getElementById("kode-bahan").value = $(this).attr('data-kode');
        document.getElementById("nama-bahan").value = $(this).attr('data-nama');
        $('#modal').modal('hide');
    });
   
});

  $(document).ready( function() {
    var now = new Date();
    //var month = now.toLocaleString('default', { month: 'long' }); 
    var month_name = function(dt){
                    mlist = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" ];
                    return mlist[dt.getMonth()];
                    };
    var month = month_name(now);              
    var day = now.getDate();
    if (day < 10) 
        day = "0" + day;
    var today = day + ' ' + month + ' ' + now.getFullYear() ;
    document.getElementById('date').innerHTML = today;
});


  function hitungSusut(){

    var berat_suratjalan = document.getElementById("berat_suratjalan").value;
    var berat_netto = document.getElementById("berat_netto").value;

    if (berat_suratjalan != "" && berat_netto != ""  ) {

        var s = berat_suratjalan - berat_netto;
        var susut = s.toFixed(2);
        var ps = (susut / berat_suratjalan)* 100;
        var percent_susut = ps.toFixed(2);

        document.getElementById('penyusutan').value = susut;
        document.getElementById('percent_penyusutan').value = percent_susut;

    }

    $(document).on('input', '#berat_suratjalan', function (e) {
        hitungSusut();
    });


  }
</script>


@endsection 