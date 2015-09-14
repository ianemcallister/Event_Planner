$("#Login").click(function(event) {

  event.preventDefault();

  $.post("src/php/login.php", { username:'username', password:'password' }, function (data) {

  	if(data=="logged in!") {
  		window.location = 'src/pages/portfolio.html';
  		//window.location = 'https://www.google.co.kr/?gfe_rd=cr&ei=wbz2VfX3FeTM8gfA-p7QDA&gws_rd=ssl';
  	}

  });

});