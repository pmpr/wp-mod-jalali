<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43ae262ae9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\x6e\151\x74"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\164\137\x74\145\x72\x6d", [$this, "\153\143\x6b\x6f\147\161\153\151\x79\x63\x71\x65\x75\155\157\141"])->cecaguuoecmccuse("\147\x65\x74\137\143\157\x6d\x6d\145\x6e\x74", [$this, "\163\x65\x6d\155\x73\x6b\x75\153\141\145\171\x65\x6f\165\x75\x65"])->cecaguuoecmccuse("\x67\x65\164\x5f\x74\150\x65\137\144\x61\x74\x65", [$this, "\155\151\153\x61\151\x75\163\x67\x69\155\157\x65\153\161\x79\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto acaqummmoyiemqss; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto wmmggowmigekyoso; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); wmmggowmigekyoso: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto soqqemyioggmoakg; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); soqqemyioggmoakg: acaqummmoyiemqss: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\x6d"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\x79\x65\x61\x72"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\155\157\156\164\x68\156\x75\x6d"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\x64\141\x79"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\x68\x6f\165\x72"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\155\x69\156\x75\x74\145"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\x65\x63\157\x6e\144"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\60")) { goto suswcqoyyqkkquuo; } $gcisockiummsmcag = preg_replace("\57\x5b\x5e\x30\x2d\71\x5d\x2f", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); suswcqoyyqkkquuo: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto eeqesooyqagwawae; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\131\105\x41\x52\134\x28\133\134\163\x5d\52{$aasascamegmwqmqk}\56\160\157\x73\x74\x5f\x64\141\x74\145\x5b\134\x73\135\52\134\51\x5b\x5c\163\135\52\x3d\x5b\134\163\x5d\x2a" . $usqcwoasmiiomgks . "\x2f", "\57\104\101\x59\x4f\x46\x4d\x4f\116\124\x48\134\50\x5b\134\163\x5d\x2a{$aasascamegmwqmqk}\x5c\x2e\160\x6f\163\x74\137\144\141\164\x65\x5b\x5c\x73\135\52\x5c\51\x5b\134\163\135\x2a\75\x5b\134\x73\x5d\x2a" . $oqkwcmcmimkmkwgk . "\x2f", "\57\x4d\117\x4e\124\x48\134\50\x5b\134\x73\135\x2a{$aasascamegmwqmqk}\56\160\x6f\x73\164\x5f\144\x61\164\145\x5b\134\163\135\x2a\x5c\51\133\134\x73\135\x2a\75\133\134\163\x5d\x2a" . $mwemskcucwsyycwm . "\57", "\x2f\x48\117\125\x52\x5c\x28\133\x5c\163\x5d\x2a{$aasascamegmwqmqk}\56\160\157\163\x74\x5f\x64\141\164\x65\133\134\x73\x5d\x2a\134\51\133\134\163\135\52\x3d\x5b\x5c\x73\x5d\x2a" . $ygykagaqyuawwiyo . "\57", "\57\115\111\x4e\x55\124\105\x5c\x28\133\134\x73\x5d\x2a{$aasascamegmwqmqk}\x2e\160\157\x73\164\137\144\x61\164\x65\x5b\134\163\x5d\52\134\51\133\x5c\x73\135\52\x3d\x5b\x5c\163\135\52" . $sckumcuqemuukces . "\57", "\x2f\123\x45\103\117\x4e\104\x5c\x28\133\134\163\x5d\52{$aasascamegmwqmqk}\56\160\x6f\163\164\x5f\x64\x61\x74\x65\x5b\134\163\x5d\x2a\x5c\51\133\x5c\x73\x5d\52\x3d\133\x5c\163\135\52" . $gcegymooyemmaysk . "\x2f"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\x31\75\61", $icsywsyukqcciiky); eeqesooyqagwawae: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto iekumemscwieugqw; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto oqugqwcyomiaaoqu; } $wp_locale->number_format["\164\x68\x6f\165\x73\141\156\144\163\137\x73\145\x70"] = $geqcesmqwkeayoiu; oqugqwcyomiaaoqu: if (!$qawscmyuiuymkscy) { goto foeeqckqsyockkak; } $wp_locale->number_format["\x64\x65\143\151\x6d\141\x6c\x5f\x70\x6f\x69\x6e\164"] = $qawscmyuiuymkscy; foeeqckqsyockkak: iekumemscwieugqw: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($comment) { if ($comment instanceof WP_Comment) { goto hoeeyiowekaeemko; } $ewgwqamkygiqaawc = $comment; goto kymkucucyeoeikim; hoeeyiowekaeemko: $ewgwqamkygiqaawc = $comment->comment_content; kymkucucyeoeikim: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto uguigkcmukuouway; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto usquiuuyiyqaeyiu; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); usquiuuyiyqaeyiu: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto qicwaskssogcokgm; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); qicwaskssogcokgm: uguigkcmukuouway: if ($comment instanceof WP_Comment) { goto uqqaiagaeqgqgaiy; } $comment = $ewgwqamkygiqaawc; goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $comment->comment_content = $ewgwqamkygiqaawc; esuiysskoweawsue: return $comment; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\146\x61\137\111\x52")) { goto gaomwagkcciesyqy; } $locale = "\146\141\x5f\x49\122"; gaomwagkcciesyqy: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto aegysmeecgcgayyw; } $ocogsiouoiuuguym = $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); aegysmeecgcgayyw: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
