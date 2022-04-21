@extends('app.master')

@section('konten')

<div class="content-body">

  <div class="container-fluid mt-3">


    
       @foreach($pemasukan as $p)
       <div class="row">
        <div class="col-md">
          <h4>{{ $p->kategori }}</h4>
          @foreach ($p->transaksiCount1 as $t)
            <p>Dana Pagu : {{ "Rp. ".number_format($t->total)." ,-"}}</p>
          @endforeach
        </div>
       </div>
       @endforeach
    
 </div>



</div>
<!-- #/ container -->
</div>



<script>

</script>

@endsection