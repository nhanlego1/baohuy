(function($) {



    Drupal.behaviors.translate = {
        attach: function(context, settings) {

            $("fieldset#edit-customer-profile-billing legend span").html('<h3>Thông tin thanh toán</h3>');
            $(".form-item-customer-profile-billing-commerce-customer-address-und-0-name-line label").html('Họ và tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span>');
            $("#edit-cart-contents legend span").html('<h3>Thông tin sản phẩm</h3>');
            $(".checkout-continue").val('Tiếp tục thanh toán');
            //cart content
            $(" th.views-field-line-item-title").text('Sản phẩm');
            $(" th.views-field-commerce-unit-price").text('Giá tiền ');
            $(" th.views-field-edit-quantity").text('Số lượng ');
            $(" th.views-field-edit-delete").text('Xoá ');
            $(" th.views-field-commerce-total").text('Tổng cộng ');
            $(".line-item-total-label").text('Tổng cộng ');
            //
         //  $("#views-form-commerce-cart-form-default #edit-submit").val('Cập nhật giỏ hàng');
          //  $("#views-form-commerce-cart-form-default #edit-checkout").val('Thanh toán');
            $(".checkout-help").text('Xem lại đơn hàng');
            $(".checkout-review  tr").each(function(e){
                console.log(e);
                if(e == 0){
                    $(this).find('td').text('Thông tin sản phẩm ');
                }
                if(e == 5){
                    $(this).find('td').text('Thông tin tài khoản ');
                }
                if(e == 7){
                    $(this).find('td').text('Thông tin thanh toán');
                }
            });
            $(".page-cart h1.title").text('Giỏ hàng');
            $(".component-type-commerce-price-formatted-amount .component-title").text('Tổng cộng');
            $("#edit-commerce-payment legend span").html('<h3>Phương thức thanh toán</h3>');
            $("#commerce-checkout-form-checkout .account legend span").html('<h3>Thông tin tài khoản</h3>');

        }
    }



})(jQuery);
