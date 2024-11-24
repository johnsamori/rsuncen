<?php

namespace PHPMaker2025\rsuncen2025;

// Page object
$HospitalizationDelete = &$Page;
?>
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { hospitalization: currentTable } });
var currentPageID = ew.PAGE_ID = "delete";
var currentForm;
var fhospitalizationdelete;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fhospitalizationdelete")
        .setPageId("delete")
        .build();
    window[form.id] = form;
    currentForm = form;
    loadjs.done(form.id);
});
</script>
<script<?= Nonce() ?>>
loadjs.ready("head", function () {
    // Write your table-specific client script here, no need to add script tags.
});
</script>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<form name="fhospitalizationdelete" id="fhospitalizationdelete" class="ew-form ew-delete-form" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="hospitalization">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($Page->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode(Config("COMPOSITE_KEY_SEPARATOR"), $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?= HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid <?= $Page->TableGridClass ?>">
<div class="card-body ew-grid-middle-panel <?= $Page->TableContainerClass ?>" style="<?= $Page->TableContainerStyle ?>">
<table class="<?= $Page->TableClass ?>">
    <thead>
    <tr class="ew-table-header">
<?php if ($Page->id->Visible) { // id ?>
        <th class="<?= $Page->id->headerCellClass() ?>"><span id="elh_hospitalization_id" class="hospitalization_id"><?= $Page->id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->patient_id->Visible) { // patient_id ?>
        <th class="<?= $Page->patient_id->headerCellClass() ?>"><span id="elh_hospitalization_patient_id" class="hospitalization_patient_id"><?= $Page->patient_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->room_id->Visible) { // room_id ?>
        <th class="<?= $Page->room_id->headerCellClass() ?>"><span id="elh_hospitalization_room_id" class="hospitalization_room_id"><?= $Page->room_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->admission_date->Visible) { // admission_date ?>
        <th class="<?= $Page->admission_date->headerCellClass() ?>"><span id="elh_hospitalization_admission_date" class="hospitalization_admission_date"><?= $Page->admission_date->caption() ?></span></th>
<?php } ?>
<?php if ($Page->discharge_date->Visible) { // discharge_date ?>
        <th class="<?= $Page->discharge_date->headerCellClass() ?>"><span id="elh_hospitalization_discharge_date" class="hospitalization_discharge_date"><?= $Page->discharge_date->caption() ?></span></th>
<?php } ?>
<?php if ($Page->total_cost->Visible) { // total_cost ?>
        <th class="<?= $Page->total_cost->headerCellClass() ?>"><span id="elh_hospitalization_total_cost" class="hospitalization_total_cost"><?= $Page->total_cost->caption() ?></span></th>
<?php } ?>
    </tr>
    </thead>
    <tbody>
<?php
$Page->RecordCount = 0;
$i = 0;
while ($Page->fetch()) {
    $Page->RecordCount++;
    $Page->RowCount++;

    // Set row properties
    $Page->resetAttributes();
    $Page->RowType = RowType::VIEW; // View

    // Get the field contents
    $Page->loadRowValues($Page->CurrentRow);

    // Render row
    $Page->renderRow();
?>
    <tr <?= $Page->rowAttributes() ?>>
<?php if ($Page->id->Visible) { // id ?>
        <td<?= $Page->id->cellAttributes() ?>>
<span id="">
<span<?= $Page->id->viewAttributes() ?>>
<?= $Page->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->patient_id->Visible) { // patient_id ?>
        <td<?= $Page->patient_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->patient_id->viewAttributes() ?>>
<?= $Page->patient_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->room_id->Visible) { // room_id ?>
        <td<?= $Page->room_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->room_id->viewAttributes() ?>>
<?= $Page->room_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->admission_date->Visible) { // admission_date ?>
        <td<?= $Page->admission_date->cellAttributes() ?>>
<span id="">
<span<?= $Page->admission_date->viewAttributes() ?>>
<?= $Page->admission_date->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->discharge_date->Visible) { // discharge_date ?>
        <td<?= $Page->discharge_date->cellAttributes() ?>>
<span id="">
<span<?= $Page->discharge_date->viewAttributes() ?>>
<?= $Page->discharge_date->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->total_cost->Visible) { // total_cost ?>
        <td<?= $Page->total_cost->cellAttributes() ?>>
<span id="">
<span<?= $Page->total_cost->viewAttributes() ?>>
<?= $Page->total_cost->getViewValue() ?></span>
</span>
</td>
<?php } ?>
    </tr>
<?php
}
$Page->Result?->free();
?>
</tbody>
</table>
</div>
</div>
<div class="ew-buttons ew-desktop-buttons">
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?= $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fhospitalizationdelete.validateFields()){ew.prompt({title: ew.language.phrase("MessageDeleteConfirm"),icon:'question',showCancelButton:true},result=>{if(result) $("#fhospitalizationdelete").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
