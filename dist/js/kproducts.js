let addCart = document.querySelectorAll('.add_cart');
function selectedItem(items) {
    for(let index=0; index<items.length; index++) {
        items[index].onclick = function() {
            let img = items[index].parentElement.firstChild;
            let image = img.src;
            let product = img.nextElementSibling;
            let productName = product.innerHTML;
            let price = product.nextElementSibling.innerHTML;
            console.log(price);
            console.log(productName);
            console.log(image);
            
            $.ajax({
                url: 'kcart_items.php',
                method: 'post',
                data: {
                    productName: productName,
                    productPrice: price,
                    productImage: image
                },
                success: function(response) {
                    console.log(response);
                    if(response == 'success') {
                        alert("1 new item has been added");
                    }
                }
            });
        }
    }
};
selectedItem(addCart);



