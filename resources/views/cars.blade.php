@extends('index')
@section('Input')

<style>
    .nurburgringtrack{
        padding: 125px 140px;
    }
</style>

<div class="track">
<table class="table">
    <tbody>

        <div class="nurburgringtrack">

            <div class="container-fluid text-center">
                <div class="row">
                    @foreach ($nurburgringtrack as $cars)
                        <div class="col">
                            <div class="card" style="width: 18rem; border : 1px solid;">
                                <img src={{ $cars->Img_Url }} class="card-img-top" alt="biru">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $cars->Name }};</h5>
                                    <p class="card-text">
                                        <li>{{ $cars->Horsepower }}</li>
                                        <li>{{ $cars->Lap_Time }}</li>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </tbody>
  </table>
</div>

@endsection
