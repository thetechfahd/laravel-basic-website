@extends('layout')


@section('content')

<section id="blog">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="heading">
                <h2>LATEST BL<span>OG</span></h2>
                <div class="line"></div>
                <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
        <div class="row">
            @foreach ($Articles as $Article)
                
            
            <div class="col-md-12">
                <div class="col-md-4 blog-sec">
                    <div class="blog-info"> <img src="images/Blog/3.jpg" class="img-responsive" alt="">
                        <div class="data-meta">
                            <h4>Jan</h4>
                            <strong>31</strong><br>
                            2016 
                        </div>
                        <a href="#">
                        <h5>{{$Article->title}}</h5>
                        </a>
                        <ul class="blog-icon">
                            <li><i class="fa fa-pencil"></i><a href="#">
                            <h6>Bear</h6>
                            </a></li>
                            <li class="comment"><i class="fa fa-comment"></i><a href="#">
                            <h6>05</h6>
                            </a></li>
                        </ul>
                        <p>{{$Article->excerpt}}</p>
                        <a href="article/{{$Article->id}}" class="btn-blg">Read More</a> 
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
  </section>

@endsection