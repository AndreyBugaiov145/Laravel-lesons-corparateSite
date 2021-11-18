<li class="comment even " id="li-comment-{{$id}}">
    <div class="comment-container" id="comment-{{$id}}">
        <div class="comment-author vcard">
            <img alt="" src="https://www.gravatar.com/avatar/{{$hash}}?d=mm&s=75" class="avatar" height="75" width="75"/>
            <cite class="fn">{{$name}}</cite>
        </div>
        <!-- .comment-author .vcard -->
        <div class="comment-meta commentmetadata">
            <div class="intro">
                <div class="commentDate">
                    <a href="#">
                        {{is_object($created_at)?$created_at->format('F d,Y \a\t H:i') : '' }}</a>
                </div>
                <div class="commentNumber">#&nbsp;</div>
            </div>
            <div class="comment-body">
                {{$text}}
            </div>
            <div class="reply group">
                <a class="comment-reply-link" href="#respond"
                   onclick="return addComment.moveForm(&quot;comment-{{$id}}&quot;, &quot;{{$id}}&quot;, &quot;respond&quot;, &quot;{{$article_id}}&quot;)">Reply</a>
            </div>
            <!-- .reply -->
        </div>
        <!-- .comment-meta .commentmetadata -->

    </div>
    <!-- #comment-##  -->
</li>