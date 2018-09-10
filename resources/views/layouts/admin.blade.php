<html>
    @include('layouts.site.head')

    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('layouts.site.header')

            @include('layouts.site.main-menu')

            @include('layouts.site.content')

            @include('layouts.site.right-menu')

            @include('layouts.site.footer')
        </div>
        
    
        
    <script src="{{ asset('js/custom.js' )}}"></script>       
        
    
    </body>
    

</html>



