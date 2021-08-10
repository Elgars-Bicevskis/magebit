//disable form submitting with enter

$(function(){
 var keyStop = {
   13: "input:text, input:password", // stop enter = submit
   end: null
 };
 $(document).bind("keydown", function(event){
  var selector = keyStop[event.which];

  if(selector !== undefined && $(event.target).is(selector)) {
      event.preventDefault(); //stop event
  }
  return true;
 });
});
