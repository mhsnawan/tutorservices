@extends('layouts.default')

@section('content')
                                 
<form class="" method="POST" action="#" >
                                        
    <div style="margintop:100px;" class="column width12">
        <div class="column width7">
            <br><br><br>
                <label><h4>Course Title</h4></label>
                <input type="text" name="coursetitle" placeholder="Course" >


                <label><h4>Availability</h4></label>
                <input class="column width5" type="time" name="availability">
                <center> <p style="margintop:10px;" class="column width2">To</p></center>
                <input class="column width5" type="time" name="availability">

                <label><h4>Rate</h4></label>
                <input  type="number" name="rate">

                <label><h4>Tution Type</h4></label>
                <input type="text" name="tutionType">

                <input type="submit" class="btn btn-primary">
            
        </div>
        
    </div>
</form>                
@endsection