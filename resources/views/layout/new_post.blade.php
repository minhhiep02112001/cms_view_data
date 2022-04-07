<div class="sidebar-widget latest-tpl-4">
    <h5 class="spanborder widget-title">
        <span>New post</span>
    </h5>
    <ol>
        @foreach($list_products_new as $key=>$post)
        <li class="d-flex">
            <div class="post-count">{{$key + 1}}</div>
            <div class="post-content">
                <h5 class="entry-title mb-3"><a href="{{route('detail.post', ['url'=> $post->url])}}">{{$post->title}}</a></h5>
                <div class="entry-meta align-items-center">
                    <a href="{{route('author.details',['author'=>$post->author->url])}}">{{$post->author->authors_name}}</a>
                    in <a
                        href="{{route('author.details',['author'=>$post->author->url])}}">{{$post->author->year_of_birth}}</a><br>
                    <span>{{date_format($post->created_at, 'F d')}}</span>

                    <span class="middotDivider"></span>
                    <span class="readingTime" title="3 min read">3 min read</span>
                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path
                                                                d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                </div>
            </div>
        </li>
        @endforeach
    </ol>
</div>
