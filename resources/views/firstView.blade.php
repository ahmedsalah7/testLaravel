@extends('master-page')
@section('content')


    @foreach ($posts as $post)
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="content-body">

                    {{  $post->id }}
                    {{ $post->name }}

                    <form action="{{ url('posts') }}/{{$post->id}}/" method="POST">
                        {!! csrf_field() !!}

                        {{--<input type="hidden" name="_token" value="{!! csrf_token() !!}">--}}
                        <input type="hidden" name="_method" value="DELETE">

                        <input class="btn btn-danger" value="delete" type="submit">
                    </form>


                </div>{{--.contetn-body--}}
            </div>{{-- col --}}
        </div> {{-- .row --}}


    @endforeach
@endsection