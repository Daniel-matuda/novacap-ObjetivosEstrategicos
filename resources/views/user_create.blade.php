@extends('master')


@section('content')

  <h2>Create User</h2>

  @if (session()->has('success'))
    <x-alert key="success" :message="session()->get('success')"/>
    {{-- <p class="alert alert-success">{{ session()->get('success') }}  </p> --}}
  @elseif (session()->has('error'))
    <x-alert key="danger" :message="session()->get('error')"/>
    {{-- <p class="alert alert-error">{{ session()->get('error') }}</p> --}}
  @endif

  <form action="{{ route('user.store') }}" method="post">
  
    @csrf

    <label for="firstName">FirstName</label>
    <input type="text" class="form-control form-control-sm" name="firstName" placeholder="First Name">
    {{ $errors->first('firstName') }}
    <label for="lastName">lastName</label>
    <input type="text" class="form-control form-control-sm" name="lastName" placeholder="Last Name">
    {{ $errors->first('lastName') }}
    <label for="email">email</label>
    <input type="text" class="form-control form-control-sm" name="email" placeholder="Email">
    {{ $errors->first('email') }}
    <label for="password">password</label>
    <input type="text" class="form-control form-control-sm" name="password" placeholder="Password">
    {{ $errors->first('password') }}

    <button type="submit" class="btn btn-success btn-sm">Save</button>
  
  </form>

@endsection