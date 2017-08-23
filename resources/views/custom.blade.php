@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Input Name</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('custom.post') }}">
                            {{ csrf_field() }}
                            <input type="text" name="name"/>
                            <button type="submit">Submit</button>

                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
