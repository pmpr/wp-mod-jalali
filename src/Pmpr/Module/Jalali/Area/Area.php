<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d97abf253             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; class Area extends Common { public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Front::symcgieuakksimmu(); } else { Admin::symcgieuakksimmu(); } } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x67\145\164\137\x61\x67\145", [$this, "\x67\x63\155\x65\x61\155\161\x61\147\x61\157\165\x69\163\153\x63"], 10, 2)->aqaqisyssqeomwom("\141\144\144\x5f\x79\x65\141\162", [$this, "\x6b\x69\x73\145\167\x71\171\x79\165\161\x71\161\x77\x65\x73\151"], 10, 2)->aqaqisyssqeomwom("\x61\x64\x64\137\155\157\x6e\x74\150", [$this, "\x67\x61\x65\x63\145\153\x79\x65\x6f\x69\x67\x77\167\167\x73\x63"], 10, 2)->aqaqisyssqeomwom("\143\157\156\166\x65\162\x74\x5f\144\141\164\145", [$this, "\155\151\153\x61\x69\165\163\x67\x69\155\157\145\153\x71\x79\x65"], 10, 3)->aqaqisyssqeomwom("\164\x72\x61\156\163\137\167\157\162\144", [$this, "\x75\171\x67\145\x69\x6b\x77\x6d\x77\x6d\x69\167\x73\x71\143\x61"], 10, 2)->aqaqisyssqeomwom("\x74\162\x61\156\x73\137\x64\141\x74\x65\x74\151\x6d\145", [$this, "\155\151\x6b\141\151\165\163\x67\151\x6d\x6f\x65\x6b\161\x79\145"], 10, 3)->aqaqisyssqeomwom("\x74\x72\141\x6e\163\x5f\156\x75\155\142\145\x72", [$this, "\x69\x65\141\x63\157\167\163\x73\x65\x6d\x65\165\145\x77\141\x67"], 10, 3); } public function gcmeamqagaouiskc($usqcwoasmiiomgks, bool $ksskkagoieiyuuwe = true) { $asygkgscoucyqgus = 0; if ($usqcwoasmiiomgks) { $usqcwoasmiiomgks = $this->caokeucsksukesyo()->owgcciayoweymuws()->ucymkkoowkqeauga($usqcwoasmiiomgks, "\57"); $ggkaciewmeqmgckg = $this->caokeucsksukesyo()->owgcciayoweymuws()->ucymkkoowkqeauga($usqcwoasmiiomgks, "\55"); if ($ksskkagoieiyuuwe) { $ggkaciewmeqmgckg = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($usqcwoasmiiomgks); $ggkaciewmeqmgckg = $this->uacmswwoiqckokew()->iiemucyoiawywqmw($ggkaciewmeqmgckg, 1, 1)[0]; } $cugkqygegsymsyic = date("\131"); $asygkgscoucyqgus = $cugkqygegsymsyic - $ggkaciewmeqmgckg; if ($asygkgscoucyqgus < 1) { $asygkgscoucyqgus = 1; } } return $asygkgscoucyqgus; } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!$saqmwwmqiwmkiwaa) { $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq(); } if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return parent::mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa, $locale); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie) { $ykiumkqgooueeewk = explode("\55", $this->uacmswwoiqckokew()->date("\x59\x2d\155\x2d\144", $yiuogaeewyockeak, "\145\x6e")); $ykiumkqgooueeewk[0] += $eqgoocgaqwqcimie; return strtotime($this->uacmswwoiqckokew()->iiemucyoiawywqmw($ykiumkqgooueeewk[0], $ykiumkqgooueeewk[1], $ykiumkqgooueeewk[2], "\x2d")); } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie) { $ykiumkqgooueeewk = explode("\55", $this->uacmswwoiqckokew()->date("\x59\x2d\x6d\x2d\144", $yiuogaeewyockeak, "\145\x6e")); $ymccyoouuqkaacik = $ykiumkqgooueeewk[1] + $eqgoocgaqwqcimie; $ykiumkqgooueeewk[0] += (int) ($ymccyoouuqkaacik / 12); $ykiumkqgooueeewk[1] = $ymccyoouuqkaacik % 12; return strtotime($this->uacmswwoiqckokew()->iiemucyoiawywqmw($ykiumkqgooueeewk[0], $ykiumkqgooueeewk[1], $ykiumkqgooueeewk[2], "\55")); } }
