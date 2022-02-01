const userList = document.querySelector(".users .users-list");


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/usersList.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);