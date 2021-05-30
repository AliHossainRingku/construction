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
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12">
                        <div class="row">
                            @foreach($news as $data)
                            <div class="single-item col-md-6 col-sm-12 col-12">
                                <div class="blog-box-layout4">
                                    <div class="item-img">
                                        <a href="{{url('/news/'.$data->id)}}">
                                            <img src="{{$data->news_image}}" class="img-fluid" alt="blog">
                                        </a>
                                        <div class="post-date">
                                            @if($data->created_at){{
                                                Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}<span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('F')}}</span>
                                            @else
                                                20<span>June</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">
                                            <a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a>
                                        </h3>
                                        <p class="line-of-3-texts">{{$data->news_description}}.
                                        </p>
                                        <div class="post-actions-wrapper">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="flaticon-people"></i>by
                                                        <span>admin</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="flaticon-interface"></i>15</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                         <div class="pagination">
                            <center>{{ $news->render() }}  </center>
                        </div>

                    </div>
                    <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
                        <div class="widget widget-search">
                            <h3 class="section-title title-bar-primary">Search Keywords</h3>
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="Search Here . . .">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="flaticon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="widget widget-categories">
                            <h3 class="section-title title-bar-primary">Categories</h3>
                            <ul>
                                <?php $categories = DB::table('categories')
                                    ->where('publication_status',1)
                                    ->get();
                                ?>
                                @foreach($categories as $data)
                                <li>
                                    <a href="#">{{$data->category_name}}
                                        <span>15</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-recent">
                            <h3 class="section-title title-bar-primary">Related Posts</h3>
                            <?php $categories = DB::table('news')
                                ->where('publication_status',1)
                                ->limit(4)
                                ->get();
                            ?>
                            @foreach($categories as $data)
                            <div class="media">
                                <a href="{{url('/news/'.$data->id)}}">
                                    <img src="{{asset(''.$data->news_image)}}" alt="news" class="img-fluid">
                                </a>
                                <div class="media-body space-sm">
                                    <div class="post-date">
                                        @if($data->created_at){{
                                            Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}<span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format(' F, Y')}}</span>
                                        @else
                                            20<span>June</span>
                                        @endif
                                    </div>
                                    <h4 class="post-title">
                                        <a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="widget widget-tag">
                            <h3 class="section-title title-bar-primary">Tags</h3>
                            <ul>
                                <?php $categories = DB::table('categories')
                                    ->where('publication_status',1)
                                    ->get();
                                ?>
                                @foreach($categories as $data)
                                <li>
                                    <a href="#">{{$data->category_name}}</a>
                                </li>
                                @endforeach
                            </ul>
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


                         
    