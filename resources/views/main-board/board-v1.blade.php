@extends("index")

@section("step-1")
    <div class="start-sect__step @if(session("step") >= 1) active @endif" id="step-1">
        <div class="start-sect__step-desc">Шаг 1</div>
        <div class="start-sect__step-title">Настроение и характер</div>
        <div class="start-sect__step-text">Отметьте понравившиеся варианты дизайна, <br>а мы подберём соответствующую команду</div>
        <div class="start-sect__tabs"><a class="start-sect__tab @if(session("type") == 1) active @endif" href="#checks-container-1" data-step-id="#step-3" data-ym-goal="brief-mood-click-tab-for-packages">Для товаров</a>
            <a class="start-sect__tab last @if(session("type") == 2) active @endif" href="#checks-container-2" data-step-id="#step-3-dop" data-ym-goal="brief-mood-click-tab-for-services">Для услуг</a></div>
        <div class="start-sect__tabs-container @if(session("type") == 1) active @endif" id="checks-container-1">
            <div class="start-sect__tcontent @if(session("step-1-board") == 1) active @endif" id="checks-tab-1">
                <div class="start-sect__checks">
                    @for ($i = 0; $i < 9; $i++)
                        <label class="start-sect__check">
                            <input type="checkbox" @if(session("images")[$i]["isSelected"]) checked @endif name2="product" name="case{{ $i+1 }}" data-ym-goal="{{ $ymGoalsForProductReferences[$i] }}"><img class="start-sect__check-bg" src="img/check-{{ $i+1 }}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                    @endfor
                </div>
                <div class="start-sect__pag">1 / 2</div>
                <div class="start-sect__step-next"><a class="def-btn next-checks-tab" id="step-btn-1-1" href="#checks-tab-1-2" data-ym-goal="brief-mood-package-click-next"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__tcontent @if(session("step-1-board") == 2) active @endif" id="checks-tab-1-2">
                <div class="start-sect__checks">
                    @for ($i = 9; $i < 18; $i++)

                        <label class="start-sect__check">
                            <input type="checkbox" @if(session("images")[$i]["isSelected"]) checked @endif name2="product" name="case{{ $i+1 }}" data-ym-goal="{{ $ymGoalsForProductReferences[$i] }}"><img class="start-sect__check-bg" src="img/check-{{ $i+1 }}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                    @endfor

                </div>
                <div class="start-sect__pag">2 / 2</div>
                <div class="start-sect__step-next"><a class="def-btn" id="step-btn-1-2" href="#step-2" data-checks-container="#checks-container-1" data-ym-goal="brief-mood-package-click-to-company-details"><span>Далее</span></a></div>
            </div>
        </div>
        <div class="start-sect__tabs-container @if(session("type") == 2) active @endif " id="checks-container-2">
            <div class="start-sect__tcontent @if(session("step-1-board") == 1) active @endif" id="checks-tab-2">
                <div class="start-sect__checks">
                    @for ($i = 0; $i < 9; $i++)

                        <label class="start-sect__check">
                            <input type="checkbox" @if(session("images")[$i]["isSelected"]) checked @endif name2="service" name="case{{ $i+1 }}" data-ym-goal="{{ $ymGoalsForServiceReferences[$i] }}"><img class="start-sect__check-bg" src="img/check-{{ $i+19 }}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                    @endfor

                </div>
                <div class="start-sect__pag">1 / 2</div>
                <div class="start-sect__step-next"><a class="def-btn next-checks-tab" id="step-btn-2-1" href="#checks-tab-2-2" data-ym-goal="brief-mood-services-click-next"><span>Далее</span></a></div>
            </div>
            <div class="start-sect__tcontent @if(session("step-1-board") == 2) active @endif" id="checks-tab-2-2">
                <div class="start-sect__checks">
                    @for ($i = 9; $i < 18; $i++)

                        <label class="start-sect__check">
                            <input type="checkbox" @if(session("images")[$i]["isSelected"]) checked @endif name2="service" name="case{{ $i+1 }}" data-ym-goal="{{ $ymGoalsForServiceReferences[$i] }}"><img class="start-sect__check-bg" src="img/check-{{ $i+19 }}.jpg" alt="">
                            <div class="start-sect__check-sw"><img src="img/icons/check.svg" alt=""></div>
                        </label>
                    @endfor

                </div>
                <div class="start-sect__pag">2 / 2</div>
                <div class="start-sect__step-next"><a class="def-btn" id="step-btn-2-2" href="#step-2" data-checks-container="#checks-container-2" data-ym-goal="brief-mood-services-click-to-company-details"><span>Далее</span></a></div>
            </div>
        </div>
    </div>
@endsection

@section("step-3")
    <div class="start-sect__step @if(session("step") >= 3 and session("type")==1) active @endif" id="step-3">
        <div class="start-sect__step-desc">Шаг 3</div>
        <div class="start-sect__step-title">Ассоциации и эмоции</div>
        <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на вашем пути построения бренда. Поделитесь своими ассоциациями и эмоциями к выбранным картинкам из первого шага.</div>
        @foreach(session("images") as $key=>$image)

            <div class="start-sect__select start-sect__select__step_3 start-sect__select__step_3__{{$key+1}} @if($image["isSelected"]) active @endif" >
                <div class="start-sect__check"><img class="start-sect__check-bg" src="img/check-{{$loop->index+1}}.jpg" alt=""></div>
                <div class="start-sect__tags">
                    @foreach($emotionsValue as $keyEmotion =>$emotionValue)
                        <label class="start-sect__tag" >
                            <input type="checkbox"  @if(array_key_exists($keyEmotion, $image["emotions"])) checked @endif name="tag{{ $loop->index+1 }}" image="{{ $key }}" data-ym-goal="brief-emotions-add-tag">
                            <div class="start-sect__tag-bg"></div><span>{{$emotionValue}}</span>
                        </label>
                    @endforeach
                </div>
            </div>

        @endforeach
        <div class="start-sect__step-next"><a class="def-btn" id="step-btn-3" href="#step-4" data-ym-goal="brief-emotions-package-click-to-checkout"><span>Далее</span></a></div>
    </div>
    <div class="start-sect__step @if(session("step") >= 3 and session("type")==2) active @endif" id="step-3-dop">
        <div class="start-sect__step-desc">Шаг 3</div>
        <div class="start-sect__step-title">Ассоциации и эмоции</div>
        <div class="start-sect__step-text start-sect__step-text_big">Это заключительный шаг на вашем пути построения бренда, поделитесь в свободной форме своими ассоциациями и эмоциями к выбранным кейсам из первого шага.</div>
        <div class="start-sect__checks start-sect__checks_items">
            @foreach(session("images") as $key=>$image)

                <div class="start-sect__check start-sect__check__step_3 start-sect__check__step_3__{{$key+1}} @if($image["isSelected"]) active @endif"><img class="start-sect__check-bg  " src="img/check-{{$key+19}}.jpg" alt=""></div>

            @endforeach

        </div>
        <div class="start-sect__emotions">
            <input class="form__input start-sect__step-moment start-sect__step-moment-2" value="{{session("emotions_service")}}" type="text" placeholder="Дорогой, лакончиный, добрый">
        </div>
        <div class="start-sect__step-next"><a class="def-btn" id="step-btn-3-2" href="#step-4" data-ym-goal="brief-emotions-services-click-to-checkout"><span>Далее</span></a></div>
    </div>
@endsection
