@extends('layout.main')

@section('title', 'Register now!')

@section('container')
<br><br><br>
    <div class="container">
        <h4 class="text-center">REGISTER</h4>
        <hr>
        <form>
            <div>
                <label>Username</label>
                <input type="text" name="" class="form-control">
            </div>
            <div>
                <label>Email Address</label>
                <input type="text" name="" class="form-control">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="" class="form-control">
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Gender</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div>
                <label>Date Of Birth</label>
                <input type="text" name="" class="form-control">
            </div>
            <div>
                <label>Email Address</label>
                <input type="text" name="" class="form-control">
            </div>
            <!-- <button type="submit" class="btn btn-primary">SUBMIT</button> -->
            <br><br>
            <div class="text-center">
              <button type="button" class="btn btn-info text-white">SUBMIT</button>
            </div>
        </form>
    </div>
    <br><br>
@endsection