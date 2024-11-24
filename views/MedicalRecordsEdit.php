<?php

namespace PHPMaker2025\rsuncen2025;

// Page object
$MedicalRecordsEdit = &$Page;
?>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<main class="edit">
<?php if (!$Page->IsModal) { ?>
<?= $Page->Pager->render() ?>
<?php } ?>
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
<div class="col-md-12">
  <div class="card shadow-sm">
    <div class="card-header">
	  <h4 class="card-title"><?php echo Language()->phrase("EditCaption"); ?></h4>
	  <div class="card-tools">
	  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
	  </button>
	  </div>
	  <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
<?php } ?>
<?php // End of Card view by Masino Sinaga, September 10, 2023 ?>
<form name="fmedical_recordsedit" id="fmedical_recordsedit" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { medical_records: currentTable } });
var currentPageID = ew.PAGE_ID = "edit";
var currentForm;
var fmedical_recordsedit;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fmedical_recordsedit")
        .setPageId("edit")

        // Add fields
        .setFields([
            ["id", [fields.id.visible && fields.id.required ? ew.Validators.required(fields.id.caption) : null], fields.id.isInvalid],
            ["patient_id", [fields.patient_id.visible && fields.patient_id.required ? ew.Validators.required(fields.patient_id.caption) : null], fields.patient_id.isInvalid],
            ["doctor_id", [fields.doctor_id.visible && fields.doctor_id.required ? ew.Validators.required(fields.doctor_id.caption) : null], fields.doctor_id.isInvalid],
            ["visit_date", [fields.visit_date.visible && fields.visit_date.required ? ew.Validators.required(fields.visit_date.caption) : null, ew.Validators.datetime(fields.visit_date.clientFormatPattern)], fields.visit_date.isInvalid],
            ["diagnosis", [fields.diagnosis.visible && fields.diagnosis.required ? ew.Validators.required(fields.diagnosis.caption) : null], fields.diagnosis.isInvalid],
            ["treatment", [fields.treatment.visible && fields.treatment.required ? ew.Validators.required(fields.treatment.caption) : null], fields.treatment.isInvalid],
            ["prescription", [fields.prescription.visible && fields.prescription.required ? ew.Validators.required(fields.prescription.caption) : null], fields.prescription.isInvalid]
        ])

        // Form_CustomValidate
        .setCustomValidate(
            function (fobj) { // DO NOT CHANGE THIS LINE! (except for adding "async" keyword)
                    // Your custom validation code in JAVASCRIPT here, return false if invalid.
                    return true;
                }
        )

        // Use JavaScript validation or not
        .setValidateRequired(ew.CLIENT_VALIDATE)

        // Dynamic selection lists
        .setLists({
            "patient_id": <?= $Page->patient_id->toClientList($Page) ?>,
            "doctor_id": <?= $Page->doctor_id->toClientList($Page) ?>,
        })
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
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="medical_records">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($Page->id->Visible) { // id ?>
    <div id="r_id"<?= $Page->id->rowAttributes() ?>>
        <label id="elh_medical_records_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->id->caption() ?><?= $Page->id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->id->cellAttributes() ?>>
<span id="el_medical_records_id">
<span<?= $Page->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?= HtmlEncode(RemoveHtml($Page->id->getDisplayValue($Page->id->EditValue))) ?>"></span>
<input type="hidden" data-table="medical_records" data-field="x_id" data-hidden="1" name="x_id" id="x_id" value="<?= HtmlEncode($Page->id->CurrentValue) ?>">
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->patient_id->Visible) { // patient_id ?>
    <div id="r_patient_id"<?= $Page->patient_id->rowAttributes() ?>>
        <label id="elh_medical_records_patient_id" for="x_patient_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->patient_id->caption() ?><?= $Page->patient_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->patient_id->cellAttributes() ?>>
<span id="el_medical_records_patient_id">
    <select
        id="x_patient_id"
        name="x_patient_id"
        class="form-select ew-select<?= $Page->patient_id->isInvalidClass() ?>"
        <?php if (!$Page->patient_id->IsNativeSelect) { ?>
        data-select2-id="fmedical_recordsedit_x_patient_id"
        <?php } ?>
        data-table="medical_records"
        data-field="x_patient_id"
        data-value-separator="<?= $Page->patient_id->displayValueSeparatorAttribute() ?>"
        data-placeholder="<?= HtmlEncode($Page->patient_id->getPlaceHolder()) ?>"
        <?= $Page->patient_id->editAttributes() ?>>
        <?= $Page->patient_id->selectOptionListHtml("x_patient_id") ?>
    </select>
    <?= $Page->patient_id->getCustomMessage() ?>
    <div class="invalid-feedback"><?= $Page->patient_id->getErrorMessage() ?></div>
<?= $Page->patient_id->Lookup->getParamTag($Page, "p_x_patient_id") ?>
<?php if (!$Page->patient_id->IsNativeSelect) { ?>
<script<?= Nonce() ?>>
loadjs.ready("fmedical_recordsedit", function() {
    var options = { name: "x_patient_id", selectId: "fmedical_recordsedit_x_patient_id" },
        el = document.querySelector("select[data-select2-id='" + options.selectId + "']");
    if (!el)
        return;
    options.closeOnSelect = !options.multiple;
    options.dropdownParent = el.closest("#ew-modal-dialog, #ew-add-opt-dialog");
    if (fmedical_recordsedit.lists.patient_id?.lookupOptions.length) {
        options.data = { id: "x_patient_id", form: "fmedical_recordsedit" };
    } else {
        options.ajax = { id: "x_patient_id", form: "fmedical_recordsedit", limit: ew.LOOKUP_PAGE_SIZE };
    }
    options.minimumInputLength = ew.selectMinimumInputLength;
    options = Object.assign({}, ew.selectOptions, options, ew.vars.tables.medical_records.fields.patient_id.selectOptions);
    ew.createSelect(options);
});
</script>
<?php } ?>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->doctor_id->Visible) { // doctor_id ?>
    <div id="r_doctor_id"<?= $Page->doctor_id->rowAttributes() ?>>
        <label id="elh_medical_records_doctor_id" for="x_doctor_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->doctor_id->caption() ?><?= $Page->doctor_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->doctor_id->cellAttributes() ?>>
<span id="el_medical_records_doctor_id">
    <select
        id="x_doctor_id"
        name="x_doctor_id"
        class="form-select ew-select<?= $Page->doctor_id->isInvalidClass() ?>"
        <?php if (!$Page->doctor_id->IsNativeSelect) { ?>
        data-select2-id="fmedical_recordsedit_x_doctor_id"
        <?php } ?>
        data-table="medical_records"
        data-field="x_doctor_id"
        data-value-separator="<?= $Page->doctor_id->displayValueSeparatorAttribute() ?>"
        data-placeholder="<?= HtmlEncode($Page->doctor_id->getPlaceHolder()) ?>"
        <?= $Page->doctor_id->editAttributes() ?>>
        <?= $Page->doctor_id->selectOptionListHtml("x_doctor_id") ?>
    </select>
    <?= $Page->doctor_id->getCustomMessage() ?>
    <div class="invalid-feedback"><?= $Page->doctor_id->getErrorMessage() ?></div>
<?= $Page->doctor_id->Lookup->getParamTag($Page, "p_x_doctor_id") ?>
<?php if (!$Page->doctor_id->IsNativeSelect) { ?>
<script<?= Nonce() ?>>
loadjs.ready("fmedical_recordsedit", function() {
    var options = { name: "x_doctor_id", selectId: "fmedical_recordsedit_x_doctor_id" },
        el = document.querySelector("select[data-select2-id='" + options.selectId + "']");
    if (!el)
        return;
    options.closeOnSelect = !options.multiple;
    options.dropdownParent = el.closest("#ew-modal-dialog, #ew-add-opt-dialog");
    if (fmedical_recordsedit.lists.doctor_id?.lookupOptions.length) {
        options.data = { id: "x_doctor_id", form: "fmedical_recordsedit" };
    } else {
        options.ajax = { id: "x_doctor_id", form: "fmedical_recordsedit", limit: ew.LOOKUP_PAGE_SIZE };
    }
    options.minimumInputLength = ew.selectMinimumInputLength;
    options = Object.assign({}, ew.selectOptions, options, ew.vars.tables.medical_records.fields.doctor_id.selectOptions);
    ew.createSelect(options);
});
</script>
<?php } ?>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->visit_date->Visible) { // visit_date ?>
    <div id="r_visit_date"<?= $Page->visit_date->rowAttributes() ?>>
        <label id="elh_medical_records_visit_date" for="x_visit_date" class="<?= $Page->LeftColumnClass ?>"><?= $Page->visit_date->caption() ?><?= $Page->visit_date->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->visit_date->cellAttributes() ?>>
<span id="el_medical_records_visit_date">
<input type="<?= $Page->visit_date->getInputTextType() ?>" name="x_visit_date" id="x_visit_date" data-table="medical_records" data-field="x_visit_date" value="<?= $Page->visit_date->EditValue ?>" placeholder="<?= HtmlEncode($Page->visit_date->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->visit_date->formatPattern()) ?>"<?= $Page->visit_date->editAttributes() ?> aria-describedby="x_visit_date_help">
<?= $Page->visit_date->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->visit_date->getErrorMessage() ?></div>
<?php if (!$Page->visit_date->ReadOnly && !$Page->visit_date->Disabled && !isset($Page->visit_date->EditAttrs["readonly"]) && !isset($Page->visit_date->EditAttrs["disabled"])) { ?>
<script<?= Nonce() ?>>
loadjs.ready(["fmedical_recordsedit", "datetimepicker"], function () {
    let format = "<?= DateFormat(0) ?>",
        options = {
            localization: {
                locale: ew.LANGUAGE_ID + "-u-nu-" + ew.getNumberingSystem(),
                hourCycle: format.match(/H/) ? "h24" : "h12",
                format,
                ...ew.language.phrase("datetimepicker")
            },
            display: {
                icons: {
                    previous: ew.IS_RTL ? "fa-solid fa-chevron-right" : "fa-solid fa-chevron-left",
                    next: ew.IS_RTL ? "fa-solid fa-chevron-left" : "fa-solid fa-chevron-right"
                },
                components: {
                    clock: !!format.match(/h/i) || !!format.match(/m/) || !!format.match(/s/i),
                    hours: !!format.match(/h/i),
                    minutes: !!format.match(/m/),
                    seconds: !!format.match(/s/i)
                },
                theme: ew.getPreferredTheme()
            }
        };
    ew.createDateTimePicker(
        "fmedical_recordsedit",
        "x_visit_date",
        ew.deepAssign({"useCurrent":false,"display":{"sideBySide":false}}, options),
        {"inputGroup":true}
    );
});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready(['fmedical_recordsedit', 'jqueryinputmask'], function() {
	options = {
		'jitMasking': false,
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fmedical_recordsedit", "x_visit_date", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->diagnosis->Visible) { // diagnosis ?>
    <div id="r_diagnosis"<?= $Page->diagnosis->rowAttributes() ?>>
        <label id="elh_medical_records_diagnosis" for="x_diagnosis" class="<?= $Page->LeftColumnClass ?>"><?= $Page->diagnosis->caption() ?><?= $Page->diagnosis->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->diagnosis->cellAttributes() ?>>
<span id="el_medical_records_diagnosis">
<textarea data-table="medical_records" data-field="x_diagnosis" name="x_diagnosis" id="x_diagnosis" cols="35" rows="4" placeholder="<?= HtmlEncode($Page->diagnosis->getPlaceHolder()) ?>"<?= $Page->diagnosis->editAttributes() ?> aria-describedby="x_diagnosis_help"><?= $Page->diagnosis->EditValue ?></textarea>
<?= $Page->diagnosis->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->diagnosis->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->treatment->Visible) { // treatment ?>
    <div id="r_treatment"<?= $Page->treatment->rowAttributes() ?>>
        <label id="elh_medical_records_treatment" for="x_treatment" class="<?= $Page->LeftColumnClass ?>"><?= $Page->treatment->caption() ?><?= $Page->treatment->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->treatment->cellAttributes() ?>>
<span id="el_medical_records_treatment">
<textarea data-table="medical_records" data-field="x_treatment" name="x_treatment" id="x_treatment" cols="35" rows="4" placeholder="<?= HtmlEncode($Page->treatment->getPlaceHolder()) ?>"<?= $Page->treatment->editAttributes() ?> aria-describedby="x_treatment_help"><?= $Page->treatment->EditValue ?></textarea>
<?= $Page->treatment->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->treatment->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->prescription->Visible) { // prescription ?>
    <div id="r_prescription"<?= $Page->prescription->rowAttributes() ?>>
        <label id="elh_medical_records_prescription" for="x_prescription" class="<?= $Page->LeftColumnClass ?>"><?= $Page->prescription->caption() ?><?= $Page->prescription->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->prescription->cellAttributes() ?>>
<span id="el_medical_records_prescription">
<textarea data-table="medical_records" data-field="x_prescription" name="x_prescription" id="x_prescription" cols="35" rows="4" placeholder="<?= HtmlEncode($Page->prescription->getPlaceHolder()) ?>"<?= $Page->prescription->editAttributes() ?> aria-describedby="x_prescription_help"><?= $Page->prescription->EditValue ?></textarea>
<?= $Page->prescription->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->prescription->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fmedical_recordsedit"><?= $Language->phrase("SaveBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fmedical_recordsedit" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
<?php } ?>
    </div><!-- /buttons offset -->
<?= $Page->IsModal ? "</template>" : "</div>" ?><!-- /buttons .row -->
</form>
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
		</div>
     <!-- /.card-body -->
     </div>
  <!-- /.card -->
</div>
<?php } ?>
<?php // End of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
<?= $Page->Pager->render() ?>
<?php } ?>
</main>
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fmedical_recordsedit.validateFields()){ew.prompt({title: ew.language.phrase("MessageEditConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fmedical_recordsedit").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("medical_records");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fmedical_recordsedit:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
