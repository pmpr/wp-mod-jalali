<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56d0994ba             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\151\x6e\x69\x74"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\164\137\x74\x65\x72\x6d", [$this, "\153\x63\153\x6f\x67\x71\153\151\171\x63\161\145\x75\155\157\141"])->cecaguuoecmccuse("\x67\x65\164\137\143\x6f\155\x6d\x65\156\x74", [$this, "\x73\x65\155\155\x73\153\x75\153\141\145\x79\x65\x6f\x75\x75\x65"])->cecaguuoecmccuse("\154\157\143\141\154\x65", [$this, "\x75\x71\153\151\x79\145\x75\x65\x67\151\141\143\x77\x75\x71\x71"], 10)->cecaguuoecmccuse("\x67\145\164\x5f\x74\x68\145\137\x64\x61\x74\145", [$this, "\x6d\x69\x6b\141\151\165\x73\x67\151\155\x6f\145\153\161\171\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto eeqesooyqagwawae; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto acaqummmoyiemqss; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); acaqummmoyiemqss: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto suswcqoyyqkkquuo; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); suswcqoyyqkkquuo: eeqesooyqagwawae: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\x6d"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\171\x65\x61\x72"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\x6d\157\156\164\150\x6e\165\x6d"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\144\x61\171"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\150\x6f\x75\x72"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\155\x69\x6e\165\x74\145"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\x65\x63\157\x6e\x64"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto oqugqwcyomiaaoqu; } $gcisockiummsmcag = preg_replace("\x2f\133\136\60\55\x39\135\57", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); oqugqwcyomiaaoqu: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto foeeqckqsyockkak; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\x2f\131\105\101\122\x5c\x28\133\134\x73\135\x2a{$aasascamegmwqmqk}\56\160\x6f\163\164\137\x64\141\x74\x65\x5b\x5c\x73\x5d\x2a\134\x29\133\x5c\163\135\52\75\133\134\x73\135\52" . $usqcwoasmiiomgks . "\x2f", "\57\104\x41\x59\117\x46\115\117\x4e\x54\x48\x5c\50\x5b\134\x73\135\x2a{$aasascamegmwqmqk}\x5c\56\160\157\x73\x74\137\144\141\164\x65\x5b\134\163\x5d\x2a\x5c\x29\x5b\x5c\163\135\52\x3d\133\x5c\163\135\x2a" . $oqkwcmcmimkmkwgk . "\x2f", "\57\115\117\x4e\124\110\134\50\x5b\134\x73\135\x2a{$aasascamegmwqmqk}\56\160\157\x73\164\x5f\144\x61\164\x65\x5b\134\x73\x5d\x2a\x5c\x29\x5b\134\x73\135\x2a\x3d\133\134\163\x5d\52" . $mwemskcucwsyycwm . "\57", "\57\110\x4f\125\122\134\50\x5b\x5c\x73\135\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\163\x74\137\144\x61\164\x65\x5b\x5c\x73\135\x2a\134\x29\x5b\134\163\135\x2a\x3d\133\134\x73\135\x2a" . $ygykagaqyuawwiyo . "\57", "\57\x4d\x49\116\x55\x54\x45\x5c\50\133\x5c\x73\135\52{$aasascamegmwqmqk}\56\160\157\163\x74\x5f\x64\141\x74\145\x5b\x5c\163\135\52\134\x29\133\x5c\163\135\52\75\133\134\x73\x5d\52" . $sckumcuqemuukces . "\57", "\x2f\x53\105\103\117\116\104\134\50\x5b\134\x73\x5d\x2a{$aasascamegmwqmqk}\56\160\157\x73\164\x5f\x64\x61\x74\145\x5b\x5c\x73\x5d\52\134\x29\133\134\x73\x5d\52\x3d\x5b\x5c\163\135\x2a" . $gcegymooyemmaysk . "\57"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\x31\75\x31", $icsywsyukqcciiky); foeeqckqsyockkak: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto kymkucucyeoeikim; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto iekumemscwieugqw; } $wp_locale->number_format["\164\x68\157\x75\163\141\x6e\x64\x73\137\x73\145\160"] = $geqcesmqwkeayoiu; iekumemscwieugqw: if (!$qawscmyuiuymkscy) { goto hoeeyiowekaeemko; } $wp_locale->number_format["\x64\x65\143\151\155\x61\154\137\x70\157\x69\156\x74"] = $qawscmyuiuymkscy; hoeeyiowekaeemko: kymkucucyeoeikim: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($comment) { if ($comment instanceof WP_Comment) { goto usquiuuyiyqaeyiu; } $ewgwqamkygiqaawc = $comment; goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $ewgwqamkygiqaawc = $comment->comment_content; qicwaskssogcokgm: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto esuiysskoweawsue; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto uguigkcmukuouway; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); uguigkcmukuouway: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto uqqaiagaeqgqgaiy; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); uqqaiagaeqgqgaiy: esuiysskoweawsue: if ($comment instanceof WP_Comment) { goto gaomwagkcciesyqy; } $comment = $ewgwqamkygiqaawc; goto aegysmeecgcgayyw; gaomwagkcciesyqy: $comment->comment_content = $ewgwqamkygiqaawc; aegysmeecgcgayyw: return $comment; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\x66\141\137\x49\122")) { goto suqkuqygkkgwyaie; } $locale = "\x66\141\x5f\x49\x52"; suqkuqygkkgwyaie: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto soaccwqimeksgwiw; } $ocogsiouoiuuguym = $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); soaccwqimeksgwiw: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
