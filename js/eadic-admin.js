/*
====================
ADMIN JS
====================
@package eadic-theme
*/

jQuery(document).ready(function(jQuery) {
  // Email Handler
  jQuery("#add_email").click(function() {
    var intId = jQuery("#email_holder div").length + 1;
    var fieldWrapper = jQuery("<div class='fieldwrapper' id='email_field_" + intId + "'/>");
    var value = data;
    var fName = jQuery("<input type='text' class='fieldname' size='35' value=" + value + " >");
    var removeButton = jQuery("<button id='rem_email' class='button button-secondary rem_email'><span class='dashicons dashicons-no'></span></button>");
    removeButton.click(function() {
      jQuery(this).parent().remove();
    });
    fieldWrapper.append(fName);
    fieldWrapper.append(removeButton);
    jQuery("#email_holder").append(fieldWrapper);
    jQuery("#yourform").remove();
    var fieldSet = jQuery("<fieldset id='yourform'><legend>Your Form</legend></fieldset>");
    jQuery("#email_holder div").each(function() {
      var id = "input" + jQuery(this).attr("id").replace("field","");
      var label = jQuery("<label for='" + id + "'>" + jQuery(this).find("input.fieldname").first().val() + "</label>");
      var input;
      switch (jQuery(this).find("select.fieldtype").first().val()) {
        case "checkbox":
        input = jQuery("<input type='checkbox' id='" + id + "' name='" + id + "' />");
        break;
        case "textbox":
        input = jQuery("<input type='text' id='" + id + "' name='" + id + "' />");
        break;
        case "textarea":
        input = jQuery("<textarea id='" + id + "' name='" + id + "' ></textarea>");
        break;
      }
      fieldSet.append(label);
      fieldSet.append(input);
    });
    jQuery("body").append(fieldSet);
});

function handleDragStart(e) {
this.style.opacity = '0.4';  // this / e.target is the source node.
}
var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
col.addEventListener('dragstart', handleDragStart, false);
});
function handleDragStart(e) {
this.style.opacity = '0.4';  // this / e.target is the source node.
}

function handleDragOver(e) {
if (e.preventDefault) {
e.preventDefault(); // Necessary. Allows us to drop.
}

e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

return false;
}

function handleDragEnter(e) {
// this / e.target is the current hover target.
this.classList.add('over');
}

function handleDragLeave(e) {
this.classList.remove('over');  // this / e.target is previous target element.
}

var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
col.addEventListener('dragstart', handleDragStart, false);
col.addEventListener('dragenter', handleDragEnter, false);
col.addEventListener('dragover', handleDragOver, false);
col.addEventListener('dragleave', handleDragLeave, false);
});
function handleDrop(e) {
// this / e.target is current target element.

if (e.stopPropagation) {
e.stopPropagation(); // stops the browser from redirecting.
}

// See the section on the DataTransfer object.

return false;
}

function handleDragEnd(e) {
// this/e.target is the source node.

[].forEach.call(cols, function (col) {
col.classList.remove('over');
});
}

var cols = document.querySelectorAll('#columns .column');
[].forEach.call(cols, function(col) {
col.addEventListener('dragstart', handleDragStart, false);
col.addEventListener('dragenter', handleDragEnter, false)
col.addEventListener('dragover', handleDragOver, false);
col.addEventListener('dragleave', handleDragLeave, false);
col.addEventListener('drop', handleDrop, false);
col.addEventListener('dragend', handleDragEnd, false);
});
var dragSrcEl = null;

function handleDragStart(e) {
// Target (this) element is the source node.
this.style.opacity = '0.4';

dragSrcEl = this;

e.dataTransfer.effectAllowed = 'move';
e.dataTransfer.setData('text/html', this.innerHTML);
}
function handleDrop(e) {
// this/e.target is current target element.

if (e.stopPropagation) {
e.stopPropagation(); // Stops some browsers from redirecting.
}

// Don't do anything if dropping the same column we're dragging.
if (dragSrcEl != this) {
// Set the source column's HTML to the HTML of the column we dropped on.
dragSrcEl.innerHTML = this.innerHTML;
this.innerHTML = e.dataTransfer.getData('text/html');
}

return false;
}
var dragIcon = document.createElement('img');
dragIcon.src = 'logo.png';
dragIcon.width = 100;
e.dataTransfer.setDragImage(dragIcon, -10, -10);



});
