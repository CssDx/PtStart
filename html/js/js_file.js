function toggleImage() {
    var img = document.getElementById("invise");
    if (img.style.display === "none") {
        img.style.display = "block";
    } else {
        img.style.display = "none";
    }
}

function submitPost() {
            const title = document.getElementById('postTitle').value;
            const content = document.getElementById('postContent').value;

            if (title && content){
                document.getElementById('successMessage').style.display = 'block';
                document.getElementById('postTitle').value = '';
                document.getElementById('postContent').value = '';
            } else {
                alert('Не оставляйте поля пустыми!');
            }
}
