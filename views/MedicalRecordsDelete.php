<?php

namespace PHPMaker2025\rsuncen2025;

// Page object
$MedicalRecordsDelete = &$Page;
?>
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { medical_records: currentTable } });
var currentPageID = ew.PAGE_ID = "delete";
var currentForm;
var fmedical_recordsdelete;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fmedical_recordsdelete")
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
<form name="fmedical_recordsdelete" id="fmedical_recordsdelete" class="ew-form ew-delete-form" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="medical_records">
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
        <th class="<?= $Page->id->headerCellClass() ?>"><span id="elh_medical_records_id" class="medical_records_id"><?= $Page->id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->patient_id->Visible) { // patient_id ?>
        <th class="<?= $Page->patient_id->headerCellClass() ?>"><span id="elh_medical_records_patient_id" class="medical_records_patient_id"><?= $Page->patient_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->doctor_id->Visible) { // doctor_id ?>
        <th class="<?= $Page->doctor_id->headerCellClass() ?>"><span id="elh_medical_records_doctor_id" class="medical_records_doctor_id"><?= $Page->doctor_id->caption() ?></span></th>
<?php } ?>
<?php if ($Page->visit_date->Visible) { // visit_date ?>
        <th class="<?= $Page->visit_date->headerCellClass() ?>"><span id="elh_medical_records_visit_date" class="medical_records_visit_date"><?= $Page->visit_date->caption() ?></span></th>
<?php } ?>
<?php if ($Page->diagnosis->Visible) { // diagnosis ?>
        <th class="<?= $Page->diagnosis->headerCellClass() ?>"><span id="elh_medical_records_diagnosis" class="medical_records_diagnosis"><?= $Page->diagnosis->caption() ?></span></th>
<?php } ?>
<?php if ($Page->treatment->Visible) { // treatment ?>
        <th class="<?= $Page->treatment->headerCellClass() ?>"><span id="elh_medical_records_treatment" class="medical_records_treatment"><?= $Page->treatment->caption() ?></span></th>
<?php } ?>
<?php if ($Page->prescription->Visible) { // prescription ?>
        <th class="<?= $Page->prescription->headerCellClass() ?>"><span id="elh_medical_records_prescription" class="medical_records_prescription"><?= $Page->prescription->caption() ?></span></th>
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
<?php if ($Page->doctor_id->Visible) { // doctor_id ?>
        <td<?= $Page->doctor_id->cellAttributes() ?>>
<span id="">
<span<?= $Page->doctor_id->viewAttributes() ?>>
<?= $Page->doctor_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->visit_date->Visible) { // visit_date ?>
        <td<?= $Page->visit_date->cellAttributes() ?>>
<span id="">
<span<?= $Page->visit_date->viewAttributes() ?>>
<?= $Page->visit_date->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->diagnosis->Visible) { // diagnosis ?>
        <td<?= $Page->diagnosis->cellAttributes() ?>>
<span id="">
<span<?= $Page->diagnosis->viewAttributes() ?>>
<?= $Page->diagnosis->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->treatment->Visible) { // treatment ?>
        <td<?= $Page->treatment->cellAttributes() ?>>
<span id="">
<span<?= $Page->treatment->viewAttributes() ?>>
<?= $Page->treatment->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($Page->prescription->Visible) { // prescription ?>
        <td<?= $Page->prescription->cellAttributes() ?>>
<span id="">
<span<?= $Page->prescription->viewAttributes() ?>>
<?= $Page->prescription->getViewValue() ?></span>
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
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fmedical_recordsdelete.validateFields()){ew.prompt({title: ew.language.phrase("MessageDeleteConfirm"),icon:'question',showCancelButton:true},result=>{if(result) $("#fmedical_recordsdelete").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
