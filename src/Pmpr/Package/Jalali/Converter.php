<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0326a9eb84             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Converter extends Container { protected ?Translator $translator = null; public function __construct() { $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function kkkikouyuqigocai() : ?Translator { return $this->translator; } public function eiaysiqcywusmwoe($mwemskcucwsyycwm) { $qcgkuqesqqymcuui = $this->yqeyqmywaiwkkcao(["\155\x6d" => (int) $mwemskcucwsyycwm]); return ManipulateArray::get($qcgkuqesqqymcuui, "\x6d\x6d", $qcgkuqesqqymcuui); } public function ogoquecgeowwigwk($sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg) : bool { [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\137", $this->msywmyaoqmaegsuy($sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg)); $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5); return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1); } public function yqeyqmywaiwkkcao($uomewyckeuqoqocu, $ugkymqicywakcemw = '') { foreach ($uomewyckeuqoqocu as $sqeykgyoooqysmca => $mqwsmsykyouoomgm) { $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm); switch ($sqeykgyoooqysmca) { case "\163\163": $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm); $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1); $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = ''; if ($eouwgmemicwiwise == 1) { goto wmywuusgukmmaams; } $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1); $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : "\40\xd9\210\40"; $ukoioyqsqkuskqom = ['', '', __("\124\167\145\156\x74\171", PR__PKG__JALALI), __("\x54\x68\x69\x72\x74\171", PR__PKG__JALALI), __("\x46\157\162\x74\171", PR__PKG__JALALI), __("\x46\x69\x66\164\x79", PR__PKG__JALALI), __("\123\x69\x78\x74\x79", PR__PKG__JALALI), __("\123\x65\166\x65\x6e\x74\x79", PR__PKG__JALALI), __("\x45\151\x67\x68\x74\171", PR__PKG__JALALI), __("\116\151\156\145\x74\171", PR__PKG__JALALI)]; $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise]; $uoumogqmkuousoia = ['', __("\117\156\145", PR__PKG__JALALI), __("\124\x77\x6f", PR__PKG__JALALI), __("\x54\x68\x72\x65\145", PR__PKG__JALALI), __("\106\157\x75\x72", PR__PKG__JALALI), __("\x46\151\x76\x65", PR__PKG__JALALI), __("\123\x69\170", PR__PKG__JALALI), __("\x53\x65\166\x65\x6e", PR__PKG__JALALI), __("\105\x69\x67\x68\x74", PR__PKG__JALALI), __("\116\x69\156\x65", PR__PKG__JALALI)]; $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou]; goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $kckiiskiksiousiy = ''; $ygaqkccwykqkamoo = [__("\x54\145\156", PR__PKG__JALALI), __("\105\x6c\145\166\145\x6e", PR__PKG__JALALI), __("\124\167\145\x6c\166\145", PR__PKG__JALALI), __("\124\x68\x69\162\164\145\x65\156", PR__PKG__JALALI), __("\106\x6f\x75\162\x74\x65\145\x6e", PR__PKG__JALALI), __("\106\151\146\x74\x65\x65\156", PR__PKG__JALALI), __("\123\151\170\x74\x65\145\x6e", PR__PKG__JALALI), __("\123\145\x76\x65\x6e\x74\x65\x65\156", PR__PKG__JALALI), __("\x45\151\x67\150\164\145\145\156", PR__PKG__JALALI), __("\116\x69\156\145\x74\x65\145\156", PR__PKG__JALALI)]; $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10]; gkyawqqcmigqgaiq: $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(["\x31\62", "\x31\63", "\x31\64", "\x31\71", "\x32\x30"], ["\xd9\207\xd8\262\330\247\330\xb1\40\xd9\x88\x20\330\xaf\331\210\xdb\x8c\330\xb3\xd8\252", "\331\x87\330\xb2\xd8\247\330\261\40\331\210\x20\330\xb3\xdb\x8c\xd8\xb5\xd8\xaf", "\xd9\x87\xd8\262\xd8\247\330\xb1\x20\331\210\40\xda\206\xd9\207\xd8\247\330\261\xd8\xb5\xd8\257", "\xd9\207\xd8\xb2\330\xa7\330\xb1\x20\xd9\210\40\331\x86\xd9\x87\330\265\xd8\xaf", "\xd8\xaf\331\210\331\207\330\262\xd8\247\330\261"], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == "\60\60" ? '' : "\x20\xd9\210\x20") : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku; goto ewymsmkkiksgwysk; case "\155\155": $uusmaiomayssaecw = ["\331\x81\xd8\261\xd9\210\xd8\xb1\xd8\257\333\214\331\206", "\xd8\xa7\330\261\330\257\333\214\xd8\250\xd9\x87\330\xb4\330\xaa", "\330\256\xd8\xb1\xd8\xaf\xd8\247\xd8\257", "\xd8\252\333\214\xd8\xb1", "\xd9\205\330\xb1\330\257\xd8\247\xd8\257", "\330\264\xd9\207\xd8\xb1\xdb\x8c\xd9\210\xd8\xb1", "\xd9\x85\331\x87\xd8\261", "\xd8\242\330\250\xd8\xa7\331\206", "\330\242\330\xb0\xd8\xb1", "\xd8\xaf\333\214", "\330\250\331\x87\331\x85\331\x86", "\330\xa7\xd8\xb3\331\201\xd9\x86\330\257"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto ewymsmkkiksgwysk; case "\x72\162": $uusmaiomayssaecw = ["\333\x8c\xda\xa9", "\330\257\331\210", "\xd8\xb3\331\x87", "\xda\206\331\207\xd8\247\xd8\261", "\xd9\276\xd9\x86\xd8\xac", "\xd8\264\xd8\xb4", "\331\x87\xd9\201\xd8\xaa", "\331\x87\xd8\xb4\330\252", "\xd9\x86\331\x87", "\330\xaf\xd9\207", "\333\x8c\330\247\330\xb2\330\xaf\331\207", "\xd8\257\xd9\210\xd8\xa7\330\262\330\257\xd9\x87", "\330\xb3\xdb\x8c\xd8\262\330\xaf\331\x87", "\332\206\331\x87\330\247\330\261\330\257\331\207", "\331\276\330\247\xd9\206\xd8\262\330\xaf\331\207", "\xd8\264\330\xa7\331\x86\xd8\xb2\xd8\xaf\xd9\207", "\331\x87\331\x81\xd8\xaf\331\207", "\331\x87\330\xac\xd8\xaf\xd9\x87", "\331\206\331\x88\330\xb2\xd8\257\331\x87", "\xd8\xa8\333\214\xd8\263\330\252", "\330\250\333\214\330\263\xd8\xaa\40\xd9\210\40\333\214\xda\xa9", "\330\250\xdb\214\330\263\330\xaa\40\331\x88\x20\xd8\257\xd9\x88", "\330\250\333\x8c\330\263\xd8\xaa\40\xd9\210\40\xd8\xb3\331\207", "\xd8\xa8\333\214\330\xb3\xd8\252\x20\331\x88\40\xda\x86\331\x87\330\xa7\xd8\261", "\xd8\250\xdb\214\xd8\xb3\330\xaa\40\331\210\x20\331\276\xd9\x86\330\254", "\xd8\xa8\xdb\x8c\xd8\263\xd8\xaa\40\331\210\x20\330\xb4\xd8\264", "\xd8\xa8\xdb\214\330\xb3\xd8\252\40\xd9\x88\x20\331\x87\331\201\330\xaa", "\330\250\333\214\330\263\xd8\252\x20\xd9\x88\x20\xd9\207\330\264\330\252", "\330\xa8\xdb\214\330\xb3\xd8\252\x20\xd9\x88\40\331\206\xd9\207", "\330\263\333\x8c", "\330\263\xdb\214\x20\331\x88\40\xdb\x8c\xda\xa9"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto ewymsmkkiksgwysk; case "\x72\x68": $uusmaiomayssaecw = [__("\123\141\x74\x75\x72\144\141\x79", PR__PKG__JALALI), __("\123\165\156\144\141\171", PR__PKG__JALALI), __("\115\x6f\156\144\141\x79", PR__PKG__JALALI), __("\124\x75\x65\x73\144\141\171", PR__PKG__JALALI), __("\127\145\x64\x6e\x65\x73\x64\141\x79", PR__PKG__JALALI), __("\x54\150\x75\162\163\144\x61\171", PR__PKG__JALALI), __("\106\162\x69\144\x61\x79", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm]; goto ewymsmkkiksgwysk; case "\163\x68": $uusmaiomayssaecw = [__("\123\156\141\153\145", PR__PKG__JALALI), __("\110\157\x72\163\x65", PR__PKG__JALALI), __("\x47\157\141\164", PR__PKG__JALALI), __("\x4d\157\156\153\x65\x79", PR__PKG__JALALI), __("\122\157\157\163\x74\x65\162", PR__PKG__JALALI), __("\x44\157\147", PR__PKG__JALALI), __("\x50\x69\x67", PR__PKG__JALALI), __("\122\141\164", PR__PKG__JALALI), __("\x4f\170", PR__PKG__JALALI), __("\124\x69\147\145\162", PR__PKG__JALALI), __("\x52\x61\142\x62\151\164", PR__PKG__JALALI), __("\104\x72\x61\147\x6f\156", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12]; goto ewymsmkkiksgwysk; case "\155\142": $uusmaiomayssaecw = ["\330\255\331\x85\331\x84", "\xd8\xab\xd9\210\xd8\xb1", "\330\254\331\x88\330\262\330\247", "\330\xb3\xd8\xb1\xd8\267\xd8\247\331\206", "\xd8\247\xd8\xb3\xd8\xaf", "\xd8\263\xd9\x86\330\250\331\204\331\207", "\xd9\205\333\214\330\xb2\xd8\247\xd9\x86", "\xd8\xb9\xd9\x82\xd8\261\xd8\xa8", "\331\x82\xd9\210\xd8\263", "\xd8\xac\xd8\257\333\x8c", "\xd8\xaf\331\x84\331\210", "\330\xad\331\210\330\252"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto ewymsmkkiksgwysk; case "\x66\x66": $uusmaiomayssaecw = [__("\x53\160\162\151\x6e\x67", PR__PKG__JALALI), __("\123\x75\155\x6d\x65\x72", PR__PKG__JALALI), __("\x41\165\164\165\x6d\156", PR__PKG__JALALI), __("\127\151\156\x74\x65\162", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)]; goto ewymsmkkiksgwysk; case "\x6b\x6d": $uusmaiomayssaecw = ["\331\201\330\xb1", "\330\xa7\xd8\xb1", "\xd8\256\xd8\xb1", "\xd8\xaa\333\x8c\342\x80\x8d", "\331\x85\xd8\261", "\xd8\264\xd9\207\xe2\x80\215", "\331\x85\331\x87\342\200\215", "\xd8\xa2\xd8\250\xe2\x80\215", "\330\xa2\330\xb0", "\xd8\257\xdb\214", "\330\250\331\x87\342\x80\x8d", "\330\xa7\xd8\xb3\342\200\x8d"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto ewymsmkkiksgwysk; case "\153\x68": $uusmaiomayssaecw = [__("\123\141\164", PR__PKG__JALALI), __("\x53\x75\156", PR__PKG__JALALI), __("\115\157\156", PR__PKG__JALALI), __("\x54\x75\145", PR__PKG__JALALI), __("\x57\x65\144", PR__PKG__JALALI), __("\x54\x68\x75", PR__PKG__JALALI), __("\x46\162\151", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm]; goto ewymsmkkiksgwysk; default: $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm; } cmegwsegsosyqcai: ewymsmkkiksgwysk: giaacoqqqsekcayy: } syiqkaasoueowwui: return $ugkymqicywakcemw === '' ? $uomewyckeuqoqocu : implode($ugkymqicywakcemw, $uomewyckeuqoqocu); } public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = "\145\x6e", $eqmcogmcemgigckm = "\xd9\xab") { } public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '') { [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode("\137", $this->ieacowssemeuewag($mggkikkcoygokucs . "\x5f" . $gguqkwucwcyqgwem . "\x5f" . $asgqasceaecqgouu)); $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334]; if ($mggkikkcoygokucs > 1600) { goto ooeausyowguqicuo; } $yywykyucyekisogg = 0; $mggkikkcoygokucs -= 621; goto egyyiccaeeiooaua; ooeausyowguqicuo: $yywykyucyekisogg = 979; $mggkikkcoygokucs -= 1600; egyyiccaeeiooaua: $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs; $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1]; $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053); $immmocykksywgkqu %= 12053; $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461); $immmocykksywgkqu %= 1461; $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365); if (!($immmocykksywgkqu > 365)) { goto scisgsyemmsekgos; } $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365; scisgsyemmsekgos: if ($immmocykksywgkqu < 186) { goto cewmoqyysgsmuiya; } $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30); $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30; goto igooksugieceoege; cewmoqyysgsmuiya: $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31); $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31; igooksugieceoege: return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs; } public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '') { [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode("\137", $this->ieacowssemeuewag($yywykyucyekisogg . "\137" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs)); if ($yywykyucyekisogg > 979) { goto omqiayeucoioqoao; } $mggkikkcoygokucs = 621; goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $mggkikkcoygokucs = 1600; $yywykyucyekisogg -= 979; ugqaaewwmkocwwgy: $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186); $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097); $immmocykksywgkqu %= 146097; if (!($immmocykksywgkqu > 36524)) { goto kqgcyoscsusgoaqi; } $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524); $immmocykksywgkqu %= 36524; if (!($immmocykksywgkqu >= 365)) { goto wgewmqieuamsoayy; } $immmocykksywgkqu++; wgewmqieuamsoayy: kqgcyoscsusgoaqi: $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461); $immmocykksywgkqu %= 1461; $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365); if (!($immmocykksywgkqu > 365)) { goto ueigkucgaucgeimc; } $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365; ueigkucgaucgeimc: $asgqasceaecqgouu = $immmocykksywgkqu + 1; $gguqkwucwcyqgwem = 0; $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) { if (!($asgqasceaecqgouu <= $mokouoooiwsmcmiu)) { goto wakmayaoqoskekqy; } goto sggawugoykqcmsug; wakmayaoqoskekqy: $asgqasceaecqgouu -= $mokouoooiwsmcmiu; wkeuuycukmuqiaom: } sggawugoykqcmsug: return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu; } public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = "\146\141") { $T_sec = 0; $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak)); $ocogsiouoiuuguym = explode("\137", date("\x48\137\x69\x5f\152\137\x6e\137\117\x5f\x50\137\163\137\x77\x5f\x59", $msqmoegqiqqmesci)); [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]); $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185; $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0; $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa); $qcgkuqesqqymcuui = ''; $ciyackuwsqkoqese = 0; asiqwuoswmigcaki: if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) { goto qmuwoecuacmkwgem; } $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1); if (!($uskwgmsuqowaosow == "\134")) { goto mwsmsguqqkcwiiuk; } $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1); goto owmuceyswmgueasi; mwsmsguqqkcwiiuk: switch ($uskwgmsuqowaosow) { case "\x45": case "\122": case "\x78": case "\130": $qcgkuqesqqymcuui .= "\x68\164\164\160\x3a\57\57\x6a\144\x66\56\x73\143\162\x2e\151\x72"; goto eeauyscekuckoues; case "\x42": case "\145": case "\x67": case "\107": case "\150": case "\x49": case "\124": case "\x75": case "\x5a": $qcgkuqesqqymcuui .= date($uskwgmsuqowaosow, $msqmoegqiqqmesci); goto eeauyscekuckoues; case "\141": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\120\x4d", PR__PKG__JALALI) : __("\101\115", PR__PKG__JALALI); goto eeauyscekuckoues; case "\101": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\x42\145\x66\x6f\x72\x65\40\x6e\157\x6f\156", PR__PKG__JALALI) : __("\101\x66\164\145\x72\x20\x6e\157\x6f\x6e", PR__PKG__JALALI); goto eeauyscekuckoues; case "\x62": $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1; goto eeauyscekuckoues; case "\143": $qcgkuqesqqymcuui .= $j_y . "\x2f" . $j_m . "\x2f" . $j_d . "\x20\xd8\x8c" . $ocogsiouoiuuguym[0] . "\x3a" . $ocogsiouoiuuguym[1] . "\72" . $ocogsiouoiuuguym[6] . "\40" . $ocogsiouoiuuguym[5]; goto eeauyscekuckoues; case "\x43": $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100); goto eeauyscekuckoues; case "\x64": $qcgkuqesqqymcuui .= $j_d < 10 ? "\60" . $j_d : $j_d; goto eeauyscekuckoues; case "\104": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6b\150" => $ocogsiouoiuuguym[7]], "\40"); goto eeauyscekuckoues; case "\x66": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\146\146" => $j_m], "\x20"); goto eeauyscekuckoues; case "\x4d": case "\x46": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\155\155" => $j_m], "\40"); goto eeauyscekuckoues; case "\x48": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0]; goto eeauyscekuckoues; case "\x69": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1]; goto eeauyscekuckoues; case "\152": $qcgkuqesqqymcuui .= $j_d; goto eeauyscekuckoues; case "\112": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x72\162" => $j_d], "\40"); goto eeauyscekuckoues; case "\x6b": $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau); goto eeauyscekuckoues; case "\113": $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau); goto eeauyscekuckoues; case "\x6c": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\162\150" => $ocogsiouoiuuguym[7]], "\40"); goto eeauyscekuckoues; case "\114": $qcgkuqesqqymcuui .= $iogigmsgiwaecekq; goto eeauyscekuckoues; case "\155": $qcgkuqesqqymcuui .= $j_m > 9 ? $j_m : "\60" . $j_m; goto eeauyscekuckoues; case "\156": $qcgkuqesqqymcuui .= $j_m; goto eeauyscekuckoues; case "\116": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] + 1; goto eeauyscekuckoues; case "\157": $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1; $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo; $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y); goto eeauyscekuckoues; case "\117": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4]; goto eeauyscekuckoues; case "\x70": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6d\142" => $j_m], "\40"); goto eeauyscekuckoues; case "\x50": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5]; goto eeauyscekuckoues; case "\161": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\x68" => $j_y], "\x20"); goto eeauyscekuckoues; case "\x51": $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo; goto eeauyscekuckoues; case "\x72": $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(["\x72\x68" => $ocogsiouoiuuguym[7], "\x6d\155" => $j_m]); $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . "\x3a" . $ocogsiouoiuuguym[1] . "\x3a" . $ocogsiouoiuuguym[6] . "\40" . $ocogsiouoiuuguym[4] . "\40" . $uusmaiomayssaecw["\162\x68"] . "\xd8\214\40" . $j_d . "\x20" . $uusmaiomayssaecw["\155\155"] . "\x20" . $j_y; goto eeauyscekuckoues; case "\163": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6]; goto eeauyscekuckoues; case "\123": $qcgkuqesqqymcuui .= "\330\247\xd9\x85"; goto eeauyscekuckoues; case "\164": $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29; goto eeauyscekuckoues; case "\x55": $qcgkuqesqqymcuui .= $msqmoegqiqqmesci; goto eeauyscekuckoues; case "\166": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\x73" => $j_y % 100], "\x20"); goto eeauyscekuckoues; case "\126": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\163" => $j_y], "\40"); goto eeauyscekuckoues; case "\167": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1; goto eeauyscekuckoues; case "\127": $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7; if (!($aaeqayuykcqoqiuu < 0)) { goto msemumccgceyugmg; } $aaeqayuykcqoqiuu += 7; msemumccgceyugmg: $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7); if ($aaeqayuykcqoqiuu < 4) { goto qoqskyuuwueqkquk; } if (!($mqwsmsykyouoomgm < 1)) { goto wagqgeqymeqoeuyi; } $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52; wagqgeqymeqoeuyi: goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $mqwsmsykyouoomgm++; iwsuawwqomaowuii: $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq; if (!($ecsiqegmcewekssu == 7)) { goto wcugqegqsuuuwqao; } $ecsiqegmcewekssu = 0; wcugqegqsuuuwqao: $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? "\x30\x31" : ($mqwsmsykyouoomgm < 10 ? "\60" . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm); goto eeauyscekuckoues; case "\171": $qcgkuqesqqymcuui .= substr($j_y, 2, 2); goto eeauyscekuckoues; case "\x59": $qcgkuqesqqymcuui .= $j_y; goto eeauyscekuckoues; case "\x7a": $qcgkuqesqqymcuui .= $seaogmggwosgceoo; goto eeauyscekuckoues; default: $qcgkuqesqqymcuui .= $uskwgmsuqowaosow; } eogwckcymuugikuy: eeauyscekuckoues: owmuceyswmgueasi: $ciyackuwsqkoqese++; goto asiqwuoswmigcaki; qmuwoecuacmkwgem: return $mcmaiqckgiuqayau != "\145\156" ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, "\146\x61", "\56") : $qcgkuqesqqymcuui; } public function ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\x65\156", $eqmcogmcemgigckm = "\331\xab") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $aamkqmkgsaqmcuao, $eqmcogmcemgigckm); } public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = "\x41\x73\151\x61\57\124\x65\150\162\x61\x6e", $seieuccuyuucuigq = "\x65\x6e") : array { $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak); $ocogsiouoiuuguym = explode("\x5f", $this->date("\106\137\107\137\x69\137\x6a\137\154\137\x6e\x5f\x73\137\x77\137\131\x5f\172", $msqmoegqiqqmesci, $seieuccuyuucuigq)); return ["\163\145\x63\157\x6e\x64\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), "\155\x69\x6e\x75\x74\x65\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), "\x68\x6f\165\162\163" => $ocogsiouoiuuguym[1], "\155\144\141\x79" => $ocogsiouoiuuguym[3], "\x77\144\x61\171" => $ocogsiouoiuuguym[7], "\x6d\x6f\156" => $ocogsiouoiuuguym[5], "\x79\145\x61\162" => $ocogsiouoiuuguym[8], "\x79\144\141\x79" => $ocogsiouoiuuguym[9], "\167\145\145\x6b\144\141\171" => $ocogsiouoiuuguym[4], "\155\x6f\x6e\164\x68" => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)]; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = "\101\163\x69\141\x2f\124\145\150\x72\x61\x6e") { if (!($umusyyqoeegoyiqs != "\x6c\157\x63\141\154")) { goto ciykoyeioqgyaeqo; } date_default_timezone_set($umusyyqoeegoyiqs); ciykoyeioqgyaeqo: $cqgoimumaewouews = 0; if ($ackqauiusooswkmw === '') { goto kkumywowcoycymeo; } [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\137", $this->ieacowssemeuewag($ackqauiusooswkmw . "\x5f" . $gcisockiummsmcag . "\137" . $piuesceqiguuskme . "\137" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg)); if ($gcisockiummsmcag === '') { goto wyuemgggaqogsmsq; } if ($piuesceqiguuskme === '') { goto oomguqikqokqwgku; } if ($sseomcuueskqeayq === '') { goto mugqyyeayeyggqqk; } $ocogsiouoiuuguym = explode("\137", $this->date("\131\x5f\x6a", '', "\x65\156")); if ($ikiykmwgkuqwcmcs === '') { goto emmsycooskoqmgeg; } if ($yywykyucyekisogg === '') { goto mqicocmqegwukkwg; } [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu); qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem); ouamogymawucwswu: goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme); acsqgiuageaasiyy: goto samwkqgwouggsguc; oomguqikqokqwgku: $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag); samwkqgwouggsguc: goto guykyqecgswcsmws; wyuemgggaqogsmsq: $cqgoimumaewouews = mktime($ackqauiusooswkmw); guykyqecgswcsmws: goto miweggwqeiaeweia; kkumywowcoycymeo: $cqgoimumaewouews = time(); miweggwqeiaeweia: return $cqgoimumaewouews; } }
