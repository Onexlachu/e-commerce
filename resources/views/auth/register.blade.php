<x-guest-layout>
    <x-slot name="dynamic">

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Form Elements</h4>
                            </div>
                            <!--end page-title-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Register</h4>

                                </div><!--end card-header-->

                                <form action="{{route('register')}}" method="POST">
                                    @csrf

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-sm-6 col-form-label text-end">Name</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="text" name="name" placeholder="nelson">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-email-input" class="col-sm-6 col-form-label text-end">Email</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-tel-input" class="col-sm-6 col-form-label text-end">Password</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="password" name="password">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="example-password-input" class="col-sm-6 col-form-label text-end">Password Confirm</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="password" name="password_confirmation">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="col-sm-12">
                                        <button type="submit" class="form-control" name="login">Register</button>



                                    </div>
                                </form>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->











                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->

                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->

            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

    </x-slot>

</x-guest-layout>