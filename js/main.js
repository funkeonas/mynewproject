               
$('.ans').hide();

$('.faq h2').click(function(){
$(this).next('.ans').toggle(1000).siblings('.faq .ans').hide();
})

