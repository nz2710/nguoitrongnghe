@extends('layout')
@section('content')
    {{-- @include('pages.banner') --}}
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="col-md-8 about-left">  
                    <div class="about-tre">
                        <div class="a-1">
                            @foreach($all_post as $key => $post)
                            <div class="row" style="margin:5px">
                            <a href="{{ route('bai-viet.show',['id'=>$post->id]) }}">
                            <div class="col-md-6 abt-left">
                                <img width="100%" src="{{ asset('public/uploads/'.$post->image) }}" alt="{{Str::slug($post->title)}}" />
                            </div>
                            <div class="col-md-6 abt-left">
                                <h6>{{ $post->category->title }}</h6>
                                <h3>{{ $post->title }}</h3>
                                <p>{!!$post->short_desc!!}</p>
                                <label>May 29, 2015</label>
                                <a href="{{ route('bai-viet.show',['id'=>$post->id]) }}">Read More</a>
                            </div>
                            </a>
                            </div>
                            @endforeach

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 about-right heading">

                    <div class="abt-2">
                        <h3>Bài viết mới nhất</h3>
                        @foreach($newest_post as $key => $new)
                        <a href="{{ route('bai-viet.show',['id'=>$new->id]) }}">
                            <div class="might-grid">
                                <div class="grid-might">
                                    <img src="{{ asset('public/uploads/'.$new->image) }}" class="img-responsive" alt=""> 
                                </div>
                                <div class="might-top">
                                    <h4>{{ $new->title }}</a></h4>
                                    <p>{!! $new->short_desc !!}</p> 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        @endforeach
                         
                    </div>
                    <div class="abt-2">
                        <h3>Bài viết xem nhiều</h3>
                        <ul>
                        @foreach($viewest_post as $key => $view)
                            <li><a href="{{ route('bai-viet.show',['id'=>$view->id]) }}">{{ $view->title }}</a></li>
                        @endforeach
                        </ul>   
                    </div>
                    <div class="abt-2">
                        <h3>NEWS LETTER</h3>
                        <div class="news">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>            
            </div>      
        </div>
    </div>
@endsection