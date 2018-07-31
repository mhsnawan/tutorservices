@extends('layouts.default')

@section('content')
<!-- Accordions Style Default -->
<div class="section-block pt-0 pb-0">
    <div class="row">
        <div class="column width-4">
            <h3 class="mb-50">Default Accordions</h3>
        </div>
        <div class="column width-8">
            <div class="accordion rounded mb-50">
                <ul>
                    <li class="active">
                        <a href="#accordion-1-panel-1">Did You Know?</a>
                        <div id="accordion-1-panel-1">
                            <div class="accordion-content">
                                <p class="lead mb-20">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#accordion-1-panel-2">Additional Info</a>
                        <div id="accordion-1-panel-2">
                            <div class="accordion-content">
                                <p class="lead mb-20">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#accordion-1-panel-3">Help &amp; Support</a>
                        <div id="accordion-1-panel-3">
                            <div class="accordion-content">
                                <p class="lead mb-20">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Accordions Style Default -->

@endsection