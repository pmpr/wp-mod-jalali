<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400d5299a66             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Translator extends Container { const gomimeqaqekuysya = "\x2e"; const mguscayoesieyygm = ["\331\xaa", "\333\260", "\333\xb1", "\xdb\262", "\xdb\263", "\xdb\xb4", "\333\265", "\333\xb6", "\333\xb7", "\333\xb8", "\333\271", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\45", "\x30", "\x31", "\x32", "\x33", "\64", "\65", "\x36", "\x37", "\70", "\x39", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\x72\x61\156\163\x5f\x77\157\x72\x64"), [$this, "\x74\x72\x61\x6e\x73\x6c\141\x74\x65"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\x72\141\156\x73\x5f\156\x75\155\142\145\x72"), [$this, "\151\x65\x61\143\x6f\x77\x73\x73\145\x6d\x65\x75\145\x77\x61\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto ogqmesokykywseys; } $locale = DecoratorI18N::iyouigcsiacgwksc(); ogqmesokykywseys: switch ($locale) { case "\x66\141": case "\x66\141\x5f\x49\122": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto ykomgumacooyomsk; case "\145\156": case "\145\x6e\x5f\x55\x53": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto ykomgumacooyomsk; } mqkmcysgoiaouiwm: ykomgumacooyomsk: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\xd9\x8a", "\xd9\203", "\xd8\251", "\331\244", "\331\xa5", "\331\246"], ["\333\x8c", "\332\xa9", "\xd9\x87", "\xdb\xb4", "\333\265", "\333\xb6"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\x2f\50\77\x3a\x26\43\x5c\x64\173\x32\54\64\175\x3b\x29\x7c\x28\134\x64\53\x5b\134\56\x5c\144\135\52\51\x7c\50\77\x3a\x5b\141\x2d\x7a\x5d\50\77\72\x5b\x5c\170\x30\60\55\x5c\x78\63\x42\134\x78\x33\x44\55\x5c\x78\67\106\135\x7c\74\134\163\52\x5b\x5e\x3e\135\53\x3e\x29\52\51\174\74\134\163\52\x5b\x5e\x3e\135\53\76\x2f\151", [$this, "\x73\163\161\x6f\161\171\163\165\x75\x61\167\145\157\x73\x77\141"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false); if ($eusockqasqqmoess !== false) { goto kosaqwikueyksqmw; } $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); gicyayswqyuoekcq: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\x61", $eqmcogmcemgigckm = "\xd9\xab") { $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\146\x61", "\146\141\137\111\122"]); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }