function toggleForm() {
    var checkBox = document.getElementById("showForm");
    document.cookie = "showForm=" + (checkBox.checked ? "1" : "0");
}