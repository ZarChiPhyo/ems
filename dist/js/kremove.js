const removeBtn = document.querySelectorAll('.removeBtn');

removeBtn.forEach(element => {
    element.onclick = function(event) {
        let id = event.target.value;
        console.log(id);
        let tr = event.target.parentElement.parentElement;
        tr.remove();
        $.ajax({
            url: 'removeProducts.php',
            method: 'post',
            data: {id: id},
            success: function(response) {
                // console.log(response);
                if(response == 'successful') {
                    alert("Successfully Removed one item");
                }
            }
        })
        // alert(tr.remove());
    }
    
});
