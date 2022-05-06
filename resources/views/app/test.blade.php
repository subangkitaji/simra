@extends('app.master')

@section('konten')

<div class="content-body">
  

  <div class="row page-titles mx-0 mt-2">
    <h3 class="col p-md-0">Dashboard Monitoring Realisasi Anggaran</h3>
      <div class="col p-md-0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        </ol>
      </div>
  </div>

  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-lg">
                   <h4>JENIS ANGGARAN SESUAI JUKNIS TAHUN {{ date('Y') }}</h4> 
                  </div>
                </div>
                <div class="default-tab">
                  <ul class="nav nav-tabs mb-4" role="tablist">
                      <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#pagu">PAGU</a>
                      </li>
                      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#realisasi">Progress Realisasi</a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane fade active show" id="pagu" role="tabpanel">
                          <div class="p-t-15">
                            <div class="custom-media-object-1">
                              <div class="media border-bottom-1 p-t-15"><i class="align-self-start  "></i>
                                  <div class="media-body">
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($pemasukan as $p )
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <h5>{{ $no++ }}. {{ $p->kategori }}</h5>
                                              <p class="badge badge-primary">Dana Pagu</p>
                                          </div>
                                          <div class="col-lg-6 text-right">
                                            @foreach ($p->transaksiCount1 as $t)
                                              <h5 class="text-muted"><i class="color-danger m-r-5"></h5>
                                              <p style="color: #222f3e">{{ "Rp. ".number_format($t->total)." ,-"}} </p>
                                            @endforeach
                                          </div>
                                      </div>
                                      <hr>
                                    @endforeach
                                  </div>
                              </div>          
                          </div>
                      </div>
                      <div class="tab-pane fade" id="realisasi" role="tabpanel">
                          <div class="p-t-15">
                             
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
 </div>



</div>
<!-- #/ container -->
</div>



<script>

</script>

@endsection