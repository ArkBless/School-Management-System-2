document.addEventListener('DOMContentLoaded', function () {
    // Toggle Admin dropdown
    const adminDropdown = document.getElementById('admin-dropdown');
    adminDropdown.addEventListener('click', function (e) {
        if (e.target.closest('.sidebar-submenu')) return;
        adminDropdown.classList.toggle('open');
    });

    // Toggle Attendance dropdown
    const attendanceDropdown = document.getElementById('attendance-dropdown');
    attendanceDropdown.addEventListener('click', function (e) {
        if (e.target.closest('.sidebar-submenu')) return;
        attendanceDropdown.classList.toggle('open');
    });

    // Toggle Marks dropdown
    const marksDropdown = document.getElementById('marks-dropdown');
    marksDropdown.addEventListener('click', function (e) {
        if (e.target.closest('.sidebar-submenu')) return;
        marksDropdown.classList.toggle('open');
    });
    

    // Load addStudent.php into #main-content when 'Student' is clicked
    const studentLink = document.getElementById('student-link');
    if (studentLink) {
        studentLink.addEventListener('click', function (e) {
            e.preventDefault();

            fetch('addStudent.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('main-content').innerHTML = html;

                    // OPTIONAL: Dynamically load student-specific JS
                    const script = document.createElement('script');
                    script.src = 'js/addStudent.js'; // Only include this if you have logic there
                    document.body.appendChild(script);
                })
                .catch(error => {
                    console.error('Error loading addStudent.php:', error);
                    document.getElementById('main-content').innerHTML = '<p>Error loading Student form.</p>';
                });
        });
    }

    // Load addTeacher.php into #main-content when 'Teacher' is clicked
    const teacherLink = document.getElementById('teacher-link');
    if (teacherLink) {
        teacherLink.addEventListener('click', function (e) {
            e.preventDefault();
            fetch('addTeacher.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('main-content').innerHTML = html;
                })
                .catch(error => {
                    console.error('Error loading addTeacher.php:', error);
                    document.getElementById('main-content').innerHTML = '<p>Error loading Teacher form.</p>';
                });
        });
    }

    const dashboardLink = document.getElementById('admin-dashboard-link');
    if (dashboardLink) {
        dashboardLink.addEventListener('click', function (e) {
            e.preventDefault();
            fetch('adminDashboard.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    document.getElementById('main-content').innerHTML = html;
                })
                .catch(error => {
                    console.error('Error loading adminDashboard.php:', error);
                    document.getElementById('main-content').innerHTML = '<p>Error loading admin Dashboard form.</p>';
                });
        });
    }

});