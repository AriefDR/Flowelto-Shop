@extends('layout.main')

@section('title', 'Sign in to your account!')

@section('container')

<!-- <style>
    .container {
    width: 30%;
    margin-top: 9%;
    box-shadow: 0 3px 20px rgba(0,0,0,0.3);
    padding: 40px;
}

button {
    width: 49%;
}
</style> -->

<br><br><br>
    <div class="container">
        <h4 class="text-center">LOGIN</h4>
        <hr>
        <form>
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-user"></i> </div>
                </div>
                <input type="text" name="" class="form-control" placeholder="Masukan Username Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-unlock-alt"></i> </div>
                </div>
                <input type="password" name="" class="form-control" placeholder="Masukan Password Anda">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    </div>
@endsection