@extends('layouts.app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            <div class="form-group mb-3">
                                <input type="text" placeholder="OTP" id="otp" class="form-control" name="otp" required
                                    autofocus>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Verify OTP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection