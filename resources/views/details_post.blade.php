@extends('layout.index')
@section('content')
    <div class="container">
        <div class="entry-header">
            <div class="mb-5">
                <h1 class="entry-title m_b_2rem">
                    {{$post->title}}
                </h1>
                <div class="entry-meta align-items-center">
                    <a class="author-avatar" href="#"><img src="{{$post->author->image}}" alt=""></a>
                    <a href="{{route('author.details',['author'=>$post->author->url])}}">{{$post->author->authors_name}}</a> in <a href="{{route('author.details',['author'=>$post->author->url])}}">{{$post->author->year_of_birth}}</a><br>
                    <span>{{date_format($post->created_at, 'F d')}}</span>
                    <span class="middotDivider"></span>
                    <span class="readingTime" title="3 min read">3 min read</span>
                    <span class="svgIcon svgIcon--star">
                                    <svg class="svgIcon-use" width="15" height="15">
                                        <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                    </svg>
                                </span>
                </div>
            </div>
        </div> <!--end single header-->

        <article class="entry-wraper mb-5">
            <div class="entry-left-col">
                <div class="social-sticky">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-heart"></i></a>
                    <a href="#"><i class="icon-paper-plane"></i></a>
                </div>
            </div>
            <div class="entry-main-content dropcap">
                {{$post->content}}
            </div>
            <div class="entry-bottom">
                <div class="tags-wrap heading">
                                <span class="tags">
                                    <a href="#" rel="tag">fashion</a>
                                    <a href="#" rel="tag">lifestyle</a>
                                    <a href="#" rel="tag">news</a>
                                    <a href="#" rel="tag">style</a>
                                </span>
                </div>
            </div>
            <div class="box box-author m_b_2rem">
                <div class="post-author row-flex">
                    <div class="author-img">
                        <img alt="author avatar" src="{{asset('assets/images/author-avata-1.jpg')}}" class="avatar">
                    </div>
                    <div class="author-content">
                        <div class="top-author">
                            <h5 class="heading-font"><a href="author.html" title="Ryan" rel="author">Ryan Mark</a></h5></div>
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et semper. Aenean consectetur, est id gravida venenatis.</p>
                        <div class="content-social-author">
                            <a target="_blank" class="author-social" href="#">Facebook </a>
                            <a target="_blank" class="author-social" href="#">Twitter </a>
                            <a target="_blank" class="author-social" href="#"> Google + </a>
                        </div>
                    </div>
                </div>
            </div>
        </article> <!--entry-content-->


        <!--Begin Comment-->
        <div class="single-comment comments_wrap">
            <section id="comments">
                <div class="comments-inner clr">
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                        <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                            </p>
                            <div class="row">
                                <div class="comment-form-author col-sm-12 col-md-6">
                                    <p>
                                        <label for="author">Name*</label>
                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                                    </p>
                                </div>
                                <div class="comment-form-email col-sm-12 col-md-6">
                                    <p>
                                        <label for="email">Email*</label>
                                        <input id="email" name="email" type="email" value="" size="30" aria-required="true">
                                    </p>
                                </div>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit btn btn-success btn-block" value="Post Comment">
                            </p>
                        </form>
                    </div>
                    <!-- #respond -->
                </div>
            </section>
        </div>
        <!--End Comment-->
    </div>
@endsection
