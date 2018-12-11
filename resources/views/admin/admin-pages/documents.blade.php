
<p>{{ $teacher->name }} CNIC</p>
<div class="row">
<img style="height:500px;width:500px;" class="img-responsive" 
src=" {{asset("storage/$teacher->cnic_img")}}" alt="{{ $teacher->name }}" >
</div>


@foreach($ed as $education)


    <p>{{$education->title}} From {{$education->institute}} with {{$education->percentage}}%
    <div class="row">
            <img style="height:500px;width:500px;" class="img-responsive" 
            src=" {{asset("storage/$education->degree_img")}}" alt="{{ $teacher->name }}" >
            </div>

@endforeach

@foreach($exp as $experience)


    <p>{{$experience->title}} From {{$experience->company}} duration {{$experience->startdate}} to {{$experience->enddate}}
    <div class="row">
            <img style="height:500px;width:500px;" class="img-responsive" 
            src=" {{asset("storage/$experience->experience_img")}}" alt="{{ $teacher->name }}" >
            </div>

@endforeach



@foreach($cert as $certification)


    <p>{{$certification->title}} From {{$certification->institute}} Year {{$certification->year}}
    <div class="row">
            <img style="height:500px;width:500px;" class="img-responsive" 
            src=" {{asset("storage/$certification->certification_img")}}" alt="{{ $teacher->name }}" >
            </div>

@endforeach
