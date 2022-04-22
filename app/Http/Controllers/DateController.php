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

        if(!$request->session()->has("type")) {
            $request->session()->put("type", "1");
        }

        if(!$request->session()->has("step-1-board")) {
            $request->session()->put("step-1-board", "1");
        }
        if(!$request->session()->has("tariff")) {
            $request->session()->put("tariff", "1");
        }

        if(!$request->session()->has("images")) {
            $elements = [];
            for ($i=0;$i<=17;$i++){
                $element = ["isSelected" => false, "emotions"=>[]];
                $elements[$i] = $element;
            }
            $request->session()->put("images", $elements);
        }

        if(!$request->session()->has("dess")) {
            $request->session()->put("dess", [false, false, false, false, false, false, false, false, false, false, false, false]);

        }

        if(!$request->session()->has("emotions")) {
            $request->session()->put("emotions", []);
        }

        if(!$request->session()->has("step")) {
            $request->session()->put("step", 1);

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
            ["title"=>"Страна проихождения","body"=>"уникальное происхождение - сделано в Германии, пошито в Италии, приехал из Франции"],
            ["title"=>"Технологии и инновации","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ["title"=>"Персонал","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ];

        $emotionsValue = [
            "Радостный",
            "Дружелюбный",
            "Нейтральный",
            "Функциональный",
            "Надежный",
            "Уверенный",
            "Настойчивый",
            "Гедонистичный",
            "Бюджетный",
            "Консервативный",
            "Современный",
            "Лаконичный",
            "Элегантный",
            "Ободряющий",
            "Дерзкий",
            "Дорогой",
            "Новаторский",
            ];

         return view('index',
                     [
                         "dessArray"=>$dessArray,
                         "emotionsValue"=>$emotionsValue
                     ]);
    }

    public function updateSession(Request $request)
    {
        if ($request->request->has("type")) {
            $type = $request->request->get("type");
            $request->session()->put("type", $type);
        }

        if ($request->request->has("image")) {
            $number = $request->request->get("image");

            $images = $request->session()->get("images");

            $images[$number]["isSelected"] = !$images[$number]["isSelected"];
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

        if ($request->request->has("moment_business")){
            $momentBusiness = $request->request->get("moment_business");
            $request->session()->put("moment_business", $momentBusiness);
        }

        if ($request->request->has("emotions_service")){
            $emotionsService = $request->request->get("emotions_service");
            $request->session()->put("emotions_service", $emotionsService);
        }

        if ($request->request->has("name")){
            $name = $request->request->get("name");
            $request->session()->put("name", $name);
        }

        if ($request->request->has("tariff")){
            $tariff = $request->request->get("tariff");
            $request->session()->put("tariff", $tariff);
        }

        if ($request->request->has("step-1-board")){
            $value = $request->request->get("step-1-board");
            $request->session()->put("step-1-board", $value);
        }

        if ($request->request->has("phone")){
            $phone = $request->request->get("phone");
            $request->session()->put("phone", $phone);
        }

        if ($request->request->has("email")){
            $email = $request->request->get("email");
            $request->session()->put("email", $email);
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
            $imageId = $request->request->get("imageId");
            $emotionsText = $request->request->get("emotionsText");


            $images = $request->session()->get("images");

            if(array_key_exists($emotionsId, $images[$imageId]["emotions"])){
                unset($images[$imageId]["emotions"][$emotionsId]);
            }else{
                $images[$imageId]["emotions"][$emotionsId]= $emotionsText;
            }

            $request->session()->put("images", $images);
        }
    }

    public function showSession(Request $request)
    {

        dd($request->session()->all());
    }
}
