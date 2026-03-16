function confirmDelete(elem) {
    var _token = $(elem).attr("data-token");
    var formId = $(elem).attr("data-formId");
    var href = $(elem).attr("data-href");
    var id = $(elem).attr("data-href");
    var redirectUrl = $(elem).attr("data-redirectUrl");

    var result = confirm("You are about to delete this record. Are you sure?");
    if (result) {
        $.ajax({
            type: "post",
            url: href,
            dataType: "json",
            data: {
                _token: _token,
                'redirect':redirectUrl,
            },
            beforeSend: function () {},
            success: function (data) {
                if (data.status == false) {
                    alert(data.message);
                } else {
                    window.location.href = data.redirect;
                }
            },
        });
    }
}


function confirmClickedDyno(elem) {
  var _token = $(elem).attr("data-token");
  var href = $(elem).attr("data-href");
  var redirect_to = $(elem).attr("data-redirect_to");
  // msg = $(elem).attr('msg');
  msg = "You are about to delete this record. Are you sure?";
  swal({
    title: "Are you sure?",
    text: msg,
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "post",
        url: href,
        dataType: "json",
        data: {
          _token: _token,
          redirect_to: redirect_to,
        },
        beforeSend: function () {},
        success: function (data) {
          if (data.status == false) {
            //   alert(data.message);
          } else {
            swal({
              title: data.message,
              text: msg,
              icon: "success",
              buttons: {
                confirm: true,
                cancel: false,
                closeOnClickOutside: false,
              },
              successMode: true,
            }).then((isSuccess) => {
              if (isSuccess) {
                window.location.href = redirect_to;
              }
            });
          }
        },
      });
    }
  });
}




