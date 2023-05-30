// const btn = document.querySelector('.site-btn')
// const form = document.getElememtById('form')
// form.addEventListener('submit', (e)=>{
//     alert('Glory to GOD, its Working')
//     e.preventDefault()
//     function onsubmit(form){
//         var ajax = new XMLHttpRequest()
    
//         ajax.open('POST', form.getAttribute("action"),true)
//         ajax.onreadystatechange=function(){
//             if(this.readyState == 4 && this.status ==200){
//                 var data =  JSON.parse(this.responseText)
//                 alert(data.status - '-' - data.message)
//             }
//             if(this.status==500){
//                 alert(this.responseText)
//             }
//         }
//         var formData= new FormData(form )
//             ajax.send(formData)
//         // return false
//     }
// })

function onsubmitForm(form){
    var ajax = new XMLHttpRequest()

    ajax.open('POST', form.getAttribute("action"),true)
    ajax.onreadystatechange=function(){
        if(this.readyState == 4 && this.status ==200){
            var data =  JSON.parse(this.responseText)
            alert( data.message)
        }
        if(this.status==500){
            alert('whats happening')
        }
    }
    var formData= new FormData(form )
        ajax.send(formData)
    return false
}