<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             627f43c61ed12             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; use WP_Comment; use WP_Locale; class Common extends Container { protected ?string $locale = null; protected ?Converter $converter = null; protected ?Translator $translator = null; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : ?Converter { return $this->converter; } public function kkkikouyuqigocai() : ?Translator { return $this->translator; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\x6e\151\164"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\164\x5f\x74\x65\x72\x6d", [$this, "\153\x63\153\x6f\x67\161\x6b\151\x79\143\161\145\165\x6d\x6f\x61"])->cecaguuoecmccuse("\x67\145\164\137\143\157\x6d\x6d\145\156\x74", [$this, "\x73\x65\x6d\x6d\x73\153\165\x6b\x61\x65\171\x65\x6f\x75\x75\145"])->cecaguuoecmccuse("\x6c\x6f\143\141\x6c\x65", [$this, "\x75\x71\x6b\151\x79\x65\x75\145\x67\151\141\x63\167\x75\161\161"], 10)->cecaguuoecmccuse("\x67\145\164\137\x74\x68\145\x5f\144\x61\164\x65", [$this, "\155\151\x6b\x61\151\x75\x73\x67\x69\155\157\x65\x6b\x71\x79\x65"], 99, 3); parent::kgquecmsgcouyaya(); } public function init() { $this->wmmkekaaacyuumsk(); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\x61") { if ($locale) { goto wmmggowmigekyoso; } $locale = DecoratorI18N::iyouigcsiacgwksc(); wmmggowmigekyoso: return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\x61", $eqmcogmcemgigckm = "\xd9\253") { if ($locale) { goto soqqemyioggmoakg; } $locale = DecoratorI18N::iyouigcsiacgwksc(); soqqemyioggmoakg: return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto eeqesooyqagwawae; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto acaqummmoyiemqss; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); acaqummmoyiemqss: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto suswcqoyyqkkquuo; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); suswcqoyyqkkquuo: eeqesooyqagwawae: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $gcisockiummsmcag = ManipulateDatabase::get("\155"); $usqcwoasmiiomgks = ManipulateDatabase::get("\171\145\141\x72"); $mwemskcucwsyycwm = ManipulateDatabase::get("\155\157\x6e\x74\150\x6e\165\x6d"); $oqkwcmcmimkmkwgk = ManipulateDatabase::get("\144\x61\171"); $ygykagaqyuawwiyo = ManipulateDatabase::get("\150\157\165\162"); $sckumcuqemuukces = ManipulateDatabase::get("\x6d\151\156\x75\164\145"); $gcegymooyemmaysk = ManipulateDatabase::get("\x73\x65\x63\x6f\x6e\x64"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto oqugqwcyomiaaoqu; } $gcisockiummsmcag = preg_replace("\x2f\133\x5e\x30\55\x39\135\x2f", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); oqugqwcyomiaaoqu: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto foeeqckqsyockkak; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\x59\105\x41\122\134\x28\133\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\157\x73\164\x5f\144\141\164\x65\x5b\x5c\x73\135\x2a\134\51\x5b\134\163\x5d\x2a\75\133\x5c\x73\x5d\52" . $usqcwoasmiiomgks . "\x2f", "\57\x44\x41\131\117\106\115\x4f\x4e\x54\x48\x5c\x28\x5b\134\x73\135\52{$aasascamegmwqmqk}\134\56\x70\x6f\x73\164\137\x64\x61\x74\145\133\134\163\x5d\x2a\134\x29\x5b\134\163\135\52\x3d\133\x5c\163\x5d\x2a" . $oqkwcmcmimkmkwgk . "\57", "\57\115\117\x4e\124\x48\134\x28\133\x5c\x73\135\x2a{$aasascamegmwqmqk}\56\160\x6f\x73\x74\x5f\x64\x61\x74\x65\x5b\134\163\x5d\52\134\x29\x5b\x5c\163\x5d\x2a\75\x5b\134\163\135\x2a" . $mwemskcucwsyycwm . "\57", "\57\110\117\x55\122\x5c\50\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\157\163\164\x5f\x64\141\x74\x65\x5b\x5c\163\135\x2a\134\x29\x5b\134\163\135\x2a\x3d\x5b\134\163\135\x2a" . $ygykagaqyuawwiyo . "\57", "\57\x4d\x49\x4e\x55\124\x45\134\50\x5b\134\x73\135\x2a{$aasascamegmwqmqk}\56\x70\x6f\x73\164\137\x64\x61\x74\145\x5b\x5c\163\135\52\x5c\51\133\134\x73\135\x2a\x3d\x5b\x5c\x73\x5d\52" . $sckumcuqemuukces . "\57", "\57\123\x45\x43\x4f\116\104\x5c\50\x5b\134\163\x5d\x2a{$aasascamegmwqmqk}\56\x70\157\x73\x74\137\144\141\164\145\133\134\163\x5d\52\134\x29\x5b\134\x73\135\x2a\x3d\x5b\134\x73\x5d\52" . $gcegymooyemmaysk . "\57"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\75\x31", $icsywsyukqcciiky); foeeqckqsyockkak: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = DecoratorUser::iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto kymkucucyeoeikim; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto iekumemscwieugqw; } $wp_locale->number_format["\x74\x68\x6f\x75\x73\141\156\x64\x73\137\x73\x65\160"] = $geqcesmqwkeayoiu; iekumemscwieugqw: if (!$qawscmyuiuymkscy) { goto hoeeyiowekaeemko; } $wp_locale->number_format["\x64\145\x63\x69\155\141\154\137\x70\x6f\151\156\164"] = $qawscmyuiuymkscy; hoeeyiowekaeemko: kymkucucyeoeikim: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto usquiuuyiyqaeyiu; } $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; qicwaskssogcokgm: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto esuiysskoweawsue; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto uguigkcmukuouway; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); uguigkcmukuouway: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto uqqaiagaeqgqgaiy; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); uqqaiagaeqgqgaiy: esuiysskoweawsue: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto gaomwagkcciesyqy; } $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto aegysmeecgcgayyw; gaomwagkcciesyqy: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; aegysmeecgcgayyw: return $aqqmosqmsuueyaes; } public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese) { if (!function_exists("\144\145\142\x75\147\x5f\142\141\x63\x6b\x74\x72\x61\143\x65")) { goto soaccwqimeksgwiw; } $dkcwuyaoaeekqeao = debug_backtrace(); if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\144\x69\163\x61\x62\x6c\x65"), $dkcwuyaoaeekqeao)) { goto suqkuqygkkgwyaie; } return $aumwicqgsiymkssc; suqkuqygkkgwyaie: soaccwqimeksgwiw: return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa); } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\146\x61\137\111\122")) { goto wiysogeqqwgioyka; } $locale = "\x66\x61\137\111\122"; wiysogeqqwgioyka: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto skkamseieeusycye; } skkamseieeusycye: return $ocogsiouoiuuguym; } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = "\146\141") { if (is_int($cqgoimumaewouews)) { goto giaacoqqqsekcayy; } if (is_numeric($cqgoimumaewouews)) { goto cgiscsqwwgqqaeqi; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $yiuogaeewyockeak = intval($cqgoimumaewouews); syiqkaasoueowwui: goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $yiuogaeewyockeak = $cqgoimumaewouews; ewymsmkkiksgwysk: if ($saqmwwmqiwmkiwaa) { goto cmegwsegsosyqcai; } $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw(); cmegwsegsosyqcai: if (!$yiuogaeewyockeak) { goto omqiayeucoioqoao; } if (empty($locale) && is_admin() && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto cewmoqyysgsmuiya; } if (empty($locale) && is_admin()) { goto egyyiccaeeiooaua; } if (empty($locale) && !is_admin() && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto gkyawqqcmigqgaiq; } if (!(empty($locale) && !is_admin())) { goto wmywuusgukmmaams; } $locale = "\145\x6e"; wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $locale = "\146\141"; ooeausyowguqicuo: goto scisgsyemmsekgos; egyyiccaeeiooaua: $locale = "\145\156"; scisgsyemmsekgos: goto igooksugieceoege; cewmoqyysgsmuiya: $locale = "\146\141"; igooksugieceoege: $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $locale); omqiayeucoioqoao: return $cqgoimumaewouews; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
