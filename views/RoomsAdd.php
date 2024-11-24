<?php

namespace PHPMaker2025\rsuncen2025;

// Page object
$RoomsAdd = &$Page;
?>
<script<?= Nonce() ?>>
var currentTable = <?= json_encode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { rooms: currentTable } });
var currentPageID = ew.PAGE_ID = "add";
var currentForm;
var froomsadd;
loadjs.ready(["wrapper", "head"], function () {
    let $ = jQuery;
    let fields = currentTable.fields;

    // Form object
    let form = new ew.FormBuilder()
        .setId("froomsadd")
        .setPageId("add")

        // Add fields
        .setFields([
            ["room_number", [fields.room_number.visible && fields.room_number.required ? ew.Validators.required(fields.room_number.caption) : null], fields.room_number.isInvalid],
            ["room_type", [fields.room_type.visible && fields.room_type.required ? ew.Validators.required(fields.room_type.caption) : null], fields.room_type.isInvalid],
            ["price_per_day", [fields.price_per_day.visible && fields.price_per_day.required ? ew.Validators.required(fields.price_per_day.caption) : null, ew.Validators.float], fields.price_per_day.isInvalid],
            ["status", [fields.status.visible && fields.status.required ? ew.Validators.required(fields.status.caption) : null], fields.status.isInvalid]
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
            "room_type": <?= $Page->room_type->toClientList($Page) ?>,
            "status": <?= $Page->status->toClientList($Page) ?>,
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
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<?php // Begin of Card view by Masino Sinaga, September 10, 2023 ?>
<?php if (!$Page->IsModal) { ?>
<div class="col-md-12">
  <div class="card shadow-sm">
    <div class="card-header">
	  <h4 class="card-title"><?php echo Language()->phrase("AddCaption"); ?></h4>
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
<form name="froomsadd" id="froomsadd" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post" novalidate autocomplete="off">
<?php if (Config("CSRF_PROTECTION") && Csrf()->isEnabled()) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" id="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" id="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="rooms">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<?php if (IsJsonResponse()) { ?>
<input type="hidden" name="json" value="1">
<?php } ?>
<input type="hidden" name="<?= $Page->getFormOldKeyName() ?>" value="<?= $Page->OldKey ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($Page->room_number->Visible) { // room_number ?>
    <div id="r_room_number"<?= $Page->room_number->rowAttributes() ?>>
        <label id="elh_rooms_room_number" for="x_room_number" class="<?= $Page->LeftColumnClass ?>"><?= $Page->room_number->caption() ?><?= $Page->room_number->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->room_number->cellAttributes() ?>>
<span id="el_rooms_room_number">
<input type="<?= $Page->room_number->getInputTextType() ?>" name="x_room_number" id="x_room_number" data-table="rooms" data-field="x_room_number" value="<?= $Page->room_number->EditValue ?>" size="30" maxlength="10" placeholder="<?= HtmlEncode($Page->room_number->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->room_number->formatPattern()) ?>"<?= $Page->room_number->editAttributes() ?> aria-describedby="x_room_number_help">
<?= $Page->room_number->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->room_number->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->room_type->Visible) { // room_type ?>
    <div id="r_room_type"<?= $Page->room_type->rowAttributes() ?>>
        <label id="elh_rooms_room_type" class="<?= $Page->LeftColumnClass ?>"><?= $Page->room_type->caption() ?><?= $Page->room_type->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->room_type->cellAttributes() ?>>
<span id="el_rooms_room_type">
<template id="tp_x_room_type">
    <div class="form-check">
        <input type="radio" class="form-check-input" data-table="rooms" data-field="x_room_type" name="x_room_type" id="x_room_type"<?= $Page->room_type->editAttributes() ?>>
        <label class="form-check-label"></label>
    </div>
</template>
<div id="dsl_x_room_type" class="ew-item-list"></div>
<selection-list hidden
    id="x_room_type"
    name="x_room_type"
    value="<?= HtmlEncode($Page->room_type->CurrentValue) ?>"
    data-type="select-one"
    data-template="tp_x_room_type"
    data-target="dsl_x_room_type"
    data-repeatcolumn="5"
    class="form-control<?= $Page->room_type->isInvalidClass() ?>"
    data-table="rooms"
    data-field="x_room_type"
    data-value-separator="<?= $Page->room_type->displayValueSeparatorAttribute() ?>"
    <?= $Page->room_type->editAttributes() ?>></selection-list>
<?= $Page->room_type->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->room_type->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->price_per_day->Visible) { // price_per_day ?>
    <div id="r_price_per_day"<?= $Page->price_per_day->rowAttributes() ?>>
        <label id="elh_rooms_price_per_day" for="x_price_per_day" class="<?= $Page->LeftColumnClass ?>"><?= $Page->price_per_day->caption() ?><?= $Page->price_per_day->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->price_per_day->cellAttributes() ?>>
<span id="el_rooms_price_per_day">
<input type="<?= $Page->price_per_day->getInputTextType() ?>" name="x_price_per_day" id="x_price_per_day" data-table="rooms" data-field="x_price_per_day" value="<?= $Page->price_per_day->EditValue ?>" size="30" placeholder="<?= HtmlEncode($Page->price_per_day->getPlaceHolder()) ?>" data-format-pattern="<?= HtmlEncode($Page->price_per_day->formatPattern()) ?>"<?= $Page->price_per_day->editAttributes() ?> aria-describedby="x_price_per_day_help">
<?= $Page->price_per_day->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->price_per_day->getErrorMessage() ?></div>
<script<?= Nonce() ?>>
loadjs.ready(['froomsadd', 'jqueryinputmask'], function() {
	options = {
		'alias': 'numeric',
		'autoUnmask': true,
		'jitMasking': false,
		'groupSeparator': '<?php echo $GROUPING_SEPARATOR ?>',
		'digits': 0,
		'radixPoint': '<?php echo $DECIMAL_SEPARATOR ?>',
		'removeMaskOnSubmit': true
	};
	ew.createjQueryInputMask("froomsadd", "x_price_per_day", jQuery.extend(true, "", options));
});
</script>
</span>
</div></div>
    </div>
<?php } ?>
<?php if ($Page->status->Visible) { // status ?>
    <div id="r_status"<?= $Page->status->rowAttributes() ?>>
        <label id="elh_rooms_status" class="<?= $Page->LeftColumnClass ?>"><?= $Page->status->caption() ?><?= $Page->status->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->status->cellAttributes() ?>>
<span id="el_rooms_status">
<template id="tp_x_status">
    <div class="form-check">
        <input type="radio" class="form-check-input" data-table="rooms" data-field="x_status" name="x_status" id="x_status"<?= $Page->status->editAttributes() ?>>
        <label class="form-check-label"></label>
    </div>
</template>
<div id="dsl_x_status" class="ew-item-list"></div>
<selection-list hidden
    id="x_status"
    name="x_status"
    value="<?= HtmlEncode($Page->status->CurrentValue) ?>"
    data-type="select-one"
    data-template="tp_x_status"
    data-target="dsl_x_status"
    data-repeatcolumn="5"
    class="form-control<?= $Page->status->isInvalidClass() ?>"
    data-table="rooms"
    data-field="x_status"
    data-value-separator="<?= $Page->status->displayValueSeparatorAttribute() ?>"
    <?= $Page->status->editAttributes() ?>></selection-list>
<?= $Page->status->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->status->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?= $Page->IsModal ? '<template class="ew-modal-buttons">' : '<div class="row ew-buttons">' ?><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" form="froomsadd"><?= $Language->phrase("AddBtn") ?></button>
<?php if (IsJsonResponse()) { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-bs-dismiss="modal"><?= $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" form="froomsadd" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
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
<?php
$Page->showPageFooter();
?>
<?php if (!$Page->IsModal && !$Page->isExport()) { ?>
<script>
loadjs.ready(["wrapper", "head", "swal"],function(){$('#btn-action').on('click',function(){if(froomsadd.validateFields()){ew.prompt({title: ew.language.phrase("MessageAddConfirm"),icon:'question',showCancelButton:true},result=>{if(result)$("#froomsadd").submit();});return false;} else { ew.prompt({title: ew.language.phrase("MessageInvalidForm"), icon: 'warning', showCancelButton:false}); }});});
</script>
<?php } ?>
<script<?= Nonce() ?>>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("rooms");
});
</script>
<?php if (Config("MS_ENTER_MOVING_CURSOR_TO_NEXT_FIELD")) { ?>
<script>
loadjs.ready("head", function() { $("#froomsadd:first *:input[type!=hidden]:first").focus(),$("input").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("select").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()}),$("radio").keydown(function(i){if(13==i.which){var e=$(this).closest("form").find(":input:visible:enabled"),n=e.index(this);n==e.length-1||(e.eq(e.index(this)+1).focus(),i.preventDefault())}else 113==i.which&&$("#btn-action").click()})});
</script>
<?php } ?>
<script<?= Nonce() ?>>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
