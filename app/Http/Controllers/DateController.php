<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DateController extends Controller
{
    public function render(Request $request)
    {
        $session = session();

        if(!$request->session()->has("images")) {
            $request->session()->put("images", [false, false, false, false, false, false, false, false, false]);

        }

        if(!$request->session()->has("dess")) {
            $request->session()->put("dess", [false, false, false, false, false, false, false, false, false, false, false, false]);

        }

        if(!$request->session()->has("emotions")) {
            $request->session()->put("emotions", []);

        }

        if(!$request->session()->has("step")) {
            $request->session()->put("step", 0);

        }

        $dessArray = [
            ["title"=>"Индустрия","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ["title"=>"Социальная активность","body"=>"Продукты, связанные с поддержанием социально незащищенных групп: биоразлагающаяся упаковка, помогающий пожилым продукт."],
            ["title"=>"Материальные активы","body"=>"Физическое имущество: земля, здания, машины/станки и прочее. Помогает отличаться от конкурентов, от индустрии."],
            ["title"=>"Марткетинг и PR","body"=>"Сильный маркетинг, коллаборации, амбасадоры бренда, лицо бренда - медийная личность и т.д."],
            ["title"=>"Награды и заслуги","body"=>"Обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д."],
            ["title"=>"Дизайн и интерьер","body"=>"Аутентичный интерьер. Обычно подходит для ресторанов и кафе, а так же сфере развлечений."],
            ["title"=>"Продукт","body"=>"Выделяющееся продуктовое предложение. Например вегетарианский гирос."],
            ["title"=>"Ассортимент","body"=>"Уникальный ассортимент. Например: узкий отборный ассортимент или широкий выбор под все случаи жизни."],
            ["title"=>"Сырье и состав","body"=>"Уникальный состав. Из чего  сделан товар - 100% органичный, с маслом гуарана."],
            ["title"=>"Страна проихождения","body"=>"Уникальное происхождение - сделано в Германии, пошито в Италии, дизайн из Франции."],
            ["title"=>"Технологии и инновации","body"=>"Уникальные технологии.  Например итальянская производственная линия для пекарен, высокоточное оборудование в медицине."],
            ["title"=>"Персонал","body"=>"Эксперты, звезды рынка. Например Джони Айв. Процессы по которым работают в компании, как в McDonald’s."],
            ];

        $emotionsValue = [
            "Радостный",
            "Дружелюбный",
            "Нейтральный",
            "Функциональный",
            "Надежный",
            "Уверенный",
            "Настойчивый",
            "Приземленный",
            "Доступный",
            "Консервативный",
            "Современный",
            "Формальный",
            "Элегантный",
            "Ободряющий",
            "Дерзкий",
            "Дорогой",
            "Оптимистичный",
            ];

         return view('base',
                     [
                         "dessArray"=>$dessArray,
                         "emotionsValue"=>$emotionsValue
                     ]);
    }

    public function updateSession(Request $request)
    {
        if ($request->request->has("image")) {
            $number = $request->request->get("image");

            $images = $request->session()->get("images");

            $images[$number] = !$images[$number];
            $request->session()->put("images", $images);

        }

        if ($request->request->has("des")) {
            $number = $request->request->get("des");

            $dess = $request->session()->get("dess");

            $dess[$number] = !$dess[$number];
            $request->session()->put("dess", $dess);
        }

        if ($request->request->has("step")){
            $step = $request->request->get("step");
            $request->session()->put("step", $step);
        }

        if ($request->request->has("category_label")){
            $text = $request->request->get("category_label");
            $request->session()->put("category_label", $text);
        }

        if ($request->request->has("urls")){

            $urls = $request->request->get("urls");

            if($urls)
                $request->session()->put("urls", $urls);
            else{
                $request->session()->forget("urls");
            }
        }

        if ($request->request->has("emotionsId")){

            $emotionsId = $request->request->get("emotionsId");
            $emotionsText = $request->request->get("emotionsText");

            $emotions = $request->session()->get("emotions");

            if(array_key_exists($emotionsId, $emotions)){
                unset($emotions[$emotionsId]);
            }else{
                $emotions[$emotionsId]= $emotionsText;
            }

            $request->session()->put("emotions", $emotions);
        }
    }

    public function showSession(Request $request)
    {

        dd($request->session()->all());
    }
}
