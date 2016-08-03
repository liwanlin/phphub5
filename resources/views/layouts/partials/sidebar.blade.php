<div class="col-md-3 side-bar">


  <div class="panel panel-default corner-radius">

    @if (isset($category))
      <div class="panel-heading text-center">
        <h3 class="panel-title">{{{ $category->name }}}</h3>
      </div>
    @endif

    <div class="panel-body text-center">
      <div class="btn-group">
        <a href="
          {{ isset($category) ? URL::route('topics.create', ['category_id' => $category->id]) : URL::route('topics.create') }}
          " class="btn btn-primary btn-lg">
          <i class="glyphicon glyphicon-pencil"> </i> {{ lang('New Topic') }}
        </a>
      </div>
    </div>
  </div>

@if (Route::currentRouteName() == 'topics.index')

<div class="panel panel-default corner-radius panel-hot-topics">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('Hot Topics') }}</h3>
  </div>
  <div class="panel-body">
    <ul class="list list-group ">

      @foreach ($hot_topics as $hot_topic)
        <li class="list-group-item ">
        <a href="{{ route('topics.show', $hot_topic->id) }}" class="popover-with-html" data-content="{{{ $hot_topic->title }}}">
            <img class="media-object img-thumbnail avatar avatar-small inline-block " src="{{ $hot_topic->user->present()->gravatar }}">

            {{{ $hot_topic->title }}}
        </a>
        </li>
      @endforeach

    </ul>
  </div>
</div>

@endif


  @if (isset($links) && count($links))
    <div class="panel panel-default corner-radius">
      <div class="panel-heading text-center">
        <h3 class="panel-title">{{ lang('Links') }}</h3>
      </div>
      <div class="panel-body text-center" style="padding-top: 5px;">
        @foreach ($links as $link)
            <a href="{{ $link->link }}" target="_blank" rel="nofollow" title="{{ $link->title }}" style="padding: 3px;">
                <img src="{{ $link->cover }}" style="width:150px; margin: 3px 0;">
            </a>
        @endforeach
      </div>
    </div>
  @endif

@if (isset($categoryTopics) && count($categoryTopics))
<div class="panel panel-default corner-radius">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('Same Category Topics') }}</h3>
  </div>
  <div class="panel-body">
    <ul class="list">

      @foreach ($categoryTopics as $categoryTopic)
        <li>
        <a href="{{ route('topics.show', $categoryTopic->id) }}">
          {{{ $categoryTopic->title }}}
        </a>
        </li>
      @endforeach

    </ul>
  </div>
</div>
@endif

@if (isset($randomExcellentTopics) && count($randomExcellentTopics))

<div class="panel panel-default corner-radius panel-hot-topics">
  <div class="panel-heading text-center">
    <h3 class="panel-title">{{ lang('Recommend Topics') }}</h3>
  </div>
  <div class="panel-body">
    <ul class="list list-group ">

      @foreach ($randomExcellentTopics as $randomExcellentTopic)
        <li class="list-group-item ">
        <a href="{{ route('topics.show', $randomExcellentTopic->id) }}" class="popover-with-html" data-content="{{{ $randomExcellentTopic->title }}}">
            <img class="media-object img-thumbnail avatar avatar-small inline-block " src="{{ $randomExcellentTopic->user->present()->gravatar }}">

            {{{ $randomExcellentTopic->title }}}
        </a>
        </li>
      @endforeach

    </ul>
  </div>
</div>

@endif

@if (Route::currentRouteName() == 'topics.index')

  <div class="panel panel-default corner-radius panel-active-users">
    <div class="panel-heading text-center">
      <h3 class="panel-title">{{ lang('Active Users') }}</h3>
    </div>
    <div class="panel-body">
      @include('topics.partials.active_users')
    </div>
  </div>

@endif

</div>
<div class="clearfix"></div>
