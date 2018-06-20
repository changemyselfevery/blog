@extends('common/layouts')

@section('title')
    点滴
@stop

@section('breadSpan')
    雨打梨花深闭门，忘了青春，误了青春。赏心乐事共谁论？花下销魂，月下销魂。
@stop

@section('breadN2')
    <a href="{{ route('travels') }}" class="n2">点滴</a>
@stop

@section('leftClass')picbox @stop

@section('article')
    @if($galleries != '[]')
        <ul>
            @foreach($galleries as $gallery)
                <li>
                    <a href="{{ route("photo", $gallery->id) }}">
                        <i><img src="{{ $gallery->cover }}"></i>
                    </a>
                    <div class="picinfo">
                        <a href="{{ route("photo", $gallery->id) }}">
                            <h3>{{ $gallery->title }}</h3>
                        </a>
                        <span>{{ $gallery->summary }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p style="text-align: center">暂无数据</p>
    @endif
@stop

@section('cloud')
@stop

@section('aboutUs')
@stop

@section('sidebar')
    @if(!empty($propose))
        <div class="paihang">
            <h2 class="hometitle">站长推荐</h2>
            <ul>
                @foreach($propose as $prop)
                    <li>
                        <b><a href="{{ route("info", $prop->id) }}" target="_blank">{{ $prop->title }}</a></b>
                        <p><i><img src="{{ $prop->img }}"></i><span>{{ $prop->summary }}</span></p>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    @parent
@stop