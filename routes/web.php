<?php

use App\Http\Controllers\DateController;
use App\Mail\LeadMail;
use App\Mail\OrderMail;
use App\Mail\BeatingMail;
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

//Route::get('/', [DateController::class, 'render']);

Route::post("update-session", [DateController::class, 'updateSession'])->name("updateSession");

Route::get("show-session", [DateController::class, 'showSession'])->name("showSession");

Route::get('pdf/download', [DateController::class, 'genPDF']);

Route::get("/send-lead", function (){
    $isFillOut = true;
    if(session("step")>1){
        try {
            //Mail::to("mr.serega20@mail.ru")->send(new LeadMail($isFillOut));//we@brand-hub.ru
            Mail::to(env('MAIL_BUSINESS_ADDRESS'))->send(new LeadMail($isFillOut));//we@brand-hub.ru
            try {
                Mail::to( session("email") )->send(new BeatingMail());
            }catch (\Exception $exception){

            }
        }catch (\Exception $exception){

        }

    }else{
        $isFillOut = false;
        try {
            //Mail::to("mr.serega20@mail.ru")->send(new LeadMail($isFillOut));//we@brand-hub.ru
            Mail::to(env('MAIL_BUSINESS_ADDRESS'))->send(new LeadMail($isFillOut));//we@brand-hub.ru
            try {
                Mail::to( session("email") )->send(new BeatingMail());
            }catch (\Exception $exception){

            }
        }catch (\Exception $exception){

        }
    }
});

Route::get("/send-order", function (){
    try {
        //Mail::to("mr.serega20@mail.ru")->send(new LeadMail($isFillOut));//we@brand-hub.ru
        Mail::to(env('MAIL_BUSINESS_ADDRESS'))->send(new OrderMail());//we@brand-hub.ru
        try {
            Mail::to( session("email") )->send(new BeatingMail());
        }catch (\Exception $exception){

        }
    }catch (\Exception $exception){

    }
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/10-servisov-dlya-samostoyatelnogo-neyminga', function () {
    return view('/blog/10-servisov-dlya-samostoyatelnogo-neyminga');
});
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
    return view('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
});
Route::get('/blog/analiz-otrasli-sobak-povodyrei-rossii', function () {
    return view('/blog/analiz-otrasli-sobak-povodyrei-rossii');
});
Route::get('/blog/brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya', function () {
    return view('/blog/brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya');
});

Route::get('/blog/brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya', function () {
    return view('/blog/brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya');
});
Route::get('/blog/brending-eto-effektivnoe-samoopredelenie-a-ne-logotip', function () {
    return view('/blog/brending-eto-effektivnoe-samoopredelenie-a-ne-logotip');
});
Route::get('/blog/brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki', function () {
    return view('/blog/brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki');
});
Route::get('/blog/brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk', function () {
    return view('/blog/brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk');
});
Route::get('/blog/brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya', function () {
    return view('/blog/brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya');
});
Route::get('/blog/brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda', function () {
    return view('/blog/brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda');
});
Route::get('/blog/chelovek-kak-brend-personalnyy-brending-v-deystvii', function () {
    return view('/blog/chelovek-kak-brend-personalnyy-brending-v-deystvii');
});
Route::get('/blog/chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki', function () {
    return view('/blog/chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki');
});
Route::get('/blog/chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki', function () {
    return view('/blog/chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki');
});
Route::get('/blog/chto-takoe-missiya-brenda-ot-teorii-k-praktike', function () {
    return view('/blog/chto-takoe-missiya-brenda-ot-teorii-k-praktike');
});
Route::get('/blog/effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda', function () {
    return view('/blog/effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda');
});
Route::get('/blog/elementy-i-nositeli-firmennogo-stilya', function () {
    return view('/blog/elementy-i-nositeli-firmennogo-stilya');
});
Route::get('/blog/etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya', function () {
    return view('/blog/etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya');
});
Route::get('/blog/etiketka-malenkaya-no-takaya-vazhnaya', function () {
    return view('/blog/etiketka-malenkaya-no-takaya-vazhnaya');
});
Route::get('/blog/firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki', function () {
    return view('/blog/firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki');
});
Route::get('/blog/kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery', function () {
    return view('/blog/kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery');
});
Route::get('/blog/kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo', function () {
    return view('/blog/kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo');
});
Route::get('/blog/kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya', function () {
    return view('/blog/kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya');
});
Route::get('/blog/kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente', function () {
    return view('/blog/kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente');
});
Route::get('/blog/klassifikatsiya-brendov-vidy-i-osobennosti', function () {
    return view('/blog/klassifikatsiya-brendov-vidy-i-osobennosti');
});
Route::get('/blog/kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat', function () {
    return view('/blog/kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat');
});
Route::get('/blog/korotko-ob-aydentike-brenda', function () {
    return view('/blog/korotko-ob-aydentike-brenda');
});
Route::get('/blog/korporativnyy-stil-pochemu-eto-vazhno', function () {
    return view('/blog/korporativnyy-stil-pochemu-eto-vazhno');
});
Route::get('/blog/logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki', function () {
    return view('/blog/logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki');
});
Route::get('/blog/logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki', function () {
    return view('/blog/logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki');
});
Route::get('/blog/neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet', function () {
    return view('/blog/neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet');
});
Route::get('/blog/osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo', function () {
    return view('/blog/osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo');
});
Route::get('/blog/platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi', function () {
    return view('/blog/platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi');
});
Route::get('/blog/pozicionirovanie-brenda-6-shagov-k-uspehu', function () {
    return view('/blog/pozicionirovanie-brenda-6-shagov-k-uspehu');
});
Route::get('/blog/prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae', function () {
    return view('/blog/prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae');
});
Route::get('/blog/razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya', function () {
    return view('/blog/razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya');
});
Route::get('/blog/razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti', function () {
    return view('/blog/razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti');
});
Route::get('/blog/razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit', function () {
    return view('/blog/razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit');
});
Route::get('/blog/razrabotka-firmennogo-stilya-etapy-sroki-stoimost', function () {
    return view('/blog/razrabotka-firmennogo-stilya-etapy-sroki-stoimost');
});
Route::get('/blog/razrabotka-koncepcii-brenda', function () {
    return view('/blog/razrabotka-koncepcii-brenda');
});
Route::get('/blog/razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya', function () {
    return view('/blog/razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya');
});
Route::get('/blog/rebrending-desyat-prichin-chtoby-izmenitsya', function () {
    return view('/blog/rebrending-desyat-prichin-chtoby-izmenitsya');
});
Route::get('/blog/rebrending-zachem-kogda-i-kak-chasto', function () {
    return view('/blog/rebrending-zachem-kogda-i-kak-chasto');
});
Route::get('/blog/sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke', function () {
    return view('/blog/sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke');
});
Route::get('/blog/sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak', function () {
    return view('/blog/sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak');
});
Route::get('/blog/stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya', function () {
    return view('/blog/stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya');
});
Route::get('/blog/territorialnyy-brending-tramplin-dlya-razvitiya-regiona', function () {
    return view('/blog/territorialnyy-brending-tramplin-dlya-razvitiya-regiona');
});
Route::get('/blog/tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit', function () {
    return view('/blog/tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit');
});
Route::get('/blog/vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo', function () {
    return view('/blog/vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo');
});
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
    return view('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
});
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
    return view('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
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
Route::get('/projects/merry-green', function () {
    return view('/projects/merry-green');
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
Route::get('/projects/super-muka', function () {
    return view('/projects/super-muka');
});
Route::get('/projects/connective-plm', function () {
    return view('/projects/connective-plm');
});
Route::get('/projects/clio-soft', function () {
    return view('/projects/clio-soft');
});
Route::get('/projects/barnaley', function () {
    return view('/projects/barnaley');
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
Route::get('/packs/brending', function () {
    return view('/packs/brending');
});

Route::get('/services/rebranding.html', function(){
    return redirect('/services/rebranding/', 301);
});

Route::get('/services/rebranding', function () {
    return view('/services/rebranding');
});


Route::get('/services/package.html', function(){
    return redirect('/services/package/', 301);
});
Route::get('/services/package', function () {
    return view('/services/package');
});


Route::get('/services/firmstyle.html', function(){
    return redirect('/services/firmstyle/', 301);
});
Route::get('/services/firmstyle', function () {
    return view('/services/firmstyle');
});


Route::get('/services/naming.html', function(){
    return redirect('/services/naming/', 301);
});
Route::get('/services/naming', function () {
    return view('/services/naming');
});


Route::get('/services/branding.html', function(){
    return redirect('/services/branding/', 301);
});
Route::get('/services/branding', function () {
    return view('/services/branding');
});


Route::get('/services/brandbook.html', function(){
    return redirect('/services/brandbook/', 301);
});
Route::get('/services/brandbook', function () {
    return view('services/brandbook');
});
