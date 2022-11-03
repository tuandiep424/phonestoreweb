$('.thaydoi_sl').on('click', function(event){
	// ghi đè sự kiện mặc định
	event.preventDefault();
	var type = $(this).attr('data-type');
	// lấy value của các thẻ html trong form $(selector).val();
	var soluongdoi = $(this).parent().find('input').val();
	var price = $(this).parent().find('input').attr('data-price');
	if(type == 'up'){
		soluongdoi++;
	}else{
		if(soluongdoi > 1){
			soluongdoi--;
		}
	}
	// thay đổi giá trị của thẻ trong form $(selector).val('giá trị mới');
	$(this).parent().find('input').val(soluongdoi);
	var total_price_product = soluongdoi * price;
	$(this).parents('.action').find('.total-price-product').attr('data-total', total_price_product);
	$(this).parents('.action').find('.total-price-product').text(total_price_product+' đ');
	var total = 0;
	$('.total-price-product').each(function(){
		total += parseInt($(this).attr('data-total'));
	});
	$('#total_price_product').text(total+ 'đ');
});
$('.xoa2').on('click', function(){
	$(this).parents('.action').remove();
});
$('.xoahet').on('click', function(){
	$(this).parents('.xoa').remove()
});