
<html>
    <head>
        @yield('title')
        <meta charset="UTF-8">
        @yield('css')      
        
        
       
    </head>
    <body>
            @include('components.header')
        
            @yield('content')



            @include('components.footer')
            
            
<script src="{{asset('assets/bootstrap/jquery.min.js')}}"></script>

            {{-- <script type="text/javascript" src="{{asset('elessi_custom/js/jquery-3.4.1.min.js')}}"></script> --}}
            @yield('js')
    </body>
</html>