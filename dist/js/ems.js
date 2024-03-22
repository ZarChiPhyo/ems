const filter = document.querySelector('#filter');
const min_salary = document.querySelector('#min_salary');
const max_salary = document.querySelector('#max_salary');

const btn_verify = document.querySelector('.verify');
//console.log(btn_verify);

document.addEventListener('click',function(event){
    console.log('click event');
    //console.log(event.target);
    let btn = event.target;
    let parent = btn.parentElement.parentElement;
    console.log(parent.getAttribute('id'));
    let id=parent.getAttribute('id');
    $.ajax({
        method:'post',
        url:'emp_verify.php',
        data:{id:id},
        success:function(response){
            if(response=="success"){
                alert("Verification is successful");
            }
        }
    })
});


// filter.addEventListener('click',function(event){
//     event.preventDefault();
//     let min_value = min_salary.value ;
//     let max_value = max_salary.value;
//     //console.log(min_value);
//     $.ajax({
//         method:'post',
//         url:'filter_job.php',
//         data:{min:min_value,max:max_value},
//         success:function(response)
//         {
//             let tbody = $("#data-body");
//             tbody.empty().append(response);
//             // tbody.removeChildren();
//             // tbody.add(response);
//             //alert(response);
//         }
//     })
    
// })