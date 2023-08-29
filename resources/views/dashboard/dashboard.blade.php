@extends('layout.template')

@section('content')
<div class="container mt-5">
    <h3 class="text-start mb-4" style="font-family: 'Lato', sans-serif">Dashboard</h3>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Kamar</h6>
                    <h2 class="text-right"><i class="fa fa-bed f-left"></i><span>{{ $totalKamars }}</span></h2>
                    <p class="m-b-0">Kamar Terisi<span class="f-right">{{ $totalKamarSudahTerisi }}</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Lokasi Kos</h6>
                    <h2 class="text-right"><i class="fa fa-map-marker f-left"></i><span>{{ $totalLokasiKos }}</span></h2>
                    <p class="m-b-0">Lokasi Kos<span class="f-right">{{ $totalLokasiKos }}</span></p>
                </div>
            </div>
        </div>
        
        <!-- Add more cards here if needed -->
        
    </div>

    <!-- Graph Section -->

<script>
    // ... your Chart.js code ...
</script>
@endsection
