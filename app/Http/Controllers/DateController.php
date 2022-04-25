<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DateController extends Controller
{
    public const CONST_DESS_ARRAY = [
        ["title"=>"Сфера деятельности","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
        ["title"=>"Социальная активность","body"=>"Продукты, связанные  с поддержанием социально незащищенных групп: биоразлагающаяся упаковка, помогающий пожилым продукт."],
        ["title"=>"Материальные активы","body"=>"Физическое имущество: земля, здания, машины/станки и прочее. Помогает отличаться от конкурентов."],
        ["title"=>"Марткетинг и PR","body"=>"Сильный маркетинг, коллаборации, амбасадоры бренда, лицо бренда - медийная личность и т.д."],
        ["title"=>"Награды и заслуги","body"=>"Обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д."],
        ["title"=>"Дизайн и интерьер","body"=>"Аутентичный интерьер. Обычно подходит для ресторанов и кафе, а так же сфере развлечений."],
        ["title"=>"Продукт","body"=>"Продуктовое предложение, которое выделяется на рынке. Это может быть шоколад, который не тает  в ладони."],
        ["title"=>"Ассортимент","body"=>"Выбор на все случаи жизни, или, наоборот, редкие позиции под небольшой сегмент аудитории."],
        ["title"=>"Сырье и состав","body"=>"Особые компоненты в составе. Возможно, товар на 100% органичный или с добавлением масла гуараны."],
        ["title"=>"Страна происхождения","body"=>"Ваш знак качества: произведено в Германии, пошито в Италии или designed in California."],
        ["title"=>"Технологии и инновации","body"=>"Уникальные технологии.  Например итальянская производственная линия для пекарен, высокоточное оборудование в медицине."],
        ["title"=>"Персонал","body"=>"В вашей команде крутые эксперты. Они известны на рынке и за его пределами."],
    ];

    public const CONST_EMOTIONS_VALUE = [
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



         return view('index',
                     [
                         "dessArray"=>self::CONST_DESS_ARRAY,
                         "emotionsValue"=>self::CONST_EMOTIONS_VALUE
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

    public function genPDF(){
        $products = [
            ['title' => 'Product 1', 'price' => 10.99, 'quantity' => 1, 'totals' => 10.99],
            ['title' => 'Product 2', 'price' => 14.99, 'quantity' => 2, 'totals' => 29.98],
            ['title' => 'Product 3', 'price' => 500.00, 'quantity' => 1, 'totals' => 500.00],
            ['title' => 'Product 4', 'price' => 6.99, 'quantity' => 3, 'totals' => 20.97],
        ];

        $total = collect($products)->sum('totals');
        $html = view('pdf.invoice', [
            "dessArray"=>self::CONST_DESS_ARRAY,
            "emotionsValue"=>self::CONST_EMOTIONS_VALUE
        ])->render();

        $pdf = PDF::loadHTML($html);

        return $pdf->download('invoice.pdf');
    }
    public function showSession(Request $request)
    {

        dd($request->session()->all());
    }
}
