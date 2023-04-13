const select = document.querySelector('#pa_size');
const currentURL = new URL(window.location.href);

// Thêm giá trị của select vào URL khi thay đổi
select.addEventListener('change', function() {
  const size = this.value;

  if (size) {
    currentURL.searchParams.set('size_id', size);
  } else {
    currentURL.searchParams.delete('size_id');
  }
  redirectURL = `?redirect=cart&action=add&product_id=<?= $prd['product_id'] ?>&size_id=${size}`; // Cập nhật redirectURL với size mới
  document.querySelector('#add_to_cart a').href = redirectURL;
  window.location.href = currentURL.toString();
});
const urlParams_1 = new URLSearchParams(window.location.search);
const productId = urlParams_1.get('product_id');
const urlParams_2= new URLSearchParams(window.location.search);
const sizeID = urlParams_2.get('size_id');
console.log(urlParams_1);
// Thiết lập giá trị của select từ URL khi tải lại trang
window.addEventListener('load', function() {
  const params = currentURL.searchParams;
  const selectedSize = params.get('size_id');
  
  if (selectedSize) {
    select.value = selectedSize;
  }
    redirectURL = `?redirect=cart&action=add&product_id=${productId}&size_id=${sizeID}`; // Cập nhật redirectURL với size hiện tại
    document.querySelector('#add_to_cart a').href = redirectURL;
});