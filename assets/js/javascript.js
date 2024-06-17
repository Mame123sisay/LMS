document.getElementById('section_id').addEventListener('change', function () {
    var sectionId = this.value;
    var studentSelect = document.getElementById('student_id');
    var students = studentSelect.options;

    // Reset the student select field
    for (var i = 0; i < students.length; i++) {
        students[i].style.display = 'none';
    }

    // Display only the students belonging to the selected section
    for (var i = 0; i < students.length; i++) {
        if (students[i].getAttribute('data-section') == sectionId || students[i].value == '') {
            students[i].style.display = 'block';
        }
    }

    // Reset the selected student
    studentSelect.value = '';
});

var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}


const editButtons = document.querySelectorAll('.edit-btn');
  editButtons.forEach(button => {
    button.addEventListener('click', function() {
      const resultId = this.getAttribute('data-result-id');
      const score = this.getAttribute('data-score');

      // Populate modal with data
      document.getElementById('edit-result-id').value = resultId;
      document.getElementById('edit-score').value = score;

      // Show the modal
      $('#editResultModal').modal('show');
    });
  });