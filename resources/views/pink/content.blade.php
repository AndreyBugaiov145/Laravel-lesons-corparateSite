@if($partfolios && count($partfolios)>0)
    <div id="content-home" class="content group">
        <div class="hentry group">
            <div class="section portfolio">

                <h3 class="title">{{trans('ru.latest_project')}}</h3>

                @foreach($partfolios as $k=>$partfolio)
                    @if ($k ==0)
                        <div class="hentry work group portfolio-sticky portfolio-full-description">
                            <div class="work-thumbnail">
                                <a class="thumb"><img src="{{asset(env('THEME'))}}/images/projects/{{$partfolio->img->max}}"
                                                      alt="0081" title="0081"/></a>
                                <div class="work-overlay">
                                    <h3><a href="{{route('portfolios.show',['alias'=>$partfolio->alias])}}">{!! $partfolio->title !!}</a></h3>
                                    <p class="work-overlay-categories"><img
                                                src="{{asset(env('THEME'))}}/images/categories.png" alt="Categories"/>
                                        in: <a href="category.html">{{$partfolio->filter->title}}</a></p>
                                </div>
                            </div>
                            <div class="work-description">
                                <h2><a href="{{route('portfolios.show',['alias'=>$partfolio->alias])}}">{!! $partfolio->title !!}</a></h2>
                                <p class="work-categories">in: <a
                                            href="#{{--route('portfolios.show')--}}">{{$partfolio->filter->title}}</a>
                                </p>
                                <p>{{str_limit($partfolio->text , 200) }}</p>
                                <a href="{{route('portfolios.show',['alias'=>$partfolio->alias])}}" class="read-more">|| Read more</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        @continue
                    @endif
                    @if($k == 1 )
                    <div class="portfolio-projects">
                    @endif
                    <div class="related_project {{$k == 4 ? 'related_project_last' : ''}}">
                        <div class="overlay_a related_img">
                            <div class="overlay_wrapper">
                                <img src="{{asset(env('THEME'))}}/images/projects/{{$partfolio->img->mini}}" alt="0061"
                                     title="0061"/>
                                <div class="overlay">
                                    <a class="overlay_img" href="{{asset(env('THEME'))}}/images/projects/{{$partfolio->img->path}}" rel="lightbox" title=""></a>
                                    <a class="overlay_project" href="{{route('portfolios.show',['alias'=>$partfolio->alias])}}"></a>
                                    <span class="overlay_title">{{$partfolio->title}}</span>
                                </div>
                            </div>
                        </div>
                        <h4><a href="{{route('portfolios.show',['alias'=>$partfolio->alias])}}">{{$partfolio->title}}</a></h4>
                        <p>{{str_limit($partfolio->text,100)}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- START COMMENTS -->
        <div id="comments">
        </div>
        <!-- END COMMENTS -->
    </div>
@else
    <h1>non content</h1>
@endif