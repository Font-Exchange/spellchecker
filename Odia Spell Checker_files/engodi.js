$(document).ready(function() {
    $('#btnengodi').click(function() {
    var textarea=$('#Unicode'); 
    textarea.val(textarea.val().replace(/ବିଡିଓ/g,"ଗୋଷ୍ଠୀ ଉନ୍ନୟନ ଅଧିକାରୀ")); 
    textarea.val(textarea.val().replace(/ଆଇଆଇସି/g,"ଥାନା ଅଧିକାରୀ"));
   
textarea.val(textarea.val().replace(/ଏସଟିଏଫ/g,"ସ୍ବତନ୍ତ୍ର କାର୍ଯ୍ୟବଳ"));
textarea.val(textarea.val().replace(/ପୁଲିସ ସବ୍‌ଇନ୍ସପେକ୍ଟର/g,"ଥାନା ଉପନିରୀକ୍ଷକ"));
textarea.val(textarea.val().replace(/ସବ୍‌ଇନ୍ସପେକ୍ଟର/g,"ଉପନିରୀକ୍ଷକ"));
textarea.val(textarea.val().replace(/ଇନ୍ସପେକ୍ଟର/g,"ନିରୀକ୍ଷକ"));
textarea.val(textarea.val().replace(/ଭର୍ଚୁଆଲ/g,"ଆଭାସି"));
textarea.val(textarea.val().replace(/ସିଲ୍‌/g,"ମୁଦ"));
textarea.val(textarea.val().replace(/କ୍ରିକ୍‌/g,"​‌ଯୋର"));
textarea.val(textarea.val().replace(/କେଫ୍‌/g,"ଜଳପାନ କେନ୍ଦ୍ର"));
textarea.val(textarea.val().replace(/ମୋବାଇଲ ସ୍କ୍ବାଡ/g,"ଭ୍ରାମ୍ୟମାଣ ଚଢ଼ଉ ଦଳ"));
textarea.val(textarea.val().replace(/ଇଣ୍ଡୋର ଷ୍ଟାଡିୟମ/g,"ଅଭ୍ୟନ୍ତର କ୍ରୀଡ଼ାଙ୍ଗନ"));
   
    input.select();
        document.execCommand("copy");
   
  

    });
});
