<?php

use App\Http\Controllers\DateController;
use App\Mail\LeadMail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DateController::class, 'render']);

Route::post("update-session", [DateController::class, 'updateSession'])->name("updateSession");

Route::get("show-session", [DateController::class, 'showSession'])->name("showSession");

Route::get('pdf/download', [DateController::class, 'genPDF']);

Route::get("/send-lead", function (){
    $isFillOut = true;
    if(session("step")>1){
        //Mail::to("mr.serega20@mail.ru")->send(new LeadMail($isFillOut));//we@brand-hub.ru
        Mail::to("dk.public.use@gmail.com")->send(new LeadMail($isFillOut));//we@brand-hub.ru
    }else{
        $isFillOut = false;
        //Mail::to("mr.serega20@mail.ru")->send(new LeadMail($isFillOut));//we@brand-hub.ru
        Mail::to("dk.public.use@gmail.com")->send(new LeadMail($isFillOut));//we@brand-hub.ru
    }
});

Route::get("/send-order", function (){
    //Mail::to("mr.serega20@mail.ru")->send(new OrderMail());//we@brand-hub.ru
    Mail::to("dk.public.use@gmail.com")->send(new OrderMail());//we@brand-hub.ru
});

Route::get('/about', function () {
        return view('about');
    });

Route::get('/blogs', function () {
        return view('blogs');
    });
Route::get('/blogs/10-servisov-dlya-samostoyatelnogo-neyminga', function () {
        return view('/blogs/10-servisov-dlya-samostoyatelnogo-neyminga');
    });
Route::get('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/blogs/analiz-otrasli-sobak-povodyrei-rossii', function () {
        return view('/blogs/analiz-otrasli-sobak-povodyrei-rossii');
    });
Route::get('/blogs/brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya', function () {
        return view('/blogs/brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya');
    });

Route::get('/blogs/brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya', function () {
        return view('/blogs/brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya');
    });
Route::get('/blogs/brending-eto-effektivnoe-samoopredelenie-a-ne-logotip', function () {
        return view('/blogs/brending-eto-effektivnoe-samoopredelenie-a-ne-logotip');
    });
Route::get('/blogs/brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki', function () {
        return view('/blogs/brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki');
    });
Route::get('/blogs/brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk', function () {
        return view('/blogs/brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk');
    });
Route::get('/blogs/brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya', function () {
        return view('/blogs/brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya');
    });
Route::get('/blogs/brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda', function () {
        return view('/blogs/brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda');
    });
Route::get('/blogs/chelovek-kak-brend-personalnyy-brending-v-deystvii', function () {
        return view('/blogs/chelovek-kak-brend-personalnyy-brending-v-deystvii');
    });
Route::get('/blogs/chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki', function () {
        return view('/blogs/chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki');
    });
Route::get('/blogs/chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki', function () {
        return view('/blogs/chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki');
    });
Route::get('/blogs/chto-takoe-missiya-brenda-ot-teorii-k-praktike', function () {
        return view('/blogs/chto-takoe-missiya-brenda-ot-teorii-k-praktike');
    });
Route::get('/blogs/effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda', function () {
        return view('/blogs/effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda');
    });
Route::get('/blogs/elementy-i-nositeli-firmennogo-stilya', function () {
        return view('/blogs/elementy-i-nositeli-firmennogo-stilya');
    });
Route::get('/blogs/etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya', function () {
        return view('/blogs/etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya');
    });
Route::get('/blogs/etiketka-malenkaya-no-takaya-vazhnaya', function () {
        return view('/blogs/etiketka-malenkaya-no-takaya-vazhnaya');
    });
Route::get('/blogs/firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki', function () {
        return view('/blogs/firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki');
    });
Route::get('/blogs/kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery', function () {
        return view('/blogs/kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery');
    });
Route::get('/blogs/kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo', function () {
        return view('/blogs/kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo');
    });
Route::get('/blogs/kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya', function () {
        return view('/blogs/kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya');
    });
Route::get('/blogs/kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente', function () {
        return view('/blogs/kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente');
    });
Route::get('/blogs/klassifikatsiya-brendov-vidy-i-osobennosti', function () {
        return view('/blogs/klassifikatsiya-brendov-vidy-i-osobennosti');
    });
Route::get('/blogs/kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat', function () {
        return view('/blogs/kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat');
    });
Route::get('/blogs/korotko-ob-aydentike-brenda', function () {
        return view('/blogs/korotko-ob-aydentike-brenda');
    });
Route::get('/blogs/korporativnyy-stil-pochemu-eto-vazhno', function () {
        return view('/blogs/korporativnyy-stil-pochemu-eto-vazhno');
    });
Route::get('/blogs/logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki', function () {
        return view('/blogs/logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki');
    });
Route::get('/blogs/logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki', function () {
        return view('/blogs/logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki');
    });
Route::get('/blogs/neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet', function () {
        return view('/blogs/neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet');
    });
Route::get('/blogs/osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo', function () {
        return view('/blogs/osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo');
    });
Route::get('/blogs/platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi', function () {
        return view('/blogs/platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi');
    });
Route::get('/blogs/pozicionirovanie-brenda-6-shagov-k-uspehu', function () {
        return view('/blogs/pozicionirovanie-brenda-6-shagov-k-uspehu');
    });
Route::get('/blogs/prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae', function () {
        return view('/blogs/prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae');
    });
Route::get('/blogs/razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya', function () {
        return view('/blogs/razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya');
    });
Route::get('/blogs/razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti', function () {
        return view('/blogs/razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti');
    });
Route::get('/blogs/razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit', function () {
        return view('/blogs/razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit');
    });
Route::get('/blogs/razrabotka-firmennogo-stilya-etapy-sroki-stoimost', function () {
        return view('/blogs/razrabotka-firmennogo-stilya-etapy-sroki-stoimost');
    });
Route::get('/blogs/razrabotka-koncepcii-brenda', function () {
        return view('/blogs/razrabotka-koncepcii-brenda');
    });
Route::get('/blogs/razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya', function () {
        return view('/blogs/razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya');
    });
Route::get('/blogs/rebrending-desyat-prichin-chtoby-izmenitsya', function () {
        return view('/blogs/rebrending-desyat-prichin-chtoby-izmenitsya');
    });
Route::get('/blogs/rebrending-zachem-kogda-i-kak-chasto', function () {
        return view('/blogs/rebrending-zachem-kogda-i-kak-chasto');
    });
Route::get('/blogs/sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke', function () {
        return view('/blogs/sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke');
    });
Route::get('/blogs/sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak', function () {
        return view('/blogs/sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak');
    });
Route::get('/blogs/stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya', function () {
        return view('/blogs/stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya');
    });
Route::get('/blogs/territorialnyy-brending-tramplin-dlya-razvitiya-regiona', function () {
        return view('/blogs/territorialnyy-brending-tramplin-dlya-razvitiya-regiona');
    });
Route::get('/blogs/tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit', function () {
        return view('/blogs/tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit');
    });
Route::get('/blogs/vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo', function () {
        return view('/blogs/vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo');
    });
Route::get('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('/blogs/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/projects', function () {
        return view('projects');
    });
Route::get('/projects/aqua-solution', function () {
        return view('/projects/aqua-solution');
    });
Route::get('/projects/balist', function () {
        return view('/projects/balist');
    });
Route::get('/projects/belyy-gorod', function () {
        return view('/projects/belyy-gorod');
    });
Route::get('/projects/bergen', function () {
        return view('/projects/bergen');
    });
Route::get('/projects/bumazhnyy-bum', function () {
        return view('/projects/bumazhnyy-bum');
    });
Route::get('/projects/e-l-ite', function () {
        return view('/projects/e-l-ite');
    });
Route::get('/projects/endorphin-lounge', function () {
        return view('/projects/endorphin-lounge');
    });
Route::get('/projects/fiarolla', function () {
        return view('/projects/fiarolla');
    });
Route::get('/projects/fresh-connect', function () {
        return view('/projects/fresh-connect');
    });
Route::get('/projects/hobnob', function () {
        return view('/projects/hobnob');
    });
Route::get('/projects/inlot', function () {
        return view('/projects/inlot');
    });
Route::get('/projects/iphub', function () {
        return view('/projects/iphub');
    });
Route::get('/projects/kanape-sofa', function () {
        return view('/projects/kanape-sofa');
    });
Route::get('/projects/latema', function () {
        return view('/projects/latema');
    });
Route::get('/projects/lia-lab', function () {
        return view('/projects/lia-lab');
    });
Route::get('/projects/lidiya-raymm', function () {
        return view('/projects/lidiya-raymm');
    });
Route::get('/projects/little-art', function () {
        return view('/projects/little-art');
    });
Route::get('/projects/masterskie-vilmera', function () {
        return view('/projects/masterskie-vilmera');
    });
Route::get('/projects/medych', function () {
        return view('/projects/medych');
    });
Route::get('/projects/miracool', function () {
        return view('/projects/miracool');
    });
Route::get('/projects/onellect', function () {
        return view('/projects/onellect');
    });
Route::get('/projects/pure-hearts', function () {
        return view('/projects/pure-hearts');
    });
Route::get('/projects/ration', function () {
        return view('/projects/ration');
    });
Route::get('/projects/rum-baba', function () {
        return view('/projects/rum-baba');
    });
Route::get('/projects/sleco', function () {
        return view('/projects/sleco');
    });
Route::get('/projects/starry-tale', function () {
        return view('/projects/starry-tale');
    });
Route::get('/projects/sundaze', function () {
        return view('/projects/sundaze');
    });
Route::get('/projects/to-na-eto', function () {
        return view('/projects/to-na-eto');
    });
Route::get('/projects/tuta24', function () {
        return view('/projects/tuta24');
    });
Route::get('/projects/v4', function () {
        return view('/projects/v4');
    });
Route::get('/projects/vegaburger', function () {
        return view('/projects/vegaburger');
    });
Route::get('/projects/velikaya', function () {
        return view('/projects/velikaya');
    });
Route::get('/projects/wellroom', function () {
        return view('/projects/wellroom');
    });
Route::get('/projects/zavod-lestnic-na-metallicheskom-karkase', function () {
        return view('/projects/zavod-lestnic-na-metallicheskom-karkase');
    });
Route::get('/packs/brend-i-dizayn-upakovki', function () {
        return view('/packs/brend-i-dizayn-upakovki');
    });
Route::get('/packs/ekspress-dizayn', function () {
        return view('/packs/ekspress-dizayn');
    });
Route::get('/services/branding', function () {
        return view('/services/branding');
    });

Route::get('/services/rebranding', function () {
        return view('/services/rebranding');
    });
Route::get('/services/package', function () {
        return view('/services/package');
    });
Route::get('/services/firmstyle', function () {
        return view('/services/firmstyle');
    });
Route::get('/services/naming', function () {
        return view('/services/naming');
    });
Route::get('/services/branding', function () {
        return view('/services/branding');
    });

Route::get('/services/brandbook', function () {
        return view('services/brandbook');
    });
