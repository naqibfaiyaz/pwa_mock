@extends('layouts.app')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        @include('layouts/sidebar')

        <div id="page-wrapper" class="content-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
@stop

