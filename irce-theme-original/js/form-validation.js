$().ready(function() {

$("#contactUsForm").validate({
    rules: {
            contactName: "required",
            contactEmail: {
                required: true,
                email: true
            }
        },
        messages: {
            contactName: "Contact name is required",
            contactEmail: "Contact email is required"
        }
    });

    /* Text area maxlength */
    var onEditCallback = function(remaining){
        $(this).siblings('.charsRemaining').text("Characters remaining: " + remaining);
        if(remaining > 0){
            $(this).css('background-color', 'white');
        }
    }
    var onLimitCallback = function(){
        $(this).css('background-color', 'red');
    }
    $('textarea[maxlength]').limitMaxlength({
        onEdit: onEditCallback,
        onLimit: onLimitCallback
    });

  });

jQuery.fn.limitMaxlength = function(options){
    var settings = jQuery.extend({
        attribute: "maxlength",
        onLimit: function(){},
        onEdit: function(){}
    }, options);
    // Event handler to limit the textarea
    var onEdit = function(){
        var textarea = jQuery(this);
        var maxlength = parseInt(textarea.attr(settings.attribute));
        if(textarea.val().length > maxlength){
            textarea.val(textarea.val().substr(0, maxlength));
            // Call the onlimit handler within the scope of the textarea
            jQuery.proxy(settings.onLimit, this)();
        }
        // Call the onEdit handler within the scope of the textarea
        jQuery.proxy(settings.onEdit, this)(maxlength - textarea.val().length);
    }
    this.each(onEdit);
    return this.keyup(onEdit)
                .keydown(onEdit)
                .focus(onEdit)
                .live('input paste', onEdit);
}

    function getFilename(){
            var fullPath = document.getElementById("productImage").value;
            if (fullPath) {         
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));         var filename = fullPath.substring(startIndex);         if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {                 filename = filename.substring(1);         
                }         
                document.forms["designAwardsForm"]["productImageFilename"].value = filename;
                //alert(document.forms["designAwardsForm"]["productImageFilename"].value); 

            }     
    }
 
    function getFilenamesAtelier(){
            var fullPath = ""
            for(i=1;i<9;i++){
                fullPath = document.getElementById("img"+i).value;
                if (fullPath) {         
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));         var filename = fullPath.substring(startIndex);         if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {                 filename = filename.substring(1);         
                    }         
                    document.forms["atelier_form"]["img"+i+"_filename"].value = filename;
                    //alert(document.forms["atelier_form"]["img"+i+"_filename"].value); 
                } 
            }    
    }
 