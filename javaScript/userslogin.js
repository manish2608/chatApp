const form = document.querySelector(" .login form"),
    signupBtn = form.querySelector(".btn input"),
    errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
    e.preventDefault();

}

signupBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/usersLogin.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "usersList.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;


                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}