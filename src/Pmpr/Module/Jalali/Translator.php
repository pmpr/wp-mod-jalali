<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b29aa9897c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\56"; const mguscayoesieyygm = ["\xd9\xaa", "\333\xb0", "\xdb\261", "\xdb\xb2", "\333\263", "\333\264", "\xdb\265", "\xdb\266", "\333\xb7", "\333\270", "\333\xb9", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\x25", "\x30", "\x31", "\62", "\x33", "\x34", "\65", "\x36", "\67", "\x38", "\x39", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\164\162\141\x6e\163\137\167\x6f\x72\144", [$this, "\164\162\141\x6e\163\154\x61\164\145"], 10, 2)->aqaqisyssqeomwom("\164\x72\x61\x6e\x73\x5f\x6e\165\155\x62\x65\x72", [$this, "\x69\145\141\x63\157\167\x73\x73\145\155\x65\165\x65\167\141\147"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto wiysogeqqwgioyka; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); wiysogeqqwgioyka: switch ($locale) { case "\x66\x61": case "\146\141\x5f\111\x52": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto skkamseieeusycye; case "\x65\156": case "\145\x6e\x5f\125\x53": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto skkamseieeusycye; } cgiscsqwwgqqaeqi: skkamseieeusycye: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\331\212", "\331\203", "\330\251", "\xd9\244", "\331\xa5", "\xd9\xa6"], ["\333\x8c", "\xda\251", "\xd9\x87", "\xdb\264", "\xdb\265", "\xdb\266"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\x2f\50\x3f\x3a\x26\43\134\144\x7b\62\54\64\x7d\73\51\174\x28\134\144\53\x5b\x5c\x2e\x5c\x64\135\52\x29\x7c\x28\x3f\x3a\133\x61\55\172\135\50\77\x3a\133\x5c\170\x30\60\55\x5c\x78\x33\x42\x5c\170\x33\x44\x2d\134\x78\x37\x46\x5d\174\74\134\163\x2a\x5b\136\76\135\x2b\x3e\x29\x2a\x29\x7c\x3c\134\x73\x2a\x5b\x5e\76\135\x2b\76\57\x69", [$this, "\163\x73\161\157\x71\171\163\165\x75\141\167\145\157\x73\x77\141"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $meyiiwcswqmuggyg[1] ?? false; if ($eusockqasqqmoess !== false) { goto syiqkaasoueowwui; } $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); goto giaacoqqqsekcayy; syiqkaasoueowwui: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); giaacoqqqsekcayy: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\141", $eqmcogmcemgigckm = "\331\xab") { if ($locale) { goto ewymsmkkiksgwysk; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); ewymsmkkiksgwysk: $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\x66\x61", "\146\x61\x5f\111\122"], true); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
