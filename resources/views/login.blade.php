@extends('layout.main')

@section('title', 'Sign in to your account!')

@section('container')

<br><br><br>
<div class="container auth">
    <br>
    <h4 class="text-center">LOGIN</h4>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$errors->first()}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <form action="{{route('login')}}" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="fas fa-user"></i> </div>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="Masukan email" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="fas fa-unlock-alt"></i> </div>
                            </div>
                            <input type="password" name="password" class="form-control"
                                placeholder="Masukan Password Anda" autofocus>
                        </div>
                        <div class="ml-1 pt-3 custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                            <label class="custom-control-label" for="customCheck1">Remember Me</label>
                        </div>
                        @csrf
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button> <a href="" onclick="msgAlert()"
                        class="ml-3 text-decoration-none">Forget Your Password ?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function msgAlert() {
        alert('Please Contact Our Customer Service to Reset Your Password');
    }

</script>
