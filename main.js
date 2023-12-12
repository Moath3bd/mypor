var typed= new Typed(".text",{
    strings:["Web Developer"],
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true
});
document.addEventListener("DOMContentLoaded", function () {
    // Fetch projects using Ajax
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var projects = JSON.parse(this.responseText);
            displayProjects(projects);
        }
    };
    xhr.open("GET", "get_projects.php", true);
    xhr.send();
});

function displayProjects(projects) {
    // Update the DOM with project data
    var projectContainer = document.getElementById("project-container");

    projects.forEach(function (project) {
        var projectDiv = document.createElement("div");
        projectDiv.className = "project";
        projectDiv.innerHTML = "<h2>" + project.project_title + "</h2><p>" + project.project_description + "</p>";
        projectContainer.appendChild(projectDiv);
    });
}

