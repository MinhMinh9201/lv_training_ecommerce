<!DOCTYPE html>
<html lang="en">

@include('product::admin.includes.manifest')

<body class="animsition">
    <div class="page-wrapper">

        @include('product::admin.includes.header-mobile')

        @include('product::admin.includes.menu-sidebar')

        <div class="page-container">
            @include('product::admin.includes.header-desktop')

            <div class="main-content">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 MintColor. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('modal')
    </div>
    
    @include('product::admin.includes.includes-js')
    @include('product::admin.includes.js-activebar')
    @yield('script')
    
</body>

</html>