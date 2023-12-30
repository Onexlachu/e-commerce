<x-guest-layout>
    <x-slot name="admin">
        <section id="content_main" class="clearfix">
            <div class="container">
                <div class="row main_content"><!-- begin content -->
                    <div class="page-full col-md-12 post-5076 page type-page status-publish hentry" id="content">
                        <div class="jl_cat_mid_title">
                            <h3 class="categories-title title">My Account</h3>
                        </div>
                        <div class="content_single_page post-5076 page type-page status-publish hentry">
                            <div class="content_page_padding">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <h2>Login</h2>
                                    <form action="{{route('login')}}" class="woocommerce-form woocommerce-form-login login" method="post">

                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="username">Email&nbsp;<span class="required">*</span></label><input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username" autocomplete="email">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="password">Password&nbsp;<span class="required">*</span></label><span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                                        </p>
                                        <p class="form-row"><label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span></label>
                                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login"> Register</button>
                                        </p>
                                        <p class="woocommerce-LostPassword lost_password"><a href="#">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end content -->
    </x-slot>

</x-guest-layout>