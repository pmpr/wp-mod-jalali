<?php
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; class Asset extends Container { public function addActions() { $this->addAction("\141\144\155\x69\x6e\137\x69\156\x69\x74", [$this, "\145\156\x71\x75\x65\x75\x65"])->addAction("\x61\144\155\x69\x6e\x5f\x68\x65\x61\144", [$this, "\141\144\144\x46\157\x6e\x74\123\164\x79\x6c\x65"], 9999)->addAction("\145\156\161\165\x65\x75\x65\x5f\144\141\x74\145\x70\151\143\153\x65\x72\x5f\141\163\x73\x65\x74\163", [$this, "\x65\x6e\x71\165\x65\165\145\104\x61\164\x65\x70\151\143\x6b\x65\x72"]); } public function enqueue() { goto q_9Il; Efiss: $lzi3V->addAdminSource($lzi3V->getStyleSource("\x6a\x61\154\x61\x6c\151\55\x66\x6f\x6e\x74", $tWg7m)); goto KZlNK; j9Yjx: $tWg7m = $this->getSettingObj()->getFonts($this->getSettingByKey(Setting::ADMIN_FONT)); goto AC8FH; l4exQ: $lzi3V = $this->getAssetManager(); goto rXD0D; BjRB3: J1_oR: goto r6Nh7; Bjyh7: $lzi3V->addAdminSource($lzi3V->getScriptSource("\x76\151\162\141\163\x74\x61\162", $lzi3V->get("\166\151\x72\141\163\x74\x61\162\x2e\x6a\163"))->addDependency("\152\x71\x75\145\162\x79")); goto K3iWC; q_9Il: if (ManipulateAjax::isAjax()) { goto J1_oR; } goto l4exQ; K3iWC: Uebrn: goto CUI6I; rXD0D: if (!$this->canAddVirastar()) { goto Uebrn; } goto Bjyh7; KZlNK: LIgx3: goto BjRB3; AC8FH: if (!is_string($tWg7m)) { goto LIgx3; } goto Efiss; CUI6I: $this->enqueueDatepicker(); goto j9Yjx; r6Nh7: } public function enqueueDatepicker(string $Dn0s1 = self::ADMIN) { goto vreYq; ebPjc: lvsx4: goto mbRIs; OzNix: AgK8C: goto P3RO2; BQ54s: goto lvsx4; goto OzNix; kau6h: if ($Dn0s1 === self::ADMIN) { goto AgK8C; } goto YGBnK; tYABj: $BAzwN = $lzi3V->getStyleSource("\144\141\x74\x65\160\151\143\153\x65\162", $lzi3V->get("\144\x61\164\145\160\151\x63\x6b\145\162\x2e\143\163\x73")); goto kau6h; YGBnK: $lzi3V->addFrontSource($HsVF8)->addFrontSource($BAzwN); goto BQ54s; P3RO2: $lzi3V->addAdminSource($HsVF8)->addAdminSource($BAzwN); goto ebPjc; vreYq: $lzi3V = $this->getAssetManager(); goto EE0W0; EE0W0: $HsVF8 = $lzi3V->getScriptSource("\x64\141\x74\x65\x70\x69\143\x6b\145\x72", $lzi3V->get("\144\141\164\145\160\x69\143\x6b\x65\162\56\x6a\x73"))->addDependency("\152\161\165\x65\x72\x79"); goto tYABj; mbRIs: } public function addFontStyle() { goto KT8Ku; lxwBu: QmHeH: goto VyRA3; GCAa2: echo $this->renderTemplate("\146\157\156\164\137\163\164\x79\154\145\163", ["\x66\x6f\156\x74" => $cVnrl]); goto lxwBu; KT8Ku: $cVnrl = $this->getSettingByKey(Setting::ADMIN_FONT); goto MpCjl; MpCjl: if (!$cVnrl) { goto QmHeH; } goto GCAa2; VyRA3: } }
