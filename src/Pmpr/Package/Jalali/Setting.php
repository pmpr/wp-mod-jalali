<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f58807cce             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Setting extends BaseClass { const ADMIN_FONT = "\x61\x64\155\x69\x6e\x5f\146\x6f\156\164"; const NUMBERS_DECIMAL_POINT = "\156\x75\x6d\x62\x65\162\x73\137\x64\x65\143\x69\155\x61\154\x5f\160\x6f\x69\156\164"; const NUMBERS_THOUSAND_SEPARATOR = "\156\165\x6d\x62\145\162\163\137\x74\150\x6f\x75\x73\141\156\x64\x5f\x73\x65\x70\x61\162\141\164\x6f\162"; const VIRASTAR_POST_TYPE_TARGETS = "\x76\151\162\x61\x73\x74\x61\162\x5f\160\x6f\x73\x74\x5f\x74\x79\x70\145\137\164\x61\x72\x67\145\x74\163"; const FRONT_CONVERT = "\x66\162\157\156\164\137\143\x6f\156\x76\145\x72\164"; const ADMIN_CONVERT = "\141\144\155\x69\x6e\137\143\157\156\166\x65\162\x74"; const _DATES = "\137\144\x61\164\145\x73"; const _LETTERS = "\x5f\154\x65\x74\x74\x65\162\163"; const _NUMBERS = "\x5f\x6e\165\x6d\x62\145\x72\x73"; const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES; const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS; const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS; const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES; const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS; const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS; const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\x70\145\x72\x6d\141\154\x69\x6e\x6b\x5f\x64\141\164\x65\x73"; public function __construct() { $this->name = self::akuociswqmoigkas(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x4a\141\x6c\141\154\x69", PR__PKG__JALALI); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\107\145\x6e\145\162\x61\154", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\137\156\165\x6d\142\145\x72\163", __("\116\x75\x6d\142\x65\162\x73", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\145\x63\151\x6d\x61\x6c\40\x73\171\155\142\x6f\154\72", PR__PKG__JALALI), ["\56" => sprintf("\45\163\40\50\56\x29", __("\x50\x6f\x69\x6e\164", PR__PKG__JALALI)), "\57" => sprintf("\x25\x73\x20\x28\57\51", __("\123\154\x61\x73\150", PR__PKG__JALALI)), "\47" => sprintf("\45\x73\40\x28\x27\51", __("\123\x69\x6e\x67\154\145\40\x71\165\x6f\164\x65", PR__PKG__JALALI)), "\x2c" => sprintf("\x25\x73\x20\x28\x2c\51", __("\103\157\155\x6d\x61", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\124\150\157\165\x73\141\x6e\144\40\163\x65\x70\x61\x72\x61\164\x6f\162\x20\163\x79\x6d\142\157\x6c\x3a", PR__PKG__JALALI), ["\x2c" => sprintf("\x25\163\x20\x28\54\51", __("\103\x6f\155\x6d\x61", PR__PKG__JALALI)), "\x2e" => sprintf("\x25\x73\40\50\56\x29", __("\120\x6f\x69\156\x74", PR__PKG__JALALI)), "\40" => sprintf("\45\x73\40\x28\x20\51", __("\x53\x70\141\143\x65", PR__PKG__JALALI)), "\x27" => sprintf("\x25\x73\x20\50\47\x29", __("\x53\x69\156\x67\x6c\145\x20\x71\165\x6f\164\145", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\x66\x72\157\x6e\164", __("\106\x72\x6f\x6e\164\x20\120\141\x67\145", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\120\x65\162\155\141\x6c\x69\x6e\x6b\x20\x44\141\164\145\x73", PR__PKG__JALALI), __("\103\x6f\156\166\145\x72\164\40\144\141\164\x65\x73\x20\x69\156\40\x70\145\x72\x6d\141\154\151\x6e\x6b\x2e", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\x61\x64\x6d\151\x6e", __("\x41\144\155\151\156\151\x73\x74\x72\141\164\x6f\x72\x20\x50\x61\x6e\145\x6c", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\x41\x64\x76\x61\x6e\143\145\144", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __("\106\x6f\156\164", PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\151\162\x61\x73\x74\x61\x72\40\x54\x61\x72\147\x65\164\40\x50\157\163\x74\40\x54\x79\x70\x65\163", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\157\x75\164\x70\165\164" => self::LABELS]), __("\103\150\x6f\x69\143\145\40\160\157\x73\164\x20\x74\x79\160\145\163\x20\171\157\165\x20\167\x61\x6e\164\40\145\156\x61\142\154\145\x20\166\151\x72\x61\163\x74\x61\162\x20\x66\x6f\x72\40\x74\150\x65\x6d\145\x2e", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR)); $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\141\x6c\141\x6c\151\x5f\x70\154\x75\x67\151\x6e\x73\x5f\164\141\142\137\155\x65\164\141\137\142\x6f\x78\145\163"), []); if (!$ysseeyogiaqmummy) { goto cecuyayqoioasumi; } $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\160\154\x75\x67\151\156\x73", __("\120\154\x75\x67\x69\x6e\163", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); cecuyayqoioasumi: } public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox { return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\x47\145\156\x65\162\x61\154", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\x44\141\164\145\40\x26\40\x54\x69\155\145", PR__PKG__JALALI), __("\103\x6f\156\x76\x65\x72\x74\x20\144\x61\164\145\163\40\151\156\40\x74\x68\151\x73\x20\163\x65\147\x6d\145\x6e\164", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\114\x65\164\x74\145\162\163", PR__PKG__JALALI), __("\103\x68\x61\x6e\147\x65\x20\x61\162\x61\x62\151\x63\40\154\x65\x74\x74\145\162\163\40\x74\x6f\x20\146\141\x72\163\x69", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\x4e\165\155\142\x65\x72\163", PR__PKG__JALALI), __("\103\157\156\166\145\x72\164\x20\156\165\x6d\x62\x65\162\x73\40\x69\156\x20\164\150\151\x73\x20\x73\x65\x67\155\x65\156\164", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR); } public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false) { if ($wmiquokeookimeiw) { goto qiaqsassksqiuyae; } $wakuamsqaqkweqmy = ["\126\141\172\x69\162" => "\x68\x74\x74\x70\x73\72\x2f\x2f\143\x64\x6e\152\163\x2e\143\154\x6f\165\144\x66\154\141\x72\145\56\143\x6f\x6d\57\141\x6a\141\x78\x2f\154\x69\142\x73\57\x76\141\172\x69\x72\x2d\146\157\156\164\x2f\62\67\56\x32\x2e\61\57\146\157\x6e\x74\x2d\x66\x61\143\x65\56\143\163\163", "\x4c\x6f\164\165\163" => "\x68\164\x74\160\x73\x3a\57\x2f\x63\x64\x6e\x2e\x66\157\156\x74\143\x64\x6e\56\x69\162\57\x46\x6f\x6e\x74\57\x50\145\162\163\151\x61\x6e\57\x4c\x6f\x74\165\x73\x2f\114\x6f\164\165\x73\56\x63\x73\x73", "\131\x65\x6b\141\x6e" => "\x68\x74\x74\160\x73\x3a\x2f\57\143\x64\156\x2e\146\x6f\156\164\143\144\156\x2e\151\162\57\106\x6f\x6e\164\x2f\x50\x65\x72\163\151\x61\156\x2f\x59\x65\153\141\x6e\x2f\131\145\153\141\x6e\56\143\163\163", "\x53\x61\150\x65\154" => "\150\164\x74\160\x73\72\57\x2f\143\144\x6e\x2e\146\x6f\x6e\x74\x63\144\x6e\56\x69\162\x2f\106\x6f\x6e\164\57\x50\145\162\163\151\x61\x6e\x2f\x53\x61\x68\x65\x6c\57\x53\x61\150\x65\154\x2e\143\163\x73", "\115\151\x74\162\141" => "\150\x74\164\x70\x73\x3a\57\x2f\x63\144\156\x2e\x66\157\x6e\164\x63\x64\156\56\x69\x72\57\106\157\156\164\x2f\120\145\162\x73\151\x61\156\57\115\151\164\x72\x61\x2f\115\x69\164\162\141\x2e\x63\x73\x73", "\123\x61\x6d\x69\x6d" => "\x68\164\164\160\163\x3a\x2f\x2f\x63\x64\x6e\56\x66\x6f\156\x74\x63\x64\156\56\x69\x72\57\x46\157\x6e\164\x2f\x50\x65\x72\163\x69\x61\156\x2f\x53\x61\x6d\151\155\x2f\x53\x61\155\151\155\56\143\x73\x73", "\116\141\x7a\x61\x6e\x69\156" => "\150\x74\164\160\x73\x3a\x2f\57\143\144\156\x2e\x66\157\x6e\164\143\144\x6e\56\151\162\x2f\x46\x6f\156\x74\57\x50\145\162\163\151\141\x6e\57\x4e\141\172\x61\156\x69\x6e\57\x4e\x61\172\x61\x6e\151\x6e\56\x63\x73\163", "\x53\x68\x61\142\156\141\x6d" => "\150\164\164\x70\x73\72\57\57\x63\x64\156\x2e\146\157\x6e\164\143\x64\156\56\x69\x72\x2f\106\157\x6e\x74\57\120\x65\162\x73\x69\141\x6e\x2f\123\150\141\x62\156\x61\x6d\57\x53\x68\x61\x62\156\x61\x6d\56\x63\163\163"]; goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $wakuamsqaqkweqmy = ["\126\141\172\151\162" => __("\x56\141\x72\172\151\x72", PR__PKG__JALALI), "\114\157\x74\165\x73" => __("\114\157\x74\x75\x73", PR__PKG__JALALI), "\131\145\x6b\141\x6e" => __("\x59\145\x6b\141\156", PR__PKG__JALALI), "\123\x61\x68\x65\154" => __("\x53\141\x68\x65\x6c", PR__PKG__JALALI), "\x4d\x69\x74\x72\x61" => __("\115\x69\x74\x72\x61", PR__PKG__JALALI), "\123\141\155\151\155" => __("\x53\141\x6d\x69\x6d", PR__PKG__JALALI), "\x4e\x61\x7a\x61\x6e\x69\156" => __("\x4e\141\x7a\141\156\151\156", PR__PKG__JALALI), "\x53\150\141\142\156\x61\155" => __("\123\150\141\142\x6e\141\x6d", PR__PKG__JALALI)]; qogqewiwmwiwskgm: $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy("\147\x65\164\137\x66\x6f\x6e\x74\163", $wakuamsqaqkweqmy); if (!$iaaeswuecqawokwi) { goto qgoiooayqmqqsiok; } $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, "\x76\141\x7a\x69\162"); qgoiooayqmqqsiok: return $wakuamsqaqkweqmy; } }
