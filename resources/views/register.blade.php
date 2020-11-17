@extends('layout.main')

@section('title', 'Register now!')

@section('container')
<br><br><br>
    <div class="container">
        <h4 class="text-center">REGISTER</h4>
        @if (!$errors)
            <h4>data berhasil masuk</h4>
        @endif
        <hr>
        <form action="{{route('register')}}" method="POST">
            <div>
                <label>Username</label>
            <input type="text" name="username" class="form-control {{$errors->has('username') ? 'is-invalid' : '' }}" autofocus value="{{old('username')}}">
                @if ($errors->has('username'))
                    <div class="invalid-feedback">
                        {{$errors->first('username')}}
                    </div>
                 @endif
            </div>
            <div>
                <label>Email Address</label>
                <input type="text" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" autofocus value="{{old('email')}}">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                 @endif
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}" autofocus>
                @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{$errors->first('password')}}
                    </div>
                @endif
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : '' }}" autofocus>
                @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{$errors->first('password_confirmation')}}
                    </div>
                 @endif
            </div>
            <div class="form-group">
              <label for="">Gender</label>
              <select name="gender" class="form-control {{$errors->has('gender') ? 'is-invalid' : '' }}" id="exampleFormControlSelect1" autofocus>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              @if ($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{$errors->first('gender')}}
                    </div>
                 @endif
            </div>
            <div>
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control {{$errors->has('dob') ? 'is-invalid' : '' }}">
                @if ($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{$errors->first('dob')}}
                    </div>
                 @endif
            </div>
            <div>
                <label>Phone Number</label>
                <input type="tel" class="form-control {{$errors->has('phone') ? 'is-invalid' : '' }}" name="phone" placeholder="08**-****-****" autofocus value="{{old('phone')}}">
                @if ($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{$errors->first('phone')}}
                    </div>
                 @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
            <textarea  name="address" class="form-control {{$errors->has('address') ? 'is-invalid' : '' }}" rows="3">{{old('address')}}</textarea>
                @if ($errors->has('address'))
                    <div class="invalid-feedback">
                        {{$errors->first('address')}}
                    </div>
                 @endif
              </div>
            @csrf
            <!-- <button type="submit" class="btn btn-primary">SUBMIT</button> -->
            <br><br>
            <div class="text-center">
              <button type="submit" class="btn btn-info text-white">SUBMIT</button>
            </div>
        </form>
    </div>
    <br><br>
@endsection
