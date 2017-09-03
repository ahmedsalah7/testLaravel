    @extends('master-page')
    @section('content')


        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="content-body">

                    <form action="{{ url('posts') }} " method="POST">
                        {{ csrf_field() }}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <input type="text" name="name" placeholder="username">
                        <input type="submit" value="submit">
                    </form>

                </div>{{--.contetn-body--}}
            </div>{{-- col --}}
        </div> {{-- .row --}}


    @endsection