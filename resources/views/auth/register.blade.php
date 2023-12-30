<x-guest-layout>
    <x-slot name="admin">

        <div class="row" style="margin-top: 150px; margin-left:250px">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center;">Register</h3>
                    </div><!--end card-header-->
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-end">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" />
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label text-end">email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" />
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-sm-2 col-form-label text-end">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" />
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label text-end">confirm password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" name="confirm_password">
                                        </div>
                                        <x-input-error :messages="$errors->get('confirm_password')" />
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login"> Register</button>
                        </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        </form>
    </x-slot>

</x-guest-layout>