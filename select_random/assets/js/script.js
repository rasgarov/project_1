const randButton = document.querySelector("button");
let namesArr = [];
randButton.addEventListener("click", function () {
    if (namesArr.length <= 0) {
        namesArr = document.querySelector("textarea").value.split("\n");
    }
    const index = Math.floor(Math.random() * namesArr.length);
    const nameByIndex = namesArr[index];
    document.querySelector("p span").innerText = nameByIndex;
    namesArr.splice(index, 1);

})