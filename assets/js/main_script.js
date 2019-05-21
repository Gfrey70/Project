$('#vl-open-btn').on('click', function(){
  $('#vl-account-pane').toggleClass('vl-account-pane-open');
  $('#vl-pane-control').toggleClass('vl-content-open');
});
//open the signup
$('#vl-signup-open').on('click', function(){
  $('#vl-login-form').removeClass('vl-all-open-form').addClass('vl-all-form');
  $('#vl-signup-form').removeClass('vl-all-form').addClass('vl-all-open-form');
})
//open the login
$('#vl-signin-open').on('click', function(){
  $('#vl-signup-form').removeClass('vl-all-open-form').addClass('vl-all-form');
  $('#vl-login-form').removeClass('vl-all-form').addClass('vl-all-open-form');
})
