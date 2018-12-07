
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
