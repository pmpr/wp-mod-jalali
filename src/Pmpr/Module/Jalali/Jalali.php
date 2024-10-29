<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b70f6c7c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Woocommerce; class Jalali extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x4a\x61\154\x61\x6c\151", PR__MDL__JALALI); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Area::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\137\151\156\x69\x74", [$this, "\171\x65\171\x69\x67\165\x79\x65\147\x6d\x6d\171\x75\x73\145\x61"], 21)->qcsmikeggeemccuu("\x70\x6c\165\x67\x69\156\163\x5f\x6c\157\x61\x64\145\144", [$this, "\151\143\167\x63\147\x6d\143\157\x69\x6d\x71\x65\x69\147\171\x65"]); $this->waqewsckuayqguos("\x62\145\146\157\162\145\137\x65\156\x71\x75\x65\x75\x65\x5f\x62\141\143\x6b\x65\x6e\x64\x5f\x61\x73\x73\x65\164\163", [$this, "\145\x6e\x71\x75\x65\x75\145"])->waqewsckuayqguos("\x65\156\161\165\x65\x75\x65\137\x64\x61\164\145\x70\x69\143\153\x65\x72\x5f\141\x73\x73\145\164\163", [$this, "\x6d\165\x71\x75\x79\141\x69\x6d\x63\171\x69\167\143\145\x63\x75"]); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this) . "\x5f\141\x63\164\x69\x76\141\164\145"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!$qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { $qkqgcaykemoiecma->update("\127\x50\114\x41\116\107", "\145\x6e\x5f\x55\123"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\167\x70\x5f\144\x6f\x77\156\154\x6f\x61\144\x5f\154\141\156\x67\165\x61\x67\145\137\160\x61\x63\x6b")) { require_once ABSPATH . "\x2f\x77\x70\55\141\144\155\x69\156\57\151\156\143\x6c\x75\x64\145\163\x2f\x74\x72\141\156\x73\x6c\x61\x74\151\x6f\x6e\x2d\x69\156\x73\164\x61\x6c\x6c\56\x70\x68\x70"; if (wp_can_install_language_pack()) { @wp_download_language_pack("\146\141\137\111\x52"); } } } catch (Exception $wgaoewqkwgomoaai) { } } } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); if ($this->kmuweyayaqoeqiyw()->moeogyisgeuwoeea()) { $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x76\x69\x72\141\x73\164\141\x72", "\x76\151\x72\x61\x73\x74\141\162\x2e\x6a\x73")->simswskycwagoeqy()); } $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\x61\x64\x6d\151\156", "\141\x64\155\151\x6e\56\x6a\163")->simswskycwagoeqy()); $meakksicouekcgoe->wwmusmkkcwsiciou($this, "\155\x6f\156\164\x68\x73", [__("\x46\141\162\166\141\162\x64\x69\156", PR__MDL__JALALI), __("\117\x72\x64\x69\x62\145\x68\x65\163\x68\164", PR__MDL__JALALI), __("\113\150\x6f\x72\x64\141\x64", PR__MDL__JALALI), __("\x54\x69\162", PR__MDL__JALALI), __("\x4d\157\x72\144\141\144", PR__MDL__JALALI), __("\x53\x68\141\x68\162\x69\166\x61\x72", PR__MDL__JALALI), __("\x4d\145\x68\162", PR__MDL__JALALI), __("\x41\x62\141\x6e", PR__MDL__JALALI), __("\101\172\141\162", PR__MDL__JALALI), __("\x44\x65\x79", PR__MDL__JALALI), __("\x42\x61\150\155\141\x6e", PR__MDL__JALALI), __("\105\163\146\141\156\144", PR__MDL__JALALI)]); $this->muquyaimcyiwcecu(); } public function muquyaimcyiwcecu(string $sqeykgyoooqysmca = Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $oqkcmcewgaqymmoe = $meakksicouekcgoe->owygwqwawqoiusis($this, "\144\141\164\145\160\x69\x63\x6b\x65\162", "\x64\141\164\x65\x70\151\143\x6b\x65\x72\56\x6a\x73")->simswskycwagoeqy()->okawmmwsiuauwsiu(); $iesegggmcccqyquo = $meakksicouekcgoe->awgyqswkqywwmkye($this, "\144\141\x74\x65\x70\151\x63\x6b\145\x72", "\x64\x61\164\x65\x70\x69\143\x6b\145\x72\x2e\143\x73\x73"); if ($sqeykgyoooqysmca === Constants::qiaqeaemuukkikmi) { $meakksicouekcgoe->qeqgammgesiwiysc($oqkcmcewgaqymmoe)->qeqgammgesiwiysc($iesegggmcccqyquo); } else { $meakksicouekcgoe->yawoscugkyysowie($oqkcmcewgaqymmoe)->yawoscugkyysowie($iesegggmcccqyquo); } } }
