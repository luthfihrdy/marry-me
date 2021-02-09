@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="
                        https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gereja%20St.%20Yoseph%20Matraman+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="
                        https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Grand%20ballroom%20Sedayu%20City+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://maps.google.com/maps?ll=&z=17&t=m&hl=en&gl=US&mapclient=embed&daddr=Grand%20Ballroom%20Sedayu%20City">GO TO</a></div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.2117204026952!2d106.85936334431915!3d-6.2077456992064715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f47eef0edee9%3A0xa4c8d63fa4e28c1d!2sGereja%20Katolik%20Santo%20Yoseph!5e0!3m2!1sen!2sid!4v1612785710877!5m2!1sen!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
