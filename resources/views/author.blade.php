@extends('layout.index')
@section('content')
<div class="content-widget">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-author m_b_2rem">
                    <div class="post-author row-flex">
                        <div class="author-img">
                            <img alt="author avatar" src="{{$author->image}}" class="avatar">
                        </div>
                        <div class="author-content">
                            <div class="top-author">
                                <h5 class="heading-font"><a href="" title="Ryan" rel="author">{{$author->authors_name}}</a></h5></div>
                            <p class="d-none d-md-block">{{$author->information}}</p>
                            <div class="content-social-author">
                                <a target="_blank" class="author-social" href="#">Facebook </a>
                                <a target="_blank" class="author-social" href="#">Twitter </a>
                                <a target="_blank" class="author-social" href="#"> Google + </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="spanborder">
                    <span>Latest Posts</span>
                </h4>
                @foreach($posts as $item)
                    <article class="row justify-content-between mb-5 mr-0">
                        <div class="col-md-9 ">
                            <div class="align-self-center">
                                <div class="capsSubtle mb-2">{{$author->authors_name}}</div>
                                <h3 class="entry-title mb-3"><a href="{{route('detail.post',['url'=>$item->url])}}">{{$item->title}}</a></h3>
                                <div class="entry-excerpt">
                                    <p>
                                        And black on meretriciously regardless well fearless irksomely as about hideous wistful bat less oh much and occasional useful rat darn jeepers far.
                                    </p>
                                </div>
                                <div class="entry-meta align-items-center">
                                    <a href="#">{{$author->authors_name}}</a> in <a href="archive.html">{{$author->year_of_birth}}</a><br>
                                    <span>{{date_format($item->created_at, 'F d')}}</span>
                                    <span class="middotDivider"></span>
                                    <span class="readingTime" title="3 min read">5 min read</span>
                                    <span class="svgIcon svgIcon--star">
                                                    <svg class="svgIcon-use" width="15" height="15">
                                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                    </svg>
                                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 bgcover" style="background-image:url(http://via.placeholder.com/800x495);"></div>
                    </article>
                @endforeach

                <hr style="margin:20px 0px; ">
                {{$posts->links()}}

{{--                <ul class="page-numbers heading">--}}
{{--                    <li><span aria-current="page" class="page-numbers current">1</span></li>--}}
{{--                    <li><a class="page-numbers" href="#">2</a></li>--}}
{{--                    <li><a class="page-numbers" href="#">3</a></li>--}}
{{--                    <li><a class="page-numbers" href="#">4</a></li>--}}
{{--                    <li><a class="page-numbers" href="#">5</a></li>--}}
{{--                    <li><a class="page-numbers" href="#">...</a></li>--}}
{{--                    <li><a class="page-numbers" href="#">98</a></li>--}}
{{--                    <li><a class="next page-numbers" href="#"><i class="icon-right-open-big"></i></a></li>--}}
{{--                </ul>--}}

            </div> <!--col-md-8-->
            <div class="col-md-4 pl-md-5 sticky-sidebar">
                @include('layout.new_post')
            </div> <!--col-md-4-->
        </div>
    </div> <!--content-widget-->
</div>
@endsection
