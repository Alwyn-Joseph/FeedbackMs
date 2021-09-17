function sendEmail() {
    Email.send({
        Host: "smtp.gmail.com",
        Username: "amialwyn@gmail.com",
        Password: "ForDevelopment",
        To: 'alwynjoseph33@gmail.com',
        From: "amialwyn@gmail.com",
        Subject: "Testing",
        Body: 'Dear $e_name,<br><br><br>Thank you for interviewing our students! We’d love to hear what you think of our students<br>Your feedback will help us determine what areas we have to improve and how we can make our students better for you.<br><br><br>Use the below credentials<br>Your Username: $email<br>Your Password: 1234<br><br>Use this link the below link to provide your feedback,<br>http://localhost/feedbackms/FeedbackMs/employerfeedbackform.html<br><br><br><br>Thanks and Regards,<br><br><br>Alvas Education Foundation'
    }).then(
        window.onload = function swal() {
            Swal.fire({
                icon: 'success',
                title: 'Sent',
                text: 'Request has been Sent!',
            })
        }
    );
}