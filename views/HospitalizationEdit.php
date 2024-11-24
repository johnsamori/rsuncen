<?php

namespace PHPMaker2025\rsuncen2025;

// Page object
$HospitalizationEdit = &$Page;
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
<form name="fhospitalizationedit" id="fhospitalizationedit" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { hospitalization: currentTable } });
var currentPageID = ew.PAGE_ID = "edit";
var currentForm;
var fhospitalizationedit;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("fhospitalizationedit")
        .setPageId("edit")

        // Add fields
        .setFields([
            ["id", [fields.id.visible && fields.id.required ? ew.Validators.required(fields.id.caption) : null], fields.id.isInvalid],
            ["patient_id", [fields.patient_id.visible && fields.patient_id.required ? ew.Validators.required(fields.patient_id.caption) : null], fields.patient_id.isInvalid],
            ["room_id", [fields.room_id.visible && fields.room_id.required ? ew.Validators.required(fields.room_id.caption) : null], fields.room_id.isInvalid],
            ["admission_date", [fields.admission_date.visible && fields.admission_date.required ? ew.Validators.required(fields.admission_date.caption) : null, ew.Validators.datetime(fields.admission_date.clientFormatPattern)], fields.admission_date.isInvalid],
            ["discharge_date", [fields.discharge_date.visible && fields.discharge_date.required ? ew.Validators.required(fields.discharge_date.caption) : null, ew.Validators.datetime(fields.discharge_date.clientFormatPattern)], fields.discharge_date.isInvalid],
            ["total_cost", [fields.total_cost.visible && fields.total_cost.required ? ew.Validators.required(fields.total_cost.caption) : null, ew.Validators.float], fields.total_cost.isInvalid]
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
            "room_id": <?= $Page->room_id->toClientList($Page) ?>,
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
<input type="hidden" name="t" value="hospitalization">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($Page->id->Visible) { // id ?>
    <div id="r_id"<?= $Page->id->rowAttributes() ?>>
        <label id="elh_hospitalization_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->id->caption() ?><?= $Page->id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->id->cellAttributes() ?>>
<span id="el_hospitalization_id">
<span<?= $Page->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?= HtmlEncode(RemoveHtml($Page->id->getDisplayValue($Page->id->EditValue))) ?>"></span>
<input type="hidden" data-table="hospitalization" data-field="x_id" data-hidden="1" name="x_id" id="x_id" value="<?= HtmlEncode($Page->id->CurrentValue) ?>">
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->patient_id->Visible) { // patient_id ?>
    <div id="r_patient_id"<?= $Page->patient_id->rowAttributes() ?>>
        <label id="elh_hospitalization_patient_id" for="x_patient_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->patient_id->caption() ?><?= $Page->patient_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->patient_id->cellAttributes() ?>>
<span id="el_hospitalization_patient_id">
    <select
        id="x_patient_id"
        name="x_patient_id"
        class="form-select ew-select<?= $Page->patient_id->isInvalidClass() ?>"
        <?php if (!$Page->patient_id->IsNativeSelect) { ?>
        data-select2-id="fhospitalizationedit_x_patient_id"
        <?php } ?>
        data-table="hospitalization"
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
loadjs.ready("fhospitalizationedit", function() {
    var options = { name: "x_patient_id", selectId: "fhospitalizationedit_x_patient_id" },
        el = document.querySelector("select[data-select2-id='" + options.selectId + "']");
    if (!el)
        return;
    options.closeOnSelect = !options.multiple;
    options.dropdownParent = el.closest("#ew-modal-dialog, #ew-add-opt-dialog");
    if (fhospitalizationedit.lists.patient_id?.lookupOptions.length) {
        options.data = { id: "x_patient_id", form: "fhospitalizationedit" };
    } else {
        options.ajax = { id: "x_patient_id", form: "fhospitalizationedit", limit: ew.LOOKUP_PAGE_SIZE };
    }
    options.minimumInputLength = ew.selectMinimumInputLength;
    options = Object.assign({}, ew.selectOptions, options, ew.vars.tables.hospitalization.fields.patient_id.selectOptions);
    ew.createSelect(options);
});
</script>
<?php } ?>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->room_id->Visible) { // room_id ?>
    <div id="r_room_id"<?= $Page->room_id->rowAttributes() ?>>
        <label id="elh_hospitalization_room_id" for="x_room_id" class="<?= $Page->LeftColumnClass ?>"><?= $Page->room_id->caption() ?><?= $Page->room_id->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->room_id->cellAttributes() ?>>
<span id="el_hospitalization_room_id">
    <select
        id="x_room_id"
        name="x_room_id"
        class="form-select ew-select<?= $Page->room_id->isInvalidClass() ?>"
        <?php if (!$Page->room_id->IsNativeSelect) { ?>
        data-select2-id="fhospitalizationedit_x_room_id"
        <?php } ?>
        data-table="hospitalization"
        data-field="x_room_id"
        data-value-separator="<?= $Page->room_id->displayValueSeparatorAttribute() ?>"
        data-placeholder="<?= HtmlEncode($Page->room_id->getPlaceHolder()) ?>"
        <?= $Page->room_id->editAttributes() ?>>
        <?= $Page->room_id->selectOptionListHtml("x_room_id") ?>
    </select>
    <?= $Page->room_id->getCustomMessage() ?>
    <div class="invalid-feedback"><?= $Page->room_id->getErrorMessage() ?></div>
<?= $Page->room_id->Lookup->getParamTag($Page, "p_x_room_id") ?>
<?php if (!$Page->room_id->IsNativeSelect) { ?>
<script<?= Nonce() ?>>
loadjs.ready("fhospitalizationedit", function() {
    var options = { name: "x_room_id", selectId: "fhospitalizationedit_x_room_id" },
        el = document.querySelector("select[data-select2-id='" + options.selectId + "']");
    if (!el)
        return;
    options.closeOnSelect = !options.multiple;
    options.dropdownParent = el.closest("#ew-modal-dialog, #ew-add-opt-dialog");
    if (fhospitalizationedit.lists.room_id?.lookupOptions.length) {
        options.data = { id: "x_room_id", form: "fhospitalizationedit" };
    } else {
        options.ajax = { id: "x_room_id", form: "fhospitalizationedit", limit: ew.LOOKUP_PAGE_SIZE };
    }
    options.minimumResultsForSearch = Infinity;
    options = Object.assign({}, ew.selectOptions, options, ew.vars.tables.hospitalization.fields.room_id.selectOptions);
    ew.createSelect(options);
});
</script>
<?php } ?>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->admission_date->Visible) { // admission_date ?>
    <div id="r_admission_date"<?= $Page->admission_date->rowAttributes() ?>>
        <label id="elh_hospitalization_admission_date" for="x_admission_date" class="<?= $Page->LeftColumnClass ?>"><?= $Page->admission_date->caption() ?><?= $Page->admission_date->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->admission_date->cellAttributes() ?>>
<span id="el_hospitalization_admission_date">
<input type="<?= $Page->admission_date->getInputTextType() ?>" name="x_admission_date" id="x_admission_date" data-table="hospitalization" data-field="x_admission_date" value="<?= $Page->admission_date->EditValue ?>" placeholder="<?= HtmlEncode($Page->admission_date->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->admission_date->formatPattern()) ?>"<?= $Page->admission_date->editAttributes() ?> aria-describedby="x_admission_date_help">
<?= $Page->admission_date->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->admission_date->getErrorMessage() ?></div>
<?php if (!$Page->admission_date->ReadOnly && !$Page->admission_date->Disabled && !isset($Page->admission_date->EditAttrs["readonly"]) && !isset($Page->admission_date->EditAttrs["disabled"])) { ?>
<script<?= Nonce() ?>>
loadjs.ready(["fhospitalizationedit", "datetimepicker"], function () {
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
        "fhospitalizationedit",
        "x_admission_date",
        ew.deepAssign({"useCurrent":false,"display":{"sideBySide":false}}, options),
        {"inputGroup":true}
    );
});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready(['fhospitalizationedit', 'jqueryinputmask'], function() {
	options = {
		'jitMasking': false,
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fhospitalizationedit", "x_admission_date", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->discharge_date->Visible) { // discharge_date ?>
    <div id="r_discharge_date"<?= $Page->discharge_date->rowAttributes() ?>>
        <label id="elh_hospitalization_discharge_date" for="x_discharge_date" class="<?= $Page->LeftColumnClass ?>"><?= $Page->discharge_date->caption() ?><?= $Page->discharge_date->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->discharge_date->cellAttributes() ?>>
<span id="el_hospitalization_discharge_date">
<input type="<?= $Page->discharge_date->getInputTextType() ?>" name="x_discharge_date" id="x_discharge_date" data-table="hospitalization" data-field="x_discharge_date" value="<?= $Page->discharge_date->EditValue ?>" placeholder="<?= HtmlEncode($Page->discharge_date->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->discharge_date->formatPattern()) ?>"<?= $Page->discharge_date->editAttributes() ?> aria-describedby="x_discharge_date_help">
<?= $Page->discharge_date->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->discharge_date->getErrorMessage() ?></div>
<?php if (!$Page->discharge_date->ReadOnly && !$Page->discharge_date->Disabled && !isset($Page->discharge_date->EditAttrs["readonly"]) && !isset($Page->discharge_date->EditAttrs["disabled"])) { ?>
<script<?= Nonce() ?>>
loadjs.ready(["fhospitalizationedit", "datetimepicker"], function () {
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
        "fhospitalizationedit",
        "x_discharge_date",
        ew.deepAssign({"useCurrent":false,"display":{"sideBySide":false}}, options),
        {"inputGroup":true}
    );
});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready(['fhospitalizationedit', 'jqueryinputmask'], function() {
	options = {
		'jitMasking': false,
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fhospitalizationedit", "x_discharge_date", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->total_cost->Visible) { // total_cost ?>
    <div id="r_total_cost"<?= $Page->total_cost->rowAttributes() ?>>
        <label id="elh_hospitalization_total_cost" for="x_total_cost" class="<?= $Page->LeftColumnClass ?>"><?= $Page->total_cost->caption() ?><?= $Page->total_cost->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->total_cost->cellAttributes() ?>>
<span id="el_hospitalization_total_cost">
<input type="<?= $Page->total_cost->getInputTextType() ?>" name="x_total_cost" id="x_total_cost" data-table="hospitalization" data-field="x_total_cost" value="<?= $Page->total_cost->EditValue ?>" size="30" placeholder="<?= HtmlEncode($Page->total_cost->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->total_cost->formatPattern()) ?>"<?= $Page->total_cost->editAttributes() ?> aria-describedby="x_total_cost_help">
<?= $Page->total_cost->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->total_cost->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['fhospitalizationedit', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("fhospitalizationedit", "x_total_cost", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="fhospitalizationedit"><?= $Language->phrase("SaveBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="fhospitalizationedit" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
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
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(fhospitalizationedit.validateFields()){ew.prompt({title: ew.language.phrase("MessageEditConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#fhospitalizationedit").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("hospitalization");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#fhospitalizationedit:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
