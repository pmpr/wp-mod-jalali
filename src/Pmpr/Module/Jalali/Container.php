<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43ae262ae9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ewamemuocoskqiuu($locale) : string { if (in_array($locale, ["\145\x6e", "\x66\x61"])) { goto kosaqwikueyksqmw; } $locale = false; kosaqwikueyksqmw: $goecwaaykqoaaagg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg(); if (!$locale && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { goto qmkaeeomgkwggoyo; } if (!$locale && $goecwaaykqoaaagg) { goto cuumeogeomowqisc; } if (!$locale && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { goto iikiiioqiyegyaak; } if (!(!$locale && !$goecwaaykqoaaagg)) { goto gicyayswqyuoekcq; } $locale = "\145\156"; gicyayswqyuoekcq: goto uiosisocuwokwkie; iikiiioqiyegyaak: $locale = "\146\141"; uiosisocuwokwkie: goto gcckqucukawcasgk; cuumeogeomowqisc: $locale = "\x65\156"; gcckqucukawcasgk: goto csammceowmqwaamq; qmkaeeomgkwggoyo: $locale = "\146\141"; csammceowmqwaamq: return $locale; } public function moeogyisgeuwoeea() : bool { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago($this->weysguygiseoukqw(Setting::mequmaoyiwsmgmsi, [])); } public function ksskkagoieiyuuwe($locale = null) : bool { if ($locale) { goto ocaguquugeamqckq; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); ocaguquugeamqckq: return in_array($locale, ["\x66\141", "\x66\x61\137\111\x52"], true); } public function qeegmakycwwycmcm($locale = null) : bool { if ($locale) { goto eekcoeikaeaaeyii; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); eekcoeikaeaaeyii: return in_array($locale, ["\145\156", "\x65\x6e\137\125\x53", "\x65\156\137\x55\113"], true); } }
