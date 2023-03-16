
let listItems = document.querySelectorAll(".form-check label input[type=checkbox]");
listItems.forEach(myFunction);
function myFunction(item, index) {
    item.addEventListener("click",()=>{
        if(item.checked==true){
            item.parentElement.parentElement.parentElement.classList.add("completed");
             //     let isCompleted=item.classList.contains("completed");
        //     if(isCompleted){
        //          
        //     }else{
        //         item.classList.add("completed");
        //     }
        }else{
            item.parentElement.parentElement.parentElement.classList.remove("completed");
        }
    })    
  }

/* <li>
  <div class='form-check'>
    <label class='form-check-label'>
      <input class='checkbox' type='checkbox' /> Dərsə yazılmaq </label>
  </div>
</li> */

 
 const addBtn = document.querySelector("#add-task");
 addBtn.addEventListener("click",()=>{
 const workText=document.querySelector("#work_to_do");
 if(workText.value.length<=0||workText.value==null||workText.value==undefined){
    alert("Görüləcək işi qeyd etməmisiniz.")
 }else{
    const liElem = document.createElement("li");
    liElem.innerHTML=`<div class="form-check"><label class="form-check-label"><input class="checkbox" type="checkbox" /> ${workText.value} <i class="input-helper"></i></label></div>`;
    document.querySelector(".todo-list-custom").append(liElem);
    listItems = document.querySelectorAll(".form-check label input[type=checkbox]");
    listItems.forEach(myFunction);
    // console.log(liElem);

 }
})





