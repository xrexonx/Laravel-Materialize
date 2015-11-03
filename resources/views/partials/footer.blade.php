 @include('includes.footerNav')
        <script type="text/javascript" src="{!! asset('js/all.js') !!}"></script>
        <script>
            $(function(){
                $('.collapsible').collapsible({
                    accordion : false
                });
            });
        </script>
    </body>
</html>