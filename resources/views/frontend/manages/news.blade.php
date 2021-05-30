@extends('frontend.home_layout')

@section('content')

    <!-- Inne Page Banner Area Start Here -->
        <section class="pagehead bg-1">
            <div class="container">
                <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->

<!-- Blog Grid Area Start Here -->
        <section class="blog-wrap-layout2 bg-light-primary100">
            <div class="container p-5 ">
                <div class="row p-5">
                    <div class="col-xl-9 col-lg-8 col-12">
                        <div class="row p-5">
                            <h1>Coming Soon....</h1>
                        </div>

                         <div class="pagination">
                            <center>  </center>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Grid Area End Here -->

@endsection


<style type="text/css">
    .line-of-3-texts {
       overflow: hidden;
       text-overflow: ellipsis;
       display: -webkit-box;
       -webkit-line-clamp: 4; /* number of lines to show */
       -webkit-box-orient: vertical;
    }


    .template-main-menu a{
        color: black !important;
    }

    .pagination {
        float: right;
    }



        
</style>


                         
    