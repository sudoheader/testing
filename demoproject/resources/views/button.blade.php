@extends('layouts.master')

@section('content')

<body>
  <div class="container">
    @if (count($errors) > 0)
      <p>The following errors occurred:</p>
      <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
     </ul>
    @endif
  </div>



  <div class="container">
    <h1>Login</h1><br>
    {!! Form::open(['url' => 'users/form', 'method' => 'post']) !!}
      <div class="form-group">
        {!! Form::label('username', 'Username: ') !!} <br/>
        {!! Form::text('username', null); !!}
      </div>
      <div class="form-group">
        {!! Form::label('password', 'Password: ') !!} <br/>
        {!! Form::password('password'); !!}
      </div>
      <div class="form-group">
        {!! Form::button('Click Me!', ['class' => 'btn btn-primary', 'type' => 'submit']); !!}
      </div>
    {!! Form::close() !!}
  </div>
</body>

@endsection

