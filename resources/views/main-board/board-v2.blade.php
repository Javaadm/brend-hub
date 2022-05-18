@extends("index")

@section("step-1")
    <div class="start-sect__step @if(session("step") >= 1) active @endif" id="step-1">
        <div class="start-sect__step-desc">Шаг 1</div>
        <div class="start-sect__tabs-container active" id="checks-container-1">
            <div class="start-sect__tcontent @if(session("step-1-board") == 1) active @endif" id="checks-tab-1">
                <div class="start-sect__step-title">На что может быть похож ваш бренд?</div>
                <div class="start-sect__step-text">Выбери понравившиеся кейсы - это поможет подобрать лучшую команду
                    специалистов
                </div>
                <div class="start-sect__checks start-sect__checks_color">
                    @foreach ($colorsValue as $key=>$color)
                    <label class="start-sect__color">
                        <input type="checkbox" @if(session('images-v2-color')[$loop->index]['isSelected']) checked @endif name="color-{{$loop->index+1}}">

                        <div class="start-sect__color-header">
                            <div class="start-sect__color-img" >
                                <img src="img/v2/color-{{$loop->index+1}}.jpg" alt="">
                                <div class="start-sect__check-sw">
                                    <img src="img/icons/check.svg" alt="">
                                </div>
                            </div>
                            <div class="start-sect__color-points">
                                @foreach($color as $colorValue)
                                <span class="start-sect__color-point" style="color:{{$colorValue}};"></span>
                                @endforeach
                            </div>
                        </div>
                        <div class="start-sect__color-title">{{($key)}}</div>
                    </label>
                    @endforeach
                </div>
                <div class="start-sect__pag">1 / 4</div>
                <div class="start-sect__step-next"><a class="def-btn next-checks-tab" id="step-btn-v2-1-1"
                                                      href="#checks-tab-1-2"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__tcontent @if(session("step-1-board") == 2) active @endif" id="checks-tab-1-2">
                <div class="start-sect__step-title">Какие формы свойствененны вашему бизнесу?</div>
                <div class="start-sect__step-text">Например: Dove мягкий и округлый, redbull энергичный и угловатый.
                    Какой ваш?
                </div>
                <div class="start-sect__checks">
                    @for ($i=0; $i<6;$i++)
                    <label class="start-sect__check shape">
                        <input type="checkbox" @if(session('images-v2-shape')[$i]['isSelected']) checked @endif  name="case{{$i+1}}">
                        <img class="start-sect__check-bg" src="img/v2/shape-{{$i+1}}.jpg"
                                                                 alt="">
                        <div class="start-sect__check-sw">
                            <img src="img/icons/check.svg" alt="">
                        </div>
                    </label>
                    @endfor
                </div>
                <div class="start-sect__pag">2 / 4</div>
                <div class="start-sect__step-next"><a class="def-btn next-checks-tab" id="step-btn-v2-1-2"
                                                      href="#checks-tab-1-3"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__tcontent @if(session("step-1-board") == 3) active @endif" id="checks-tab-1-3">
                <div class="start-sect__step-title">Какой визуальный стиль подходит вашему бренду?</div>
                <div class="start-sect__step-text">Выбери несколько понравившихся кейсов - это поможет подобрать лучшую
                    команду специалистов
                </div>
                <div class="start-sect__checks start-sect__checks_color">
                    @for($i=0; $i<9;$i++)
                    <div class="start-sect__check-wrapper">
                        <label class="start-sect__check">
                            <input type="checkbox" @if(session("images-v2-pattern")[$i]["isSelected"]) checked @endif name="case{{$i+1}}">
                            <img class="start-sect__check-bg" src="img/v2/pattern-{{$i+1}}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                        <div class="start-sect__check-title">{{$patternsValue[$i]}}</div>
                    </div>
                    @endfor
                </div>
                <div class="start-sect__pag">3 / 4</div>
                <div class="start-sect__step-next"><a class="def-btn next-checks-tab" id="step-btn-v2-1-3"
                                                      href="#checks-tab-1-4"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__tcontent @if(session("step-1-board") == 4) active @endif" id="checks-tab-1-4">
                <div class="start-sect__step-title">Какой шрифт больше всего отражает характер вашего бренда?</div>
                <div class="start-sect__step-text">Разные шрифты несут в себе разные идеи, настроения</div>
                <div class="start-sect__checks">
                    @for($i=0;$i<6;$i++)
                    <label class="start-sect__check font">
                        <input type="checkbox" @if(session("images-v2-font")[$i]["isSelected"]) checked @endif name="case{{$i+1}}">
                        <img class="start-sect__check-bg" src="img/v2/font-{{$i+1}}.jpg"
                                                                 alt="">
                        <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                    </label>
                    @endfor
                </div>
                <div class="start-sect__pag">4 / 4</div>
                <div class="start-sect__step-next"><a class="def-btn" id="step-btn-1-3" href="#step-2"
                                                      data-checks-container="#checks-container-1"><span>Далее</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('step-3')
    <div class="start-sect__step" id="step-3">
        <div class="start-sect__step-desc">Шаг 3</div>
        <div class="start-sect__step-title">Ассоциации и эмоции</div>
        <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на твоем пути построения бренда, поделись своими ассоциациями и эмоциями к выбранным кейсам из первого шага.</div>
        <div class="start-sect__cts start-sect__cts_not-tab">
            <div class="start-sect__ct">
                <div class="start-sect__ct-items">
                    @foreach ($colorsValue as $key=>$color)
                        @if(session('images-v2-color')[$loop->index]['isSelected'])
                            <div class="start-sect__color">
                                <div class="start-sect__color-header">
                                    <div class="start-sect__color-img"><img src="img/v2/color-{{$loop->index+1}}.jpg" alt=""></div>
                                    <div class="start-sect__color-points">
                                        @foreach($color as $colorValue)
                                            <span class="start-sect__color-point" style="color: {{$colorValue}};"></span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="start-sect__ct">
                <div class="start-sect__ct-items">
                    @foreach(session('images-v2-shape') as $shape)
                        @if($shape['isSelected'])
                    <div class="start-sect__check"><img class="start-sect__check-bg" src="img/v2/shape-{{$loop->index+1}}.jpg" alt=""></div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="start-sect__ct">
                <div class="start-sect__ct-items">
                    @foreach(session('images-v2-pattern') as $pattern)
                        @if($pattern['isSelected'])
                    <div class="start-sect__check"><img class="start-sect__check-bg" src="img/v2/pattern-{{$loop->index+1}}.jpg" alt=""></div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="start-sect__ct">
                <div class="start-sect__ct-items">
                    @foreach(session('images-v2-font') as $font)
                        @if($font['isSelected'])
                            <div class="start-sect__check"><img class="start-sect__check-bg" src="img/v2/font-{{$loop->index+1}}.jpg" alt=""></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="start-sect__tags start-sect__tags_last">
            @foreach($wordsValue as $word)
            <label class="start-sect__tag">
                <input type="checkbox" name="tag1">
                <div class="start-sect__tag-bg"></div><span>{{$word}}</span>
            </label>
            @endforeach
        </div>
        <div class="start-sect__step-next"><a class="def-btn" id="step-btn-3-3" href="#step-4"><span>Далее</span></a></div>
    </div>
@endsection
