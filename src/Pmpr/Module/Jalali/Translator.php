<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d97abf253             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\x2e"; const mguscayoesieyygm = ["\xd9\xaa", "\333\xb0", "\333\261", "\333\262", "\xdb\263", "\xdb\264", "\333\265", "\333\xb6", "\333\267", "\xdb\270", "\xdb\271", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\45", "\60", "\x31", "\62", "\x33", "\x34", "\x35", "\66", "\x37", "\70", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\164\x72\x61\x6e\163\137\x77\157\162\x64", [$this, "\x74\x72\x61\x6e\x73\154\x61\x74\x65"], 10, 2)->aqaqisyssqeomwom("\x74\162\x61\156\x73\137\x6e\165\x6d\x62\x65\162", [$this, "\x69\x65\141\x63\157\x77\x73\163\145\155\145\165\x65\167\141\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($this->ksskkagoieiyuuwe($locale)) { $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); } else { $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); } return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\xd9\x8a", "\331\203", "\330\251", "\331\244", "\xd9\xa5", "\331\xa6"], ["\333\x8c", "\xda\xa9", "\331\x87", "\xdb\xb4", "\333\265", "\xdb\xb6"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { if ($this->ksskkagoieiyuuwe()) { $sociqikgoyemqaac = preg_replace_callback("\57\50\77\x3a\x26\43\x5c\x64\x7b\62\x2c\64\175\73\51\x7c\50\134\x64\53\x5b\x5c\56\134\144\135\x2a\51\174\50\77\x3a\x5b\141\55\172\135\50\77\x3a\133\x5c\x78\x30\60\x2d\x5c\x78\63\102\134\x78\x33\104\55\134\x78\x37\x46\135\x7c\74\x5c\x73\x2a\133\136\76\135\53\76\x29\52\x29\x7c\x3c\134\163\x2a\133\136\76\135\x2b\x3e\x2f\x69", [$this, "\163\163\x71\157\161\x79\163\x75\165\141\167\x65\x6f\163\x77\141"], $sociqikgoyemqaac); } return $sociqikgoyemqaac; } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $meyiiwcswqmuggyg[1] ?? false; if ($eusockqasqqmoess !== false) { $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); } else { $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); } return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = '', $eqmcogmcemgigckm = "\x2c") { $ksskkagoieiyuuwe = $this->ksskkagoieiyuuwe($locale); if ($ksskkagoieiyuuwe) { $eqmcogmcemgigckm = "\331\xab"; } $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
