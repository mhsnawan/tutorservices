<!-- Search Modal End -->
<div id="search-modal" class="hide">
    <div class="row">
        <div class="column width-12 center">
            <div class="search-form-container site-search">
                {{--  <form action="#" method="get" novalidate>
                    <div class="row">
                        <div class="column width-12">
                            <div class="field-wrapper">
                                <input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
                                <span class="border"></span>
                            </div>
                        </div>
                    </div>
                </form>  --}}
                <form action="./searchresult" method="post">
                    {{csrf_field()}}
                    <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="search">
                            <span class="input-group-button">
                                <button  type="submit" class="btn btn-primary" >search
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                    </div>
     
     
                </form>
                <div class="form-response"></div>
            </div>
            <a href="#" class="tml-aux-exit">Close</a>
        </div>
    </div>
</div>