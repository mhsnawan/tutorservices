@extends('layouts.default')

@section('content')
<form class="" method="POST" action="" >
                                    
                                    <div style="margin-top:100px;" class="column width-12">
                                        <div class="column width-7">
                                            
                                                <label><h4>Course Title</h4></label>
                                                <input type="text" name="coursetitle" placeholder="Course" >

                                                <label><h4>Availability</h4></label>
                                                <input class="column width-5" type="time" name="availability">
                                               <center> <p style="margin-top:10px;" class="column width-2">To</p></center>
                                                <input class="column width-5" type="time" name="availability">

                                                <label><h4>Rate</h4></label>
                                                <input  type="number" name="rate">

                                                <label><h4>Tution Type</h4></label>
                                                <input type="text" name="tutionType">
                                            
                                        </div>
                                      
                                    </div>
</form>                                    

      @endsection