$(document).ready(function() {
        $(".alert").fadeIn().queue(function() {
            setTimeout(function(){$(".alert-warning").dequeue();
          }, 4000);
        });
        $(".alert").fadeOut();
});
