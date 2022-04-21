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
            $request->session()->put("type", "product");
        }

        if(!$request->session()->has("images")) {
            $elements = [];
            for ($i=0;$i<=18;$i++){
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
            $request->session()->put("step", 0);

        }

        $dessArray = [
            ["title"=>"Сфера деятельности","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
            ["title"=>"Социальная активность","body"=>"Продукты, связанные  с поддержанием социально незащищенных групп: биоразлагающаяся упаковка, помогающий пожилым продукт."],
            ["title"=>"Материальные активы","body"=>"Физическое имущество: земля, здания, машины/станки и прочее. Помогает отличаться от конкурентов."],
            ["title"=>"Марткетинг и PR","body"=>"Сильный маркетинг, коллаборации, амбасадоры бренда, лицо бренда - медийная личность и т.д."],
            ["title"=>"Награды и заслуги","body"=>"Обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д."],
            ["title"=>"Дизайн и интерьер","body"=>"Аутентичный интерьер. Обычно подходит для ресторанов и кафе, а так же сфере развлечений."],
            ["title"=>"Продукт","body"=>"Выделяющееся продуктовое предложение. Например вегетарианский гирос."],
            ["title"=>"Ассортимент","body"=>"Выбор на все случаи жизни, или, наоборот, редкие позиции под небольшой сегмент аудитории."],
            ["title"=>"Сырье и состав","body"=>"Особые компоненты в составе. Возможно, товар на 100% органичный или с добавлением масла гуараны."],
            ["title"=>"Страна проихождения","body"=>"Ваш знак качества: произведено в Германии, пошито в Италии или designed in California."],
            ["title"=>"Технологии и инновации","body"=>"Уникальные технологии.  Например итальянская производственная линия для пекарен, высокоточное оборудование в медицине."],
            ["title"=>"Персонал","body"=>"В вашей команде крутые эксперты. Они известны на рынке и за его пределами."],
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

            $images[$number]["isSelect"] = !$images[$number];
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

        if ($request->request->has("about_business")){
            $aboutBusiness = $request->request->get("about_business");
            $request->session()->put("about_business", $aboutBusiness);
        }

        if ($request->request->has("name")){
            $name = $request->request->get("name");
            $request->session()->put("name", $name);
        }

        if ($request->request->has("phone")){
            $phone = $request->request->get("phone");
            $request->session()->put("phone", $phone);
        }

        if ($request->request->has("mail")){
            $mail = $request->request->get("mail");
            $request->session()->put("mail", $mail);
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

            $emotions = $request->session()->get("emotions");
            $images = $request->session()->get("images");

            if(array_key_exists($emotionsId, $images[$imageId]["emotions"])){
                unset($images[$imageId]["emotions"][$emotionsId]);
            }else{
                $images[$imageId]["emotions"][$emotionsId]= $emotionsText;
            }

            $request->session()->put("emotions", $emotions);
        }
    }

    public function showSession(Request $request)
    {

        dd($request->session()->all());
    }
}
