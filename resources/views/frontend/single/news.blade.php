@extends('frontend.home_layout')

@section('content')

	<!-- Single News Start Here -->
 <!--    <section class="blog-detail-wrap bg-light-primary100">
        <div class="container">
        	@foreach($news as $data)
			@endforeach
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="blog-detail-box">
                        <div class="blog-detail-title">
                            <div class="item-img">
                                <img src="{{asset(''.$data->news_image)}}" class="img-fluid" alt="blog">
                                <div class="post-date">
                                @if($data->created_at){{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d')}}<span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('F')}}</span>
                                @else
                                	20<span>June</span>
                                @endif
                                </div>
                            </div>
                            <div class="item-content">
                                <h2 class="item-title">
                                    {{$data->news_title}}
                                </h2>
                                <div class="post-actions-wrapper">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-people"></i>by <span>admin</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-tag"></i>by <span>Mdical, Care</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-interface"></i>15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <p> 
								<!--?php 
									$description=$data->news_description;
									$description = preg_replace ("/\r\n|\r|\n/",'<br/>',$description);
									echo $description; 
								?>  
							</p>
                        </div>
                        <div class="blog-social">
                            <h3>Share This Post:</h3>
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-square"></i>facebook</a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter-square"></i>twitter</a>
                                </li>
                                <li class="google">
                                    <a href="#"><i class="fab fa-google-plus-square"></i>google plus</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-author">
                            <div class="media media-none--xs">
                                <img src="img/blog/blog15.jpg" alt="Blog Author" class="rounded-circle media-img-auto">
                                <div class="media-body">
                                    <h4 class="author-title">About The Author</h4>
                                    <p>Eut also the leap into electronic.Eimply dummy text of the printing and type
                                        setting indusetry Lorem Ipsum has been the industry's standard.</p>
                                    <ul class="author-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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
                            <!-- ?php 
                                $departments = DB::table('departments')
                                ->where('publication_status',1)
                                ->get();

                            ?>
                            @foreach($departments as $data1)
                                <li>
                                    <a href="#department{{$data1->id}}">{{$data1->department_name}} <span>15</span></a>
                                </li>
                            @endforeach                            
                        </ul>
                    </div>
                    <div class="widget widget-recent">
                        <h3 class="section-title title-bar-primary">Related Posts</h3>
                        
                        <!--?php $random_news = DB::table('news')
                                    ->where('publication_status',1)
                                    ->inRandomOrder()
                                    ->limit(4)
                                    ->get();
                        ?>
                        @foreach($random_news as $data)
                        <div class="media">
                            <a href="{{url('news/'.$data->id)}}">
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
                                    <a href="#">{{$data->news_title}}...</a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="widget widget-tag">
                        <h3 class="section-title title-bar-primary">Tags</h3>
                        <ul>
                            <li>
                                <a href="#">Dental</a>
                            </li>
                            <li>
                                <a href="#">Eye Care</a>
                            </li>
                            <li>
                                <a href="#">Labrotary</a>
                            </li>
                            <li>
                                <a href="#">Care</a>
                            </li>
                            <li>
                                <a href="#">Health</a>
                            </li>
                            <li>
                                <a href="#">Modern Clinic</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Doctors End Here -->

    <style type="text/css">
		.template-main-menu a{
		        color: black !important;
		    }
	</style>

@endsection