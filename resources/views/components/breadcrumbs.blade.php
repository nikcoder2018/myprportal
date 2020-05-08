<div class="row breadcrumbs-top">
    <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            @if($page['breadcrumbs'])
                @foreach($page['breadcrumbs'] as $name=>$attr)
                <li class="breadcrumb-item @if($attr['active']) active @endif"><a href="{{$attr['url']}}">{{$name}}</a></li>
                @endforeach
            @endif
        </ol>
    </div>
</div>

<h3 class="content-header-title mb-0">{{$page['title']}}</h3>