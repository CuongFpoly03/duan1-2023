//check box all
document.getElementById('deselect-all').addEventListener('click', function() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
});

function updateCart(productId, action) {
    var input = document.querySelector('input[name="quantity_' + productId + '"]');
    var currentQuantity = parseInt(input.value);
    var price = parseFloat(input.getAttribute('data-price'));

    if (action === 'increment') {
        input.value = currentQuantity + 1;
    } else if (action === 'decrement' && currentQuantity > 1) {
        input.value = currentQuantity - 1;
    }

    // Gửi yêu cầu cập nhật số lượng sản phẩm vào giỏ hàng bằng AJAX hoặc form submit
    document.getElementById('update_cart_form').submit();
}