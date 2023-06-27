window.addEventListener("DOMContentLoaded", function() {
    // let students = <?php echo $students_encode; ?>;
    fetch("https://laurelineagabibrac.sites.3wa.io/PHP/php-j1/Bonus/students.php")
    .then(function(response)
    {
        return response.json();
    })
    .then(function(students)
    {
        console.log(students);
        let body = document.querySelector("body");
        let script = document.querySelector("script");
        
        for (let student of students)
        {
            let article = document.createElement("article");
            
            let header = document.createElement("header");
            let name = document.createElement("h1");
            name.textContent = `${student.firstName} ${student.lastName}`;
            header.appendChild(name);
            
            let section = document.createElement("section");
            let notes = document.createElement("h2");
            notes.textContent ="Notes :";
            let ul = document.createElement("ul");
            let sum = 0;
            for (let grade of student.grades)
            {
                let li = document.createElement("li");
                li.textContent = `${grade}`;
                ul.appendChild(li);
                sum = sum + grade;
            }
            let average = sum / student.grades.length;
            section.appendChild(notes);
            section.appendChild(ul);
            
            let footer = document.createElement("footer");
            let h3 = document.createElement("h3");
            h3.textContent = average;
            footer.appendChild(h3);
            
            article.appendChild(header);
            article.appendChild(section);
            article.appendChild(footer);
            
            if (average < 10)
            {
                article.style.color = "red";
            }
            else if (average >=10 && average <= 13)
            {
                article.style.color = "orange";
            }
            else 
            {
                article.style.color = "green";
            }
            body.insertBefore(article,script);
        }
    });
})