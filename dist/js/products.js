let addCart = document.querySelectorAll('.add_cart');

function addToCart(items){
    items.forEach(item => {
        item.onclick = function()
        {
            console.log(item);
            let photo = item.parentElement.firstChild;
            let image = photo.src;
            console.log(image);

            let name = photo.nextElementSibling;
            console.log(name);

            let price = name.nextElementSibling;
            console.log(price);

            $.ajax({
                url: 'add_product.php',
                methods: 'post',
                data: {photo:image, name:name, price:price},
                success: function(response){
                    if(response=='success'){
                        alert ("success");
                    }
                }
            })
        }
    });
}
addToCart(addCart);