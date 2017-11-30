$('document').ready(function(){
// jQuery.fn.sortElements = (function(){
//     var sort = [].sort;
//     return function(comparator, getSortable) {
//         getSortable = getSortable || function(){return this;};
//         var placements = this.map(function(){
//             var sortElement = getSortable.call(this),
//                 parentNode = sortElement.parentNode,
//                 // Since the element itself will change position, we have
//                 // to have some way of storing its original position in
//                 // the DOM. The easiest way is to have a 'flag' node:
//                 nextSibling = parentNode.insertBefore(
//                     document.createTextNode(''),
//                     sortElement.nextSibling
//                 );
//             return function() {
//                 if (parentNode === this) {
//                     throw new Error(
//                         "You can't sort elements if any one is a descendant of another."
//                     );
//                 }
//                 // Insert before flag:
//                 parentNode.insertBefore(this, nextSibling);
//                 // Remove flag:
//                 parentNode.removeChild(nextSibling);
//             };
//         });
//         return sort.call(this, comparator).each(function(i){
//             placements[i].call(getSortable.call(this));
//         }); 
//     };
// })();


// speaker list
$('.name-sort').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'name');
        $('#conference-form').submit();
    });
$('.title-sort-p').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'title');
        $('#conference-form').submit();
    });


// master list
    $('.ex-header > div a').not('.el-print').click(function(e){
        e.preventDefault();
        if (!$(this).hasClass('current')) {
            $('.ex-header > div a').removeClass('current');
            $(this).addClass('current');
        };
    });
    $('.company-sort').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'company');
        $('#conference-form').submit();
    });
    $('.title-sort').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'name');
        $('#conference-form').submit();
    });
    $('.speaker-sort').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'speaker_id');
        $('#conference-form').submit();
    });
    $('.date-sort').click(function(){
        $('#conference-form input[name=sort]').attr('value', 'day_date');
        $('#conference-form').submit();
    });
});


