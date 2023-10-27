@extends('admin.layout.main')
@section('authLayout', true)
@section('meta-title', 'Login')


@section('content')

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <x-admin.layout.logo href="/admin/" />
                        </div>
                        <!-- /Logo -->

                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            <x-admin.forms.__text-field name="email" inputType="email" label="Email"
                                placeholder="Enter your email" class="mb-2" required />

                            <x-admin.forms.__text-field name="password" inputType="password" label="Password"
                                placeholder="Enter your password" class="mb-3" required />

                            <x-admin.forms.__switch-field name="remember_me" label="Remember Me " class="mb-3"
                                swichSize="sm" checked required />


                            <x-admin.__button type="link" href="/admin" class="w-100">Sign In</x-admin.__button>
                        </form>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
@endsection
