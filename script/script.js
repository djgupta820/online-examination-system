function openQuesPaper()
{
    window.open("question-paper.php", "_blank");
}

function validate()
{
    var course = document.getElementById("courses");
    var sem = document.getElementById("sem");
    var sub = document.getElementById("subject");
    var scode = document.getElementById("scode");
    if(course=="" || sem=="" || sub=="" || scode=="")
    {
        const errEle = document.createElement("p");
        const node = document.createTextNode("Please fill the details correctly");
        errEle.appendChild(node);
        var elem = document.getElementById("err");
        elem.classList.add("alert alert-danger");
        elem.appendChild(errEle);
        //document.getElementById("error").innerHTML = "Please fill the details correctly";
    }
}
