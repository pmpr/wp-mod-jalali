<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0894658f8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Translator extends Container { const gomimeqaqekuysya = "\x2e"; const mguscayoesieyygm = ["\331\xaa", "\333\260", "\333\xb1", "\xdb\xb2", "\xdb\263", "\333\264", "\333\265", "\333\266", "\xdb\xb7", "\xdb\270", "\333\271", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\x25", "\x30", "\x31", "\62", "\x33", "\64", "\x35", "\66", "\67", "\70", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\162\x61\x6e\163\x5f\x77\157\162\x64"), [$this, "\164\162\141\156\163\154\141\x74\x65"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\x72\x61\x6e\x73\x5f\x6e\165\x6d\x62\145\162"), [$this, "\151\x65\141\x63\x6f\167\x73\x73\x65\155\145\165\145\x77\141\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto ykomgumacooyomsk; } $locale = DecoratorI18N::iyouigcsiacgwksc(); ykomgumacooyomsk: switch ($locale) { case "\x66\x61": case "\146\141\137\111\x52": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto mqkmcysgoiaouiwm; case "\145\156": case "\145\156\137\125\x53": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto mqkmcysgoiaouiwm; } kosaqwikueyksqmw: mqkmcysgoiaouiwm: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\xd9\x8a", "\xd9\203", "\330\251", "\331\xa4", "\331\xa5", "\xd9\246"], ["\333\x8c", "\xda\xa9", "\xd9\x87", "\333\264", "\333\265", "\333\xb6"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\57\50\77\x3a\x26\x23\134\x64\x7b\62\54\64\175\x3b\x29\x7c\50\x5c\x64\53\x5b\134\56\134\144\135\x2a\51\x7c\50\77\x3a\133\141\55\172\x5d\50\x3f\x3a\x5b\134\x78\60\x30\x2d\134\170\63\x42\x5c\x78\x33\x44\x2d\x5c\x78\67\106\135\x7c\x3c\134\163\x2a\x5b\x5e\76\135\x2b\76\51\x2a\51\x7c\x3c\134\163\52\x5b\x5e\x3e\135\53\x3e\x2f\151", [$this, "\x73\x73\161\x6f\161\171\163\x75\165\x61\x77\x65\157\163\x77\141"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false); if ($eusockqasqqmoess !== false) { goto gicyayswqyuoekcq; } $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0); goto iikiiioqiyegyaak; gicyayswqyuoekcq: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); iikiiioqiyegyaak: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\141", $eqmcogmcemgigckm = "\331\253") { $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\x66\x61", "\x66\141\137\x49\x52"]); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
