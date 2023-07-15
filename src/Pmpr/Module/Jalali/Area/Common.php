<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b29aa9897c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Container; use Pmpr\Module\Jalali\Converter; use Pmpr\Module\Jalali\Setting; use Pmpr\Module\Jalali\Translator; abstract class Common extends Container { protected ?string $locale = null; protected Converter $converter; protected Translator $translator; public function __construct() { $this->converter = Converter::symcgieuakksimmu(); $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function uacmswwoiqckokew() : Converter { return $this->converter; } public function kkkikouyuqigocai() : Translator { return $this->translator; } public function gwyqggqwgaawqmww($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->eesmuqmoykoqawug($ewgwqamkygiqaawc); } public function beekyawqaoysgowq($ewgwqamkygiqaawc) { return $this->kkkikouyuqigocai()->nkyiiqgsgaeeecso($ewgwqamkygiqaawc); } public function uygeikwmwmiwsqca($cmwygeyygwqaemaq, $locale = "\x66\x61") { return $this->kkkikouyuqigocai()->translate($cmwygeyygwqaemaq, $locale); } public function mikaiusgimoekqye($cqgoimumaewouews, $saqmwwmqiwmkiwaa = null, $locale = '') { if (!("\x63" !== strtolower($saqmwwmqiwmkiwaa))) { goto meawswgwagoqgkye; } if (is_int($cqgoimumaewouews)) { goto cggowoquuiwqkyew; } if (is_numeric($cqgoimumaewouews)) { goto eequksumcoogyoem; } $yiuogaeewyockeak = strtotime($cqgoimumaewouews); goto uukumskkeggaowck; eequksumcoogyoem: $yiuogaeewyockeak = (int) $cqgoimumaewouews; uukumskkeggaowck: goto ocokwuuquaokmasc; cggowoquuiwqkyew: $yiuogaeewyockeak = $cqgoimumaewouews; ocokwuuquaokmasc: if ($saqmwwmqiwmkiwaa) { goto yiwiqaqmwiogawym; } $saqmwwmqiwmkiwaa = $this->caokeucsksukesyo()->eiwcuqigayigimak()->isiuiegyqiomccsw(); yiwiqaqmwiogawym: if (!$yiuogaeewyockeak) { goto goacqqsgaaigyuaw; } $cqgoimumaewouews = $this->uacmswwoiqckokew()->date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak, $this->ewamemuocoskqiuu($locale)); goacqqsgaaigyuaw: meawswgwagoqgkye: return $cqgoimumaewouews; } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\x61", $eqmcogmcemgigckm = "\331\xab") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($sociqikgoyemqaac, $locale, $eqmcogmcemgigckm); } }
