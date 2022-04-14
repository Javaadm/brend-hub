<?php

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

Route::get('/', function () {
    return view('base');
});
    
    
Route::get('/about', function () {
        return view('about');
    });
    
Route::get('/blogs', function () {
        return view('blogs');
    });
Route::get('/blog/10-servisov-dlya-samostoyatelnogo-neyminga', function () {
        return view('10-servisov-dlya-samostoyatelnogo-neyminga');
    });
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/blog/analiz-otrasli-sobak-povodyrei-rossii', function () {
        return view('analiz-otrasli-sobak-povodyrei-rossii');
    });
Route::get('/blog/brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya', function () {
        return view('brendbuk-kompanii-sayta-goroda-meropriyatiya-12-krutyh-primerov-dlya-vashego-vdohnoveniya');
    });
    
Route::get('/blog/brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya', function () {
        return view('brend-dizayn-sushchnost-znachenie-etapy-razrabotki-vybor-ispolnitelya');
    });
Route::get('/blog/brending-eto-effektivnoe-samoopredelenie-a-ne-logotip', function () {
        return view('brending-eto-effektivnoe-samoopredelenie-a-ne-logotip');
    });
Route::get('/blog/brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki', function () {
        return view('brending-v-cifrah-kak-sprognozirovat-effektivnost-dizayna-upakovki');
    });
Route::get('/blog/brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk', function () {
        return view('brending-v-obshchestvennom-pitanii-ili-zachem-restoranu-brendbuk');
    });
Route::get('/blog/brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya', function () {
        return view('brend-neyming-samyy-polnyy-spisok-priemov-i-tehnik-razrabotki-nazvaniya');
    });
Route::get('/blog/brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda', function () {
        return view('brend-strategiya-osnovnaya-sut-vidy-tseli-i-soderzhanie-strategii-brenda');
    });
Route::get('/blog/chelovek-kak-brend-personalnyy-brending-v-deystvii', function () {
        return view('chelovek-kak-brend-personalnyy-brending-v-deystvii');
    });
Route::get('/blog/chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki', function () {
        return view('chto-takoe-brendbuk-i-zachem-on-nuzhen-opredelenie-bazovye-sostavlyayushchie-etapy-razrabotki');
    });
Route::get('/blog/chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki', function () {
        return view('chto-takoe-firmennyy-stil-i-kak-ego-sdelat-poshagovoe-rukovodstvo-po-sozdaniyu-aydentiki');
    });
Route::get('/blog/chto-takoe-missiya-brenda-ot-teorii-k-praktike', function () {
        return view('chto-takoe-missiya-brenda-ot-teorii-k-praktike');
    });
Route::get('/blog/effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda', function () {
        return view('effektivnyy-brending-osnovnye-tseli-zadachi-i-printsipy-razrabotki-brenda');
    });
Route::get('/blog/elementy-i-nositeli-firmennogo-stilya', function () {
        return view('elementy-i-nositeli-firmennogo-stilya');
    });
Route::get('/blog/etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya', function () {
        return view('etiketka-i-ee-dizayn-znachenie-trebovaniya-zadachi-etapy-sozdaniya');
    });
Route::get('/blog/etiketka-malenkaya-no-takaya-vazhnaya', function () {
        return view('etiketka-malenkaya-no-takaya-vazhnaya');
    });
Route::get('/blog/firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki', function () {
        return view('firmennyy-stil-klyuchevye-elementy-i-ikh-kharakteristiki');
    });
Route::get('/blog/kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery', function () {
        return view('kak-pridumat-nazvanie-brenda-neyming-kak-on-est-pravila-idei-primery');
    });
Route::get('/blog/kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo', function () {
        return view('kak-s-nulya-samostoyatelno-razrabotat-logotip-obzor-onlayn-servisov-dlya-sozdaniya-logo');
    });
Route::get('/blog/kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya', function () {
        return view('kak-vybrat-brendingovoe-agentstvo-i-ne-razocharovatsya');
    });
Route::get('/blog/kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente', function () {
        return view('kak-zapatentovat-nazvanie-brenda-i-logotip-podrobnaya-instruktsiya-po-registratsii-v-rospatente');
    });
Route::get('/blog/klassifikatsiya-brendov-vidy-i-osobennosti', function () {
        return view('klassifikatsiya-brendov-vidy-i-osobennosti');
    });
Route::get('/blog/kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat', function () {
        return view('kommunikacionnaya-strategiya-brenda-chto-eto-takoe-i-s-chem-ee-edyat');
    });
Route::get('/blog/korotko-ob-aydentike-brenda', function () {
        return view('korotko-ob-aydentike-brenda');
    });
Route::get('/blog/korporativnyy-stil-pochemu-eto-vazhno', function () {
        return view('korporativnyy-stil-pochemu-eto-vazhno');
    });
Route::get('/blog/logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki', function () {
        return view('logotip-i-firmennyy-stil-10-sovetov-po-samostoyatelnoy-razrabotke-korporativnoy-simvoliki');
    });
Route::get('/blog/logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki', function () {
        return view('logotip-ot-a-do-ya-vidy-funktsii-etapy-razrabotki');
    });
Route::get('/blog/neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet', function () {
        return view('neyming-kompanii-produkta-proekta-imya-kotoroe-prodaet');
    });
Route::get('/blog/osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo', function () {
        return view('osnovnye-pravila-sozdaniya-logotipa-ot-idei-do-effektivnogo-logo');
    });
Route::get('/blog/platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi', function () {
        return view('platforma-brenda-opisanie-sostavlyayushchie-tseli-i-zadachi');
    });
Route::get('/blog/pozicionirovanie-brenda-6-shagov-k-uspehu', function () {
        return view('pozicionirovanie-brenda-6-shagov-k-uspehu');
    });
Route::get('/blog/prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae', function () {
        return view('prezentatsiya-proekta-brand-hub-na-ezhegodnoy-konferentsii-russia-creates-2021-v-dubae');
    });
Route::get('/blog/razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya', function () {
        return view('razrabotka-brenda-10-mifov-kotorye-meshayut-razvivatsya');
    });
Route::get('/blog/razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti', function () {
        return view('razrabotka-brendbuka-samostoyatelno-s-nulya-v-pravilnoy-posledovatelnosti');
    });
Route::get('/blog/razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit', function () {
        return view('razrabotka-brendbuka-vse-chto-vy-khoteli-znat-no-boyalis-sprosit');
    });
Route::get('/blog/razrabotka-firmennogo-stilya-etapy-sroki-stoimost', function () {
        return view('razrabotka-firmennogo-stilya-etapy-sroki-stoimost');
    });
Route::get('/blog/razrabotka-koncepcii-brenda', function () {
        return view('razrabotka-koncepcii-brenda');
    });
Route::get('/blog/razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya', function () {
        return view('razrabotka-upakovki-zadachi-printsipy-i-etapy-sozdaniya');
    });
Route::get('/blog/rebrending-desyat-prichin-chtoby-izmenitsya', function () {
        return view('rebrending-desyat-prichin-chtoby-izmenitsya');
    });
Route::get('/blog/rebrending-zachem-kogda-i-kak-chasto', function () {
        return view('rebrending-zachem-kogda-i-kak-chasto');
    });
Route::get('/blog/sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke', function () {
        return view('sozdanie-logotipa-poshagovaya-instrukciya-po-samostoyatelnoy-razrabotke');
    });
Route::get('/blog/sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak', function () {
        return view('sozdanie-uspeshnogo-brenda-s-nulya-komu-kogda-zachem-i-kak');
    });
Route::get('/blog/stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya', function () {
        return view('stoimost-brendinga-skolko-stoit-sozdat-brend-s-nulya');
    });
Route::get('/blog/territorialnyy-brending-tramplin-dlya-razvitiya-regiona', function () {
        return view('territorialnyy-brending-tramplin-dlya-razvitiya-regiona');
    });
Route::get('/blog/tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit', function () {
        return view('tz-i-brif-na-sozdanie-firmennogo-stilya-kompanii-chto-eto-takoe-kto-gotovit-kak-zapolnit');
    });
Route::get('/blog/vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo', function () {
        return view('vidy-logotipov-i-ih-harakteristiki-kak-vybrat-luchshiy-logo');
    });
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/blog/ambassador-brenda-kto-eto-i-kakova-ego-funktsiya', function () {
        return view('ambassador-brenda-kto-eto-i-kakova-ego-funktsiya');
    });
Route::get('/projects', function () {
        return view('projects');
    });
Route::get('/projects/aqua-solution', function () {
        return view('aqua-solution');
    });
Route::get('/projects/balist', function () {
        return view('balist');
    });
Route::get('/projects/belyy-gorod', function () {
        return view('belyy-gorod');
    });
Route::get('/projects/bergen', function () {
        return view('bergen');
    });
Route::get('/projects/bumazhnyy-bum', function () {
        return view('bumazhnyy-bum');
    });
Route::get('/projects/e-l-ite', function () {
        return view('e-l-ite');
    });
Route::get('/projects/endorphin-lounge', function () {
        return view('endorphin-lounge');
    });
Route::get('/projects/fiarolla', function () {
        return view('fiarolla');
    });
Route::get('/projects/fresh-connect', function () {
        return view('fresh-connect');
    });
Route::get('/projects/hobnob', function () {
        return view('hobnob');
    });
Route::get('/projects/inlot', function () {
        return view('inlot');
    });
Route::get('/projects/iphub', function () {
        return view('iphub');
    });
Route::get('/projects/kanape-sofa', function () {
        return view('kanape-sofa');
    });
Route::get('/projects/latema', function () {
        return view('latema');
    });
Route::get('/projects/lia-lab', function () {
        return view('lia-lab');
    });
Route::get('/projects/lidiya-raymm', function () {
        return view('lidiya-raymm');
    });
Route::get('/projects/little-art', function () {
        return view('little-art');
    });
Route::get('/projects/masterskie-vilmera', function () {
        return view('masterskie-vilmera');
    });
Route::get('/projects/medych', function () {
        return view('medych');
    });
Route::get('/projects/miracool', function () {
        return view('miracool');
    });
Route::get('/projects/onellect', function () {
        return view('onellect');
    });
Route::get('/projects/pure-hearts', function () {
        return view('pure-hearts');
    });
Route::get('/projects/ration', function () {
        return view('ration');
    });
Route::get('/projects/rum-baba', function () {
        return view('rum-baba');
    });
Route::get('/projects/sleco', function () {
        return view('sleco');
    });
Route::get('/projects/starry-tale', function () {
        return view('starry-tale');
    });
Route::get('/projects/sundaze', function () {
        return view('sundaze');
    });
Route::get('/projects/to-na-eto', function () {
        return view('to-na-eto');
    });
Route::get('/projects/tuta24', function () {
        return view('tuta24');
    });
Route::get('/projects/v4', function () {
        return view('v4');
    });
Route::get('/projects/vegaburger', function () {
        return view('vegaburger');
    });
Route::get('/projects/velikaya', function () {
        return view('velikaya');
    });
Route::get('/projects/wellroom', function () {
        return view('wellroom');
    });
Route::get('/projects/zavod-lestnic-na-metallicheskom-karkase', function () {
        return view('zavod-lestnic-na-metallicheskom-karkase');
    });
Route::get('/brend-i-dizayn-upakovki', function () {
        return view('brend-i-dizayn-upakovki');
    });
Route::get('/branding', function () {
        return view('branding');
    });
Route::get('/ekspress-dizayn', function () {
        return view('ekspress-dizayn');
    });