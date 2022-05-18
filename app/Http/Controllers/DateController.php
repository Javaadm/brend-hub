<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DateController extends Controller
{
    public const CONST_DESS_ARRAY = [
        ["title"=>"Сфера деятельности","ymGoal"=>"brief-company-details-click-industry","body"=>"Это то, что помогает нам оставаться в индустрии, соответствовать ей. Оно не уникальное, а скорее это общая канва для двух."],
        ["title"=>"Социальная активность","ymGoal"=>"brief-company-details-click-socialproject","body"=>"Продукты, связанные  с поддержанием социально незащищенных групп: биоразлагающаяся упаковка, помогающий пожилым продукт."],
        ["title"=>"Материальные активы","ymGoal"=>"brief-company-details-click-assets","body"=>"Физическое имущество: земля, здания, машины/станки и прочее. Помогает отличаться от конкурентов."],
        ["title"=>"Марткетинг и PR","ymGoal"=>"brief-company-details-click-marketing","body"=>"Сильный маркетинг, коллаборации, амбасадоры бренда, лицо бренда - медийная личность и т.д."],
        ["title"=>"Награды и заслуги","ymGoal"=>"brief-company-details-click-achievements","body"=>"Обладатель наград, премий, лауреат конкурсов в своей сфере, общественное признание и т.д."],
        ["title"=>"Дизайн и интерьер","ymGoal"=>"brief-company-details-click-design","body"=>"Аутентичный интерьер. Обычно подходит для ресторанов и кафе, а так же сфере развлечений."],
        ["title"=>"Продукт","ymGoal"=>"brief-company-details-click-product","body"=>"Продуктовое предложение, которое выделяется на рынке. Это может быть шоколад, который не тает  в ладони."],
        ["title"=>"Ассортимент","ymGoal"=>"brief-company-details-click-productrange","body"=>"Выбор на все случаи жизни, или, наоборот, редкие позиции под небольшой сегмент аудитории."],
        ["title"=>"Сырье и состав","ymGoal"=>"brief-company-details-click-ingredients","body"=>"Особые компоненты в составе. Возможно, товар на 100% органичный или с добавлением масла гуараны."],
        ["title"=>"Страна происхождения","ymGoal"=>"brief-company-details-click-country","body"=>"Ваш знак качества: произведено в Германии, пошито в Италии или designed in California."],
        ["title"=>"Технологии и инновации","ymGoal"=>"brief-company-details-click-innovations","body"=>"Уникальные технологии.  Например итальянская производственная линия для пекарен, высокоточное оборудование в медицине."],
        ["title"=>"Персонал","ymGoal"=>"brief-company-details-click-people","body"=>"В вашей команде крутые эксперты. Они известны на рынке и за его пределами."],
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

    public const CONST_BOARD_V2_CARD_COLOR_VALUE = [
        "Контрастный"=>["#FBCE01","#B44100","#1D1318","#1CA4D2","#0D77A5"],
        "Винтажный"=>['#BFB7A7', '#4B473F', '#A58B6C', '#827F67', '#8A8D74'],
        "Монохромный"=>['#042F45', '#055F88', '#4A94AD', '#79ACBD', '#1A7B9E'],
        "Digital"=>['#8982C7', '#C170C6', '#5B5178', '#5051AC', '#5051AC'],
        "Чистый"=>['#D6DFE1', '#9AB4C0', '#66848E', '#858D8C', '#7C797C'],
        "Цветной"=>['#8DAE59', '#00B4C5', '#61449F', '#E40204', '#FEC300'],
        "Черно-белый"=>['#CCCCCC', '#212121', '#999999', '#727272', '#8C8C8C'],
        "Неоновый"=>['#594784', '#E94985', '#49CDA7', '#4F1838', '#B294BC'],
        "Экологичный"=>['#CBC0B8', '#3F4235', '#5F6D44', '#898863', '#606658']
    ];

    public const CONST_BOARD_V2_CARD_PATTERN_VALUE = [
        "Крафт",
        "Паттерн",
        "Этно",
        "Гламур",
        "Люкс",
        "Реализм",
        "Эко",
        "Рисунок",
        "Motion"
    ];

    public const CONST_BOARD_V2_CARD_WORDS_VALUE = [
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
        "Новаторский"
    ];

    private const YM_GOALS_FOR_PRODUCT_REFERENCES = [
        // first page (keys: 0-9)
        'brief-mood-package-click-bahroma',
        'brief-mood-package-click-lemonade',
        'brief-mood-package-click-sushi',
        'brief-mood-package-click-orangemix',
        'brief-mood-package-click-spicemode',
        'brief-mood-package-click-veggieburger',
        'brief-mood-package-click-peas',
        'brief-mood-package-click-siggis',
        'brief-mood-package-click-apetina',
        // second page (keys: 9-18)
        'brief-mood-package-click-gotham',
        'brief-mood-package-click-tetapizza',
        'brief-mood-package-click-sausages',
        'brief-mood-package-click-dovesfarm',
        'brief-mood-package-click-americanpicnic',
        'brief-mood-package-click-cereals',
        'brief-mood-package-click-smalls',
        'brief-mood-package-click-joecoffee',
        'brief-mood-package-click-tanzania',
    ];

    private const YM_GOALS_FOR_SERVICE_REFERENCES = [
        // first page (keys: 0-9)
        'brief-mood-service-click-turbo',
        'brief-mood-service-click-heringfoundation',
        'brief-mood-service-click-vivahjewels',
        'brief-mood-service-click-oloo',
        'brief-mood-service-click-mauracora',
        'brief-mood-service-click-skatra',
        'brief-mood-service-click-harone',
        'brief-mood-service-click-moon',
        'brief-mood-service-click-angelsandco',
        // second page (keys: 9-18)
        'brief-mood-service-click-olivequeen',
        'brief-mood-service-click-doglove',
        'brief-mood-service-click-devine',
        'brief-mood-service-click-lesliesmith',
        'brief-mood-service-click-childrenspublishing',
        'brief-mood-service-click-broomtail',
        'brief-mood-service-click-lildingus',
        'brief-mood-service-click-dreamer',
        'brief-mood-service-click-rachelmovits',
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

        if(!$request->session()->has("images-v2-color")) {
            $elements = [];
            for ($i=0;$i<9;$i++){
                $elements[] = ["isSelected" => false];
            }
            $request->session()->put("images-v2-color", $elements);
        }

        if(!$request->session()->has("images-v2-shape")) {
            $elements = [];
            for ($i=0;$i<6;$i++){
                $elements[] = ["isSelected" => false];
            }
            $request->session()->put("images-v2-shape", $elements);
        }

        if(!$request->session()->has("images-v2-pattern")) {
            $elements = [];
            for ($i=0;$i<9;$i++){
                $elements[] = ["isSelected" => false];
            }
            $request->session()->put("images-v2-pattern", $elements);
        }

        if(!$request->session()->has("images-v2-font")) {
            $elements = [];
            for ($i=0;$i<9;$i++){
                $elements[] = ["isSelected" => false];
            }
            $request->session()->put("images-v2-font", $elements);
        }

        if(!$request->session()->has("words-v2")) {
            $elements = [];
            for ($i=0;$i<17;$i++){
                $elements[] = ["isSelected" => false];
            }
            $request->session()->put("words-v2", $elements);
        }

        $board = "v1";


        if($request->get("board")){
            $board = $request->get("board");
            $request->session()->put("board", $board);
        }else if(!$request->session()->has("board")){
            $request->session()->put("board", $board);
        }else{
            $board = $request->session()->get("board");
        }


        return view(
            "main-board.board-v1",
            [
                "dessArray" => self::CONST_DESS_ARRAY,
                "emotionsValue" => self::CONST_EMOTIONS_VALUE,
                "colorsValue" => self::CONST_BOARD_V2_CARD_COLOR_VALUE,
                "patternsValue" => self::CONST_BOARD_V2_CARD_PATTERN_VALUE,
                "wordsValue" => self::CONST_BOARD_V2_CARD_WORDS_VALUE,
                'ymGoalsForProductReferences' => self::YM_GOALS_FOR_PRODUCT_REFERENCES,
                'ymGoalsForServiceReferences' => self::YM_GOALS_FOR_SERVICE_REFERENCES,
            ]
        );

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

        if ($request->request->has("image-v2")) {
            $number = $request->request->get("image-v2");

            $images = $request->session()->get("images-v2");

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

        if ($request->request->has('images-v2-color')){
            $number = $request->request->get("images-v2-color");
            $images = $request->session()->get("images-v2-color");
            $images[$number]["isSelected"] = !$images[$number]["isSelected"];
            $request->session()->put("images-v2-color", $images);

        }

        if ($request->request->has('images-v2-shape')){
            $number = $request->request->get("images-v2-shape");
            $images = $request->session()->get("images-v2-shape");
            $images[$number]["isSelected"] = !$images[$number]["isSelected"];
            $request->session()->put("images-v2-shape", $images);

        }

        if ($request->request->has('images-v2-pattern')){
            $number = $request->request->get("images-v2-pattern");
            $images = $request->session()->get("images-v2-pattern");
            $images[$number]["isSelected"] = !$images[$number]["isSelected"];
            $request->session()->put("images-v2-pattern", $images);

        }

        if ($request->request->has('images-v2-font')){
            $number = $request->request->get("images-v2-font");
            $images = $request->session()->get("images-v2-font");
            $images[$number]["isSelected"] = !$images[$number]["isSelected"];
            $request->session()->put("images-v2-font", $images);

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
