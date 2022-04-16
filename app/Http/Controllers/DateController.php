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

        $dessArray = [
            ["title"=>"Индустрия","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ["title"=>"Социальная активность","body"=>"это ивенты связанные с поддержанием социально незащищенных групп: устраиваем инвалидов, благотворительствуем, сажаем деревья"],
            ["title"=>"Материальные активы","body"=>"это физическое имущество: земля, здания, машины/станки и прочее, что есть у клиента"],
            ["title"=>"Марткетинг и PR","body"=>"сильный маркетинг, есть амбасадоры бренда, лицо бренда мидийная личность и т.д."],
            ["title"=>"Награды и заслуги","body"=>"обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д."],
            ["title"=>"Дизайн и интерьер","body"=>"уникальный интерьер, аутентичный интерьер"],
            ["title"=>"Продукт","body"=>"уникальный продукт на рынке, уникальное продуктове предложение, это комплекс - Веган бургер - веганские бургеры"],
            ["title"=>"Ассортимент","body"=>"уникальный ассортимент - кулинарный шоколад для терки"],
            ["title"=>"Сырье и состав","body"=>"уникальный состав, то, из чего оно сделано - 100% натуральный, с маслом гуарана"],
            ["title"=>"Страна проихождения","body"=>"уникальное происхождение - сделано в Германии, пошито в Италии, приехал из Франции "],
            ["title"=>"Технологии и инновации","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ["title"=>"Персонал","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ];

        $emotionsValue = [
            "Лаконичность",
            "Крафт",
            "Любовь",
            "Абстракция",
            "Традиционный",
            "Минимализм",
            "Консервативность",
            "Современность",
            "Яркость",
            "Прямолинейность",
            "Загадочность",
            "Теплый",
            "Холодный",
            "Добро",
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
