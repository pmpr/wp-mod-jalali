<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616cb18b9f53d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Package\Jalali\Container; use Pmpr\Package\Jalali\Converter; use Pmpr\Package\Jalali\Setting; use Pmpr\Package\Jalali\Translator; use WP_Comment; use WP_Locale; class Common extends Container { protected ?string $locale = null; protected ?Converter $converter = null; protected ?Translator $translator = null; public function __construct() { goto kmooekeyemqgucci; skuuyysooocugyww: $this->translator = Translator::symcgieuakksimmu(); goto cmmusgkieoqyymgs; kmooekeyemqgucci: $this->converter = Converter::symcgieuakksimmu(); goto skuuyysooocugyww; cmmusgkieoqyymgs: parent::__construct(); goto mkgmaguyswskyioa; mkgmaguyswskyioa: } public function uacmswwoiqckokew() : ?Converter { return $this->converter; } public function kkkikouyuqigocai() : ?Translator { return $this->translator; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\x69\156\151\164"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\x74\137\164\x65\162\x6d", [$this, "\153\x63\153\157\x67\161\x6b\151\x79\143\161\x65\165\155\157\141"])->cecaguuoecmccuse("\147\145\164\137\x63\157\155\x6d\145\x6e\164", [$this, "\163\x65\155\155\163\x6b\165\153\141\145\171\x65\x6f\x75\165\145"])->cecaguuoecmccuse("\154\157\x63\x61\154\x65", [$this, "\x75\x71\x6b\151\171\145\x75\145\147\151\141\x63\167\x75\x71\161"], 10)->cecaguuoecmccuse("\147\145\x74\x5f\x74\x68\145\x5f\x64\x61\x74\x65", [$this, "\x6d\151\153\x61\151\x75\163\147\151\x6d\157\145\153\x71\x79\x65"], 99, 3); parent::kgquecmsgcouyaya(); } public function init() { $this->wmmkekaaacyuumsk(); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao = "\x66\x61") { goto usyckeewsgwaysam; cysgqimowcqoqqsc: return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao); goto ismeikacqqyqcmqe; usyckeewsgwaysam: if ($aamkqmkgsaqmcuao) { goto skwusmoyomgqkimm; } goto gicuuwuuuwumyooa; kakkuyeccaacewyo: skwusmoyomgqkimm: goto cysgqimowcqoqqsc; gicuuwuuuwumyooa: $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc(); goto kakkuyeccaacewyo; ismeikacqqyqcmqe: } public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\x61", $eqmcogmcemgigckm = "\331\xab") { goto casgoamcqkekgeeo; sooecucuakgkuyis: return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm); goto ywqakqkmmcoceqka; yseyyukqaowwouua: $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc(); goto qcgyggiaowuqswuw; casgoamcqkekgeeo: if ($aamkqmkgsaqmcuao) { goto qsokkkyoackoycie; } goto yseyyukqaowwouua; qcgyggiaowuqswuw: qsokkkyoackoycie: goto sooecucuakgkuyis; ywqakqkmmcoceqka: } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { goto ekakkiuuquqkccse; awwaiioyywmokwsm: if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) { goto emauuoieewwoeyqq; } goto ckwmkquuyyugigom; oqwwacmigasucsoc: if (!$iwewcwusemqaiggk) { goto koukiyqaccegmquc; } goto egkeqqgakieyimuq; ckwmkquuyyugigom: $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); goto cumeycwmuuqawwyu; uaicwcqwauosmsqm: koukiyqaccegmquc: goto gsqcoqqsioiyoykq; gsqcoqqsioiyoykq: return $iwewcwusemqaiggk; goto goaowamiyyamueiw; cumeycwmuuqawwyu: emauuoieewwoeyqq: goto uaicwcqwauosmsqm; ekakkiuuquqkccse: $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk); goto oqwwacmigasucsoc; wswikooyuaaouqgk: kwsqgqmwyyeykgum: goto awwaiioyywmokwsm; egkeqqgakieyimuq: if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) { goto kwsqgqmwyyeykgum; } goto cakuguiciaiaeukg; cakuguiciaiaeukg: $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); goto wswikooyuaaouqgk; goaowamiyyamueiw: } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { goto owisckseoogsugqq; wwswmaewcaisauei: iaomqomgiwiegoca: goto wsemeeocquawyauo; cigesysuauaiccms: $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); goto qumkwsqqocooyuoq; oqwcmgwimeisusoe: $ygykagaqyuawwiyo = ManipulateDatabase::get("\150\x6f\x75\x72"); goto acesyuieuuqwgkwm; cuseccewekgcgkyg: $usqcwoasmiiomgks = ManipulateDatabase::get("\171\x65\x61\162"); goto kgysyqkoqgwmoscq; asaowisseacciyia: $gcegymooyemmaysk = ManipulateDatabase::get("\163\x65\143\157\x6e\x64"); goto qiaaqkymeuuueoqk; kwoyiysciqumswcy: ysweqawmawicakeo: goto aaogeemgkogagkai; kgysyqkoqgwmoscq: $mwemskcucwsyycwm = ManipulateDatabase::get("\x6d\157\156\164\150\156\x75\x6d"); goto makomwwyomweyamm; gcskyqewysqaceeg: $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); goto kkewoqqowugagwoy; acesyuieuuqwgkwm: $sckumcuqemuukces = ManipulateDatabase::get("\x6d\x69\x6e\165\164\145"); goto asaowisseacciyia; ocgkwqqmgasuoies: $aasascamegmwqmqk = $wpdb->posts; goto wmaeicoyyciuaiuy; ooysmgyeqoiesgqm: $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\x31\75\x31", $icsywsyukqcciiky); goto kwoyiysciqumswcy; kkewoqqowugagwoy: $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); goto wwswmaewcaisauei; makomwwyomweyamm: $oqkwcmcmimkmkwgk = ManipulateDatabase::get("\x64\141\171"); goto oqwcmgwimeisusoe; owgakkqgckqcegoi: $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); goto cigesysuauaiccms; wmaeicoyyciuaiuy: $cwiqececuoeacuaa = ["\57\131\105\x41\x52\x5c\50\x5b\134\x73\x5d\52{$aasascamegmwqmqk}\56\x70\x6f\163\164\x5f\x64\x61\164\145\x5b\x5c\x73\135\x2a\x5c\51\133\134\x73\135\52\75\133\x5c\x73\135\x2a" . $usqcwoasmiiomgks . "\x2f", "\57\x44\x41\131\117\x46\x4d\117\x4e\x54\110\134\50\133\x5c\163\135\x2a{$aasascamegmwqmqk}\134\x2e\160\x6f\x73\x74\x5f\144\141\x74\145\133\134\x73\x5d\52\134\x29\133\134\163\135\x2a\75\x5b\x5c\163\x5d\52" . $oqkwcmcmimkmkwgk . "\x2f", "\x2f\115\117\116\x54\110\134\x28\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\x73\164\x5f\144\141\x74\145\x5b\134\x73\x5d\52\134\x29\133\x5c\163\135\52\75\133\x5c\163\x5d\52" . $mwemskcucwsyycwm . "\57", "\x2f\110\x4f\x55\122\x5c\50\133\134\163\x5d\52{$aasascamegmwqmqk}\x2e\160\x6f\163\164\x5f\x64\x61\164\x65\133\134\x73\x5d\52\x5c\x29\133\x5c\x73\x5d\52\75\133\134\163\135\52" . $ygykagaqyuawwiyo . "\57", "\57\115\x49\x4e\x55\124\105\x5c\50\133\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x2e\160\x6f\163\164\x5f\x64\x61\x74\x65\133\134\163\135\x2a\134\x29\133\134\x73\135\52\75\133\134\x73\135\x2a" . $sckumcuqemuukces . "\x2f", "\x2f\x53\x45\103\117\116\x44\134\50\x5b\134\163\135\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\163\164\x5f\144\141\x74\145\x5b\134\163\x5d\52\134\51\133\x5c\163\135\x2a\75\133\x5c\x73\x5d\52" . $gcegymooyemmaysk . "\57"]; goto ooysmgyeqoiesgqm; ookcgumoacskyymy: $gcisockiummsmcag = ManipulateDatabase::get("\x6d"); goto cuseccewekgcgkyg; owisckseoogsugqq: global $wpdb; goto ookcgumoacskyymy; qumkwsqqocooyuoq: $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); goto gcskyqewysqaceeg; aaogeemgkogagkai: return $icsywsyukqcciiky; goto qqmmycmsoqegcqqw; qiaaqkymeuuueoqk: if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto iaomqomgiwiegoca; } goto ugswokwmkumcmigc; wsemeeocquawyauo: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto ysweqawmawicakeo; } goto ocgkwqqmgasuoies; ugswokwmkumcmigc: $gcisockiummsmcag = preg_replace("\57\x5b\136\x30\x2d\71\x5d\x2f", '', $gcisockiummsmcag); goto gwiaimosqoiquwkc; gwiaimosqoiquwkc: $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); goto owgakkqgckqcegoi; qqmmycmsoqegcqqw: } public function wmmkekaaacyuumsk() { goto ukogwqiuuuakkawy; ucksaiwquekagyqe: if (!$geqcesmqwkeayoiu) { goto isqwwmikecauwyuc; } goto iyeswoaqkaeggiiy; gygqgauaceiuawkq: $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::NUMBERS_THOUSAND_SEPARATOR); goto ucksaiwquekagyqe; oymyqcoekqyuiguq: if (!$wp_locale instanceof WP_Locale) { goto magymcqykamwqigw; } goto ayamomygygmgwgkg; kceeuicccqscwgsu: oiiqqgyqmggyiums: goto iquecygaakmiomeg; sgiuwkisugmewmcs: $wp_locale->number_format["\144\x65\x63\x69\x6d\141\154\137\160\157\x69\x6e\164"] = $qawscmyuiuymkscy; goto kceeuicccqscwgsu; ayamomygygmgwgkg: $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::NUMBERS_DECIMAL_POINT); goto gygqgauaceiuawkq; asqqqqakiagymemk: isqwwmikecauwyuc: goto jkgouewqysmscmqs; iquecygaakmiomeg: magymcqykamwqigw: goto eacysqsegwcqawsa; ukogwqiuuuakkawy: global $wp_locale; goto gicmaqmuscawegie; iyeswoaqkaeggiiy: $wp_locale->number_format["\164\150\x6f\165\x73\141\156\x64\163\x5f\163\145\x70"] = $geqcesmqwkeayoiu; goto asqqqqakiagymemk; gicmaqmuscawegie: $this->locale = DecoratorUser::iyouigcsiacgwksc(); goto oymyqcoekqyuiguq; jkgouewqysmscmqs: if (!$qawscmyuiuymkscy) { goto oiiqqgyqmggyiums; } goto sgiuwkisugmewmcs; eacysqsegwcqawsa: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { goto akeoaicoieaiekcw; kucqcgeesiccuuia: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto ekoegocuqoycoeyq; } goto oycuaqewsskgkqci; iuysqgmmgqiywssm: if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_LETTERS)) { goto cwugokqsmiomgmqg; } goto weouocwmwicayyiy; ygskksomysgaokek: yimeskeioamqmuwg: goto wwcwmkowgooocaem; qgkiguggkyiycwow: yeemsgmumygmumqw: goto becceuuwokgoaewy; wyugqoowakyicyic: if (!$this->weysguygiseoukqw(Setting::ADMIN_CONVERT_NUMBERS)) { goto wkaoyycsoeoyqcae; } goto aeaciamekuqyieys; syoeqaqkseguwmgy: yksamaucqkqsawkk: goto sgiouaqukyycswqm; ugiqiewymimqecsu: wkaoyycsoeoyqcae: goto iuysqgmmgqiywssm; ocmagamuyawyiyka: goto yksamaucqkqsawkk; goto amqgiisymksuuuss; akeoaicoieaiekcw: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto yimeskeioamqmuwg; } goto kskqquqsegiiogek; ggyoywwggggekycs: cwugokqsmiomgmqg: goto gkkwmqoacciwomqs; kskqquqsegiiogek: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto mocaoayiouggauiy; gkkwmqoacciwomqs: uuuceqkseqkqawko: goto kucqcgeesiccuuia; weouocwmwicayyiy: $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); goto ggyoywwggggekycs; aeaciamekuqyieys: $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); goto ugiqiewymimqecsu; mocaoayiouggauiy: goto yeemsgmumygmumqw; goto ygskksomysgaokek; wwcwmkowgooocaem: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; goto qgkiguggkyiycwow; iwgmywqocewwgoeo: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; goto syoeqaqkseguwmgy; oycuaqewsskgkqci: $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto ocmagamuyawyiyka; amqgiisymksuuuss: ekoegocuqoycoeyq: goto iwgmywqocewwgoeo; sgiouaqukyycswqm: return $aqqmosqmsuueyaes; goto gwkawguwsamuomuo; becceuuwokgoaewy: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto uuuceqkseqkqawko; } goto wyugqoowakyicyic; gwkawguwsamuomuo: } public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese) { goto wowmysuygugawmmu; mmmqqoemusicwgqg: $dkcwuyaoaeekqeao = debug_backtrace(); goto iquugwoswgkoiieg; wowmysuygugawmmu: if (!function_exists("\x64\x65\x62\165\147\137\x62\x61\143\153\164\162\x61\x63\145")) { goto uugwmywmaqomeksa; } goto mmmqqoemusicwgqg; iquugwoswgkoiieg: if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x69\163\x61\x62\x6c\145"), $dkcwuyaoaeekqeao)) { goto ucasigqmoiwaimkk; } goto xogaycsaesgqeqig; gsiaskgsukseumig: ucasigqmoiwaimkk: goto syiyemqigyugagks; xogaycsaesgqeqig: return $aumwicqgsiymkssc; goto gsiaskgsukseumig; syiyemqigyugagks: uugwmywmaqomeksa: goto woqkgwmkmqsuceuy; woqkgwmkmqsuceuy: return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa); goto imwiyqcekcykscui; imwiyqcekcykscui: } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uqkiyeuegiacwuqq($aamkqmkgsaqmcuao) : ?string { goto omsmaougqkqigogw; omsmaougqkqigogw: global $aamkqmkgsaqmcuao; goto geasgywiogoeamek; mccimkgwkkamsime: return $aamkqmkgsaqmcuao; goto ucaoyoamaycsiacq; qweyymyuuqwcmkqg: $aamkqmkgsaqmcuao = "\x66\x61\137\111\122"; goto guqmgiqaaowaauyo; geasgywiogoeamek: if (!($aamkqmkgsaqmcuao !== "\x66\141\x5f\x49\x52")) { goto umemmgiwimkymaya; } goto qweyymyuuqwcmkqg; guqmgiqaaowaauyo: umemmgiwimkymaya: goto mccimkgwkkamsime; ucaoyoamaycsiacq: } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { goto oasisywuwssumsok; oasisywuwssumsok: if (!$ocogsiouoiuuguym) { goto iuyagqakcieasiua; } goto iaoyeugekskmewgs; okagauksoqkoqygi: return $ocogsiouoiuuguym; goto eciksmgaqikwegwq; iaoyeugekskmewgs: $ocogsiouoiuuguym = $this->mikaiusgimoekqye(date("\x59\x2d\155\x2d\144\x20\110\72\151\72\163", $yiuogaeewyockeak), $saqmwwmqiwmkiwaa); goto iokemmkgmcaksiqu; iokemmkgmcaksiqu: iuyagqakcieasiua: goto okagauksoqkoqygi; eciksmgaqikwegwq: } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = "\146\141") { goto usgcoawgqswoeiec; mmkoqmccusoeaoyi: goto auaigccmwqwsqsku; goto waewaiuiogywqigu; ueaiskyiqcquiika: $aamkqmkgsaqmcuao = "\x66\141"; goto eqemcocqsyasqycq; qaiuogoowcoimwee: camawumockccayaq: goto osqgywagokmsicqe; ucecweoaoyeoyuue: goto gykuaukukosiocoy; goto cqugssuesycomqwa; cqkuuyouqoqyguus: if (!(empty($aamkqmkgsaqmcuao) && !is_admin())) { goto mcucegiogmuyogki; } goto ssmgmiuqoeiuacsa; yyamycyesguwueuw: $yiuogaeewyockeak = $cqgoimumaewouews; goto aymmymequcisekie; cqugssuesycomqwa: goswwiomuackymqi: goto kaiqsuaywyuckuoo; aymmymequcisekie: auaigccmwqwsqsku: goto gyeayeuuyiemuwuq; aqigiwmamkowomiw: $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto qesqgumuouyymcwa; qccmuwiwykuegoga: uuisaeysawuagysg: goto csucwwqcsaymyiuk; aqmiewawgseaqeqk: if (empty($aamkqmkgsaqmcuao) && is_admin() && $this->weysguygiseoukqw(Setting::ADMIN_CONVERT_DATES)) { goto camawumockccayaq; } goto gaceikykesgywssm; gaceikykesgywssm: if (empty($aamkqmkgsaqmcuao) && is_admin()) { goto goswwiomuackymqi; } goto weggeeowykuqooyg; csucwwqcsaymyiuk: $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $aamkqmkgsaqmcuao); goto iiuuwuwcwamqegey; weggeeowykuqooyg: if (empty($aamkqmkgsaqmcuao) && !is_admin() && $this->weysguygiseoukqw(Setting::FRONT_CONVERT_DATES)) { goto gqaimiooakyykccy; } goto cqkuuyouqoqyguus; usgcoawgqswoeiec: if (is_int($cqgoimumaewouews)) { goto measoqewessauqma; } goto qowcwmsiyscackaa; qowcwmsiyscackaa: if (is_numeric($cqgoimumaewouews)) { goto kieyoaoawqacqamy; } goto aqigiwmamkowomiw; eqemcocqsyasqycq: agemeseegiuuowgo: goto ucecweoaoyeoyuue; ymwyooosikgokiaa: goto uuisaeysawuagysg; goto qaiuogoowcoimwee; koggssokukoukkay: gqaimiooakyykccy: goto ueaiskyiqcquiika; ggqwcqssoauckuic: $yiuogaeewyockeak = intval($cqgoimumaewouews); goto ggwcauaeuagekeyo; iiuuwuwcwamqegey: ggqeakyaggiuegek: goto qmgueimkwqmsakis; csyoimsqgwcmiwki: kieyoaoawqacqamy: goto ggqwcqssoauckuic; kaiqsuaywyuckuoo: $aamkqmkgsaqmcuao = "\x65\156"; goto yuoamgkigcwaooqu; sugumgeqcwgekcqs: wiaesksmicgikqcm: goto imeaiksowuukikui; imeaiksowuukikui: if (!$yiuogaeewyockeak) { goto ggqeakyaggiuegek; } goto aqmiewawgseaqeqk; yuoamgkigcwaooqu: gykuaukukosiocoy: goto ymwyooosikgokiaa; wiqigqgiegmacgsw: mcucegiogmuyogki: goto gwoacimkeyymqccq; kyggwyywiycksgqq: $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw(); goto sugumgeqcwgekcqs; osqgywagokmsicqe: $aamkqmkgsaqmcuao = "\x66\141"; goto qccmuwiwykuegoga; qesqgumuouyymcwa: goto qckouamqueqiykqi; goto csyoimsqgwcmiwki; ggwcauaeuagekeyo: qckouamqueqiykqi: goto mmkoqmccusoeaoyi; gwoacimkeyymqccq: goto agemeseegiuuowgo; goto koggssokukoukkay; waewaiuiogywqigu: measoqewessauqma: goto yyamycyesguwueuw; qmgueimkwqmsakis: return $cqgoimumaewouews; goto ooqmaweuqmcmwsuk; ssmgmiuqoeiuacsa: $aamkqmkgsaqmcuao = "\x65\x6e"; goto wiqigqgiegmacgsw; gyeayeuuyiemuwuq: if ($saqmwwmqiwmkiwaa) { goto wiaesksmicgikqcm; } goto kyggwyywiycksgqq; ooqmaweuqmcmwsuk: } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
