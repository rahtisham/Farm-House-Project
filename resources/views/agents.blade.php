@extends('layouts.frontend')

@section('content')

    <!-- ALL SECTION INCLOSED TO THE WRAPPER -->
    <div class="wrapper">
        <!-- BEGIN LOADING -->
        <div id="loader" class="loader">
            <div class="implode">
                <div class="implode-in">
                    <div id="cover" class="acting">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div> <!-- /.implode -->
        </div> <!-- /#loader -->
        <!-- END LOADING -->

        <!-- HEADER AREA START -->
        <x-header />
        <!-- /HEADER AREA END -->

            <h1>This is About PAge</h1>

        <!-- FOOTER AREA START -->
        <x-footer />
        <!-- /FOOTER AREA END -->
    </div> <!-- /.wrapper -->
    <!-- ALL SECTION INCLOSED TO THE WRAPPER -->

@endsection
