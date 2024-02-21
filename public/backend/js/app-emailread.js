$(function() {
	"use strict";

    new PerfectScrollbar('.email-navigation');
    new PerfectScrollbar('.email-read-box');
});

document.addEventListener("DOMContentLoaded", function() {
    let replyBtn = document.querySelector('.compose-mail-btn');
    replyBtn.addEventListener('click', function() {
        let email = replyBtn.getAttribute('data-email');
        let subject = replyBtn.getAttribute('data-subject');
        document.getElementById('email').value = email;
        document.getElementById('subject').value = subject;
        document.querySelector('.compose-mail-popup').classList.add('active');
    });
});

$(document).ready(function() {
    $('#sendEmail').click(function() {
        let email = $('#email').val();
        let subject = $('#subject').val();
        let message = $('#message').val();

        $.ajax({
            type: 'POST',
            url: '/administrator/message/replyMessage',
            data: {
                email: email,
                subject: subject,
                message: message,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.message);
                // Lakukan tindakan lain setelah email berhasil dikirim
            },
            error: function(xhr, status, error) {
                alert('Gagal mengirim email: ' + error);
            }
        });
    });
});
