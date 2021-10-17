<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616cb18b9f53d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Translator extends Container { const SEPARATOR = "\56"; const PERSIAN_NUMBERS = ["\xd9\xaa", "\333\xb0", "\xdb\261", "\333\xb2", "\333\xb3", "\333\xb4", "\333\xb5", "\333\xb6", "\xdb\267", "\xdb\xb8", "\333\xb9", self::SEPARATOR => self::SEPARATOR]; const ENGLISH_NUMBERS = ["\x25", "\x30", "\61", "\x32", "\x33", "\x34", "\x35", "\x36", "\x37", "\70", "\x39", self::SEPARATOR => self::SEPARATOR]; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\162\141\x6e\163\137\167\x6f\162\x64"), [$this, "\164\x72\x61\156\x73\154\x61\164\x65"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\x72\141\x6e\x73\137\156\165\x6d\142\145\x72"), [$this, "\151\145\x61\143\x6f\x77\x73\x73\x65\x6d\145\x75\145\x77\x61\147"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao) { goto geyiosucqswaeasw; ccgsycueagwegqeu: switch ($aamkqmkgsaqmcuao) { case "\x66\x61": case "\146\x61\x5f\x49\x52": goto okuqsqaiwwiigmyu; okuqsqaiwwiigmyu: $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); goto ksiwgckusukisueg; sgkqgucguyccaaki: goto gaskcgoeywuyukke; goto omuemegmkesqgwys; ksiwgckusukisueg: $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto sgkqgucguyccaaki; omuemegmkesqgwys: case "\x65\x6e": case "\x65\x6e\x5f\125\123": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto gaskcgoeywuyukke; } goto gmeiuoeewucukque; sayqggaieocmskko: gaskcgoeywuyukke: goto qmguoqeawegcoeoa; cmsiuimsiycomyay: $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc(); goto qmqmskywcgiqgygm; geyiosucqswaeasw: if ($aamkqmkgsaqmcuao) { goto ewsigoeswimiueqe; } goto cmsiuimsiycomyay; qmqmskywcgiqgygm: ewsigoeswimiueqe: goto ccgsycueagwegqeu; qmguoqeawegcoeoa: return $cmwygeyygwqaemaq; goto ycecaauekkiqacuu; gmeiuoeewucukque: gqaqamewqeaqwcia: goto sayqggaieocmskko; ycecaauekkiqacuu: } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\331\212", "\xd9\203", "\330\251", "\xd9\244", "\xd9\xa5", "\xd9\xa6"], ["\333\214", "\332\251", "\331\207", "\333\xb4", "\333\265", "\xdb\266"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\57\50\77\x3a\x26\43\x5c\144\x7b\x32\54\x34\x7d\73\x29\x7c\x28\x5c\x64\53\133\134\56\134\144\x5d\52\x29\x7c\x28\x3f\72\x5b\x61\x2d\x7a\135\50\77\x3a\x5b\x5c\x78\x30\60\55\x5c\x78\63\102\x5c\170\63\x44\x2d\x5c\x78\67\x46\135\174\74\x5c\x73\x2a\133\136\x3e\135\53\76\51\52\51\174\74\x5c\x73\52\x5b\x5e\76\x5d\53\x3e\x2f\151", [$this, "\x73\163\161\157\161\171\163\x75\x75\x61\167\145\x6f\163\x77\x61"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { goto igyesgemqesackws; igyesgemqesackws: $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false); goto wiaymoucakyaikii; gaouaiemokqqgssw: $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess); goto wqwmuuicoqigqwyc; wiaymoucakyaikii: if ($eusockqasqqmoess !== false) { goto ceaamccscgcmqgka; } goto ociesuicgmkekcue; qiikwossequwiuom: ceaamccscgcmqgka: goto gaouaiemokqqgssw; oqgymyiwckkwueuw: return $eusockqasqqmoess; goto qywkykqkeeuccoui; ymucaguacemwsgsi: goto omumkeywqqogwwue; goto qiikwossequwiuom; wqwmuuicoqigqwyc: omumkeywqqogwwue: goto oqgymyiwckkwueuw; ociesuicgmkekcue: $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0); goto ymucaguacemwsgsi; qywkykqkeeuccoui: } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\141", $eqmcogmcemgigckm = "\331\xab") { goto yqqseqskcqeqkacm; uoewiggumomegksg: $uusmaiomayssaecw[self::SEPARATOR] = $eqmcogmcemgigckm; goto sockocsycmkaeosg; sockocsycmkaeosg: $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ["\x66\141", "\x66\x61\x5f\x49\122"]); goto ugkwqaywmwqucoeo; yqqseqskcqeqkacm: $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS; goto ywokggauuiosegog; ywokggauuiosegog: $uusmaiomayssaecw = self::PERSIAN_NUMBERS; goto uoewiggumomegksg; ugkwqaywmwqucoeo: return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); goto syisomgawcsqeemk; syisomgawcsqeemk: } }
