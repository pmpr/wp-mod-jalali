<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe5028059ec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Plugin; class Jalali extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4a\141\x6c\x61\154\151", PR__MDL__JALALI); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto mqkmcysgoiaouiwm; } parent::__construct(); $this->iemaakgqgqosiecm(); mqkmcysgoiaouiwm: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\151\156\x5f\x69\156\x69\164", [$this, "\x79\x65\x79\151\147\x75\x79\x65\x67\x6d\155\171\165\163\x65\141"], 21); } public function iemaakgqgqosiecm() { Area::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = self::akuociswqmoigkas() . "\137\x61\x63\x74\x69\166\x61\x74\x65"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { goto gicyayswqyuoekcq; } $qkqgcaykemoiecma->update("\x57\120\x4c\101\x4e\107", "\145\156\x5f\x55\123"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\x77\x70\137\x64\157\167\156\x6c\157\x61\x64\x5f\x6c\x61\156\147\165\x61\x67\145\137\x70\x61\x63\x6b")) { require_once ABSPATH . "\x2f\x77\160\x2d\141\144\x6d\x69\x6e\57\x69\156\143\154\x75\x64\x65\163\x2f\x74\x72\x61\156\163\154\x61\x74\x69\x6f\156\55\x69\156\x73\x74\x61\x6c\154\x2e\x70\150\x70"; if (!wp_can_install_language_pack()) { goto kosaqwikueyksqmw; } @wp_download_language_pack("\x66\141\137\111\x52"); kosaqwikueyksqmw: } } catch (Exception $wgaoewqkwgomoaai) { } gicyayswqyuoekcq: } }
