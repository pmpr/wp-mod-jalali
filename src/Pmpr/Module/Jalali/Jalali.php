<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56d0994ba             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Plugin; class Jalali extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4a\x61\x6c\141\154\151", PR__MDL__JALALI); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto wmywuusgukmmaams; } Setting::symcgieuakksimmu(); wmywuusgukmmaams: Area::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\x6e\137\x69\156\151\x74", [$this, "\171\145\x79\151\x67\165\171\145\x67\x6d\x6d\171\x75\163\x65\141"], 21); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = $this->akuociswqmoigkas() . "\x5f\141\x63\x74\x69\x76\141\x74\x65"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { goto ooeausyowguqicuo; } $qkqgcaykemoiecma->update("\127\x50\114\101\x4e\x47", "\145\x6e\137\x55\x53"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\167\x70\137\144\x6f\167\156\154\x6f\x61\x64\x5f\x6c\141\156\x67\165\141\147\x65\x5f\160\x61\x63\153")) { require_once ABSPATH . "\x2f\167\160\x2d\141\144\x6d\x69\x6e\x2f\151\x6e\x63\x6c\165\x64\145\163\57\x74\162\x61\156\163\x6c\141\164\x69\157\x6e\55\151\156\163\x74\x61\x6c\x6c\56\160\x68\160"; if (!wp_can_install_language_pack()) { goto gkyawqqcmigqgaiq; } @wp_download_language_pack("\146\x61\137\111\122"); gkyawqqcmigqgaiq: } } catch (Exception $wgaoewqkwgomoaai) { } ooeausyowguqicuo: } }
