<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0894658f8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; use WP_Comment; use WP_Locale; class Common extends Container { protected ?string $locale = null; protected ?Converter $converter = null; protected ?Translator $translator = null; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : ?Converter { return $this->converter; } public function kkkikouyuqigocai() : ?Translator { return $this->translator; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\156\151\164"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\137\x74\145\x72\x6d", [$this, "\x6b\x63\153\x6f\147\x71\153\151\171\143\161\x65\165\155\x6f\x61"])->cecaguuoecmccuse("\x67\x65\x74\x5f\143\157\x6d\x6d\145\156\x74", [$this, "\163\x65\x6d\155\163\x6b\165\x6b\141\x65\171\145\157\165\x75\145"])->cecaguuoecmccuse("\x6c\157\143\141\154\145", [$this, "\165\x71\153\151\171\145\x75\x65\x67\x69\141\143\x77\165\x71\161"], 10)->cecaguuoecmccuse("\147\x65\x74\x5f\164\x68\145\x5f\144\x61\164\x65", [$this, "\155\151\153\141\151\165\163\x67\x69\x6d\x6f\x65\x6b\161\x79\x65"], 99, 3); parent::kgquecmsgcouyaya(); } public function init() { $this->wmmkekaaacyuumsk(); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\146\141") { if ($locale) { goto cewmoqyysgsmuiya; } $locale = DecoratorI18N::iyouigcsiacgwksc(); cewmoqyysgsmuiya: return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\141", $eqmcogmcemgigckm = "\331\253") { if ($locale) { goto igooksugieceoege; } $locale = DecoratorI18N::iyouigcsiacgwksc(); igooksugieceoege: return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = ManipulateTerm::get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto wgewmqieuamsoayy; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto omqiayeucoioqoao; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); omqiayeucoioqoao: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto ugqaaewwmkocwwgy; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); ugqaaewwmkocwwgy: wgewmqieuamsoayy: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $gcisockiummsmcag = ManipulateDatabase::get("\x6d"); $usqcwoasmiiomgks = ManipulateDatabase::get("\x79\145\141\x72"); $mwemskcucwsyycwm = ManipulateDatabase::get("\155\x6f\x6e\164\150\156\165\x6d"); $oqkwcmcmimkmkwgk = ManipulateDatabase::get("\x64\141\x79"); $ygykagaqyuawwiyo = ManipulateDatabase::get("\x68\157\165\x72"); $sckumcuqemuukces = ManipulateDatabase::get("\x6d\151\156\165\x74\x65"); $gcegymooyemmaysk = ManipulateDatabase::get("\163\145\x63\157\156\x64"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto kqgcyoscsusgoaqi; } $gcisockiummsmcag = preg_replace("\57\x5b\x5e\x30\x2d\x39\135\57", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); kqgcyoscsusgoaqi: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto ueigkucgaucgeimc; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\x59\x45\101\x52\x5c\x28\x5b\x5c\x73\135\52{$aasascamegmwqmqk}\x2e\160\157\x73\164\x5f\144\x61\164\x65\133\134\x73\135\52\134\x29\x5b\x5c\x73\x5d\52\x3d\x5b\134\x73\135\x2a" . $usqcwoasmiiomgks . "\57", "\x2f\x44\101\x59\117\106\x4d\117\116\x54\110\x5c\50\133\x5c\x73\135\x2a{$aasascamegmwqmqk}\134\56\160\157\x73\x74\137\144\141\164\x65\x5b\x5c\163\135\52\134\x29\133\134\x73\135\52\75\133\134\163\x5d\x2a" . $oqkwcmcmimkmkwgk . "\x2f", "\x2f\x4d\117\116\x54\x48\x5c\50\133\x5c\x73\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\163\164\137\144\x61\164\x65\x5b\x5c\x73\135\52\x5c\x29\x5b\134\163\135\x2a\x3d\133\x5c\163\x5d\x2a" . $mwemskcucwsyycwm . "\x2f", "\57\x48\x4f\x55\122\134\x28\133\x5c\163\135\x2a{$aasascamegmwqmqk}\x2e\160\x6f\163\x74\x5f\x64\x61\x74\x65\133\x5c\163\x5d\52\134\51\x5b\134\163\135\52\75\x5b\x5c\x73\x5d\52" . $ygykagaqyuawwiyo . "\57", "\x2f\115\x49\x4e\125\x54\105\x5c\50\x5b\x5c\x73\x5d\x2a{$aasascamegmwqmqk}\56\160\x6f\163\164\x5f\x64\141\x74\145\133\x5c\x73\x5d\x2a\x5c\x29\133\x5c\163\x5d\52\x3d\133\134\163\135\x2a" . $sckumcuqemuukces . "\x2f", "\57\x53\x45\103\x4f\x4e\x44\x5c\x28\x5b\x5c\x73\135\x2a{$aasascamegmwqmqk}\x2e\x70\157\x73\164\137\x64\141\164\145\133\134\163\x5d\52\x5c\51\133\134\163\135\52\75\133\x5c\163\x5d\x2a" . $gcegymooyemmaysk . "\x2f"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\75\x31", $icsywsyukqcciiky); ueigkucgaucgeimc: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = DecoratorUser::iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto wakmayaoqoskekqy; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto sggawugoykqcmsug; } $wp_locale->number_format["\x74\150\157\x75\x73\141\156\x64\x73\x5f\x73\x65\x70"] = $geqcesmqwkeayoiu; sggawugoykqcmsug: if (!$qawscmyuiuymkscy) { goto wkeuuycukmuqiaom; } $wp_locale->number_format["\144\145\x63\151\x6d\x61\154\137\160\157\151\x6e\x74"] = $qawscmyuiuymkscy; wkeuuycukmuqiaom: wakmayaoqoskekqy: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto qmuwoecuacmkwgem; } $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto owmuceyswmgueasi; qmuwoecuacmkwgem: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; owmuceyswmgueasi: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto eogwckcymuugikuy; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto mwsmsguqqkcwiiuk; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); mwsmsguqqkcwiiuk: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto eeauyscekuckoues; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); eeauyscekuckoues: eogwckcymuugikuy: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto msemumccgceyugmg; } $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto wagqgeqymeqoeuyi; msemumccgceyugmg: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; wagqgeqymeqoeuyi: return $aqqmosqmsuueyaes; } public function kegkegukuqqiakko($aumwicqgsiymkssc, $saqmwwmqiwmkiwaa, $ciyackuwsqkoqese) { if (!function_exists("\x64\145\x62\165\147\137\x62\x61\143\153\164\162\x61\143\x65")) { goto iwsuawwqomaowuii; } $dkcwuyaoaeekqeao = debug_backtrace(); if (!$this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x64\x69\x73\141\x62\x6c\145"), $dkcwuyaoaeekqeao)) { goto qoqskyuuwueqkquk; } return $aumwicqgsiymkssc; qoqskyuuwueqkquk: iwsuawwqomaowuii: return $this->mikaiusgimoekqye($ciyackuwsqkoqese, $saqmwwmqiwmkiwaa); } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\146\x61\x5f\x49\x52")) { goto wcugqegqsuuuwqao; } $locale = "\x66\141\x5f\x49\x52"; wcugqegqsuuuwqao: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto asiqwuoswmigcaki; } asiqwuoswmigcaki: return $ocogsiouoiuuguym; } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = "\x66\x61") { if (is_int($cqgoimumaewouews)) { goto qgeugwymkkiacwoc; } if (is_numeric($cqgoimumaewouews)) { goto ciykoyeioqgyaeqo; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $yiuogaeewyockeak = intval($cqgoimumaewouews); mqicocmqegwukkwg: goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $yiuogaeewyockeak = $cqgoimumaewouews; emmsycooskoqmgeg: if ($saqmwwmqiwmkiwaa) { goto ouamogymawucwswu; } $saqmwwmqiwmkiwaa = ManipulateSetting::isiuiegyqiomccsw(); ouamogymawucwswu: if (!$yiuogaeewyockeak) { goto miweggwqeiaeweia; } if (empty($locale) && is_admin() && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto guykyqecgswcsmws; } if (empty($locale) && is_admin()) { goto samwkqgwouggsguc; } if (empty($locale) && !is_admin() && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto acsqgiuageaasiyy; } if (!(empty($locale) && !is_admin())) { goto mugqyyeayeyggqqk; } $locale = "\145\156"; mugqyyeayeyggqqk: goto oomguqikqokqwgku; acsqgiuageaasiyy: $locale = "\146\141"; oomguqikqokqwgku: goto wyuemgggaqogsmsq; samwkqgwouggsguc: $locale = "\145\x6e"; wyuemgggaqogsmsq: goto kkumywowcoycymeo; guykyqecgswcsmws: $locale = "\146\x61"; kkumywowcoycymeo: $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $locale); miweggwqeiaeweia: return $cqgoimumaewouews; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
