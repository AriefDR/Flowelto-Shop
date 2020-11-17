@extends('layout.main')

@section('title', 'Change Password!')

@section('container')

<br><br><br>
    <div class="container">
        <h4 class="text-center text-uppercase" style="letter-spacing: 3px;">Change Password</h4>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$errors->first()}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col col-lg-8">
                    <form action="{{route('change.password')}}" method="POST">
                        <div class="form-group">
                            <label>Current Password</label>
                            <div class="input-group" >
                            <input type="password" name="oldPass" class="form-control"  autofocus>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                                <input type="password" name="newPass" class="form-control"  autofocus>
                        </div>
                        <div class="form-group">
                            <label>Confirmation New Password</label>
                                <input type="password" name="newPass_confirmation" class="form-control"  autofocus>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
