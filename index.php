<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" /> 
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash|Montserrat|Oswald');
		/*
			font-family: 'Oswald', sans-serif;
			font-family: 'Montserrat', sans-serif;
			font-family: 'Berkshire Swash', cursive;
		*/
		body{ padding:0;margin:0; background:url(img.jpg) 0 0 / cover; font-family: 'Berkshire Swash', cursive; }
		.bgblackovarlay{ position: fixed; top:0;left:0;width: 100%;height:100%;background: rgba(0,0,0,.1); }

		section{ width: 900px; margin:0 auto; overflow: hidden;  }
		h1 {    font-size: 61px;    text-shadow: 2px 8px 16px rgba(0,0,0,.5); }
		/*.trek{ background: url(trek.jpeg) 0 0 / auto 110% no-repeat; padding:20px; background-color: #000; }*/
		.trek{ padding:20px; background-color: #fff; float:left; }
		aside p{ padding: 20px;
    padding-left: 0px;
    font-size: 23px;
    text-shadow: 4px 5px 32px #000;
    line-height: 50px;
     }
		img{ float:left;    padding: 20px;    background-color: #fff;    margin: 0px 20px 0px 0px;     border-radius: 75px;}
	</style>
	<script   src="https://code.jquery.com/jquery-2.2.4.js"  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="  crossorigin="anonymous"></script>
</head>
<body>
	<div class="bgblackovarlay"></div>

	<section class="">
		<h1> Lets do sumthing important</h1>
		<aside>
		<!-- <div class="trek"><img src="trek.jpeg" width="400px" height="auto" /></div> -->
			<figure>
				<img src="trek.jpeg" width="400px" height="auto" />	
			</figure>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed diam orci. Etiam euismod lobortis fringilla. Donec ac fringilla eros. Donec ultrices vehicula neque et sodales. Donec tristique a nisi ut aliquet. Vestibulum nec ligula non orci suscipit egestas. Duis pellentesque cursus malesuada. Maecenas ut nibh quis augue ultricies bibendum eget eget velit. Donec vehicula elementum libero a ornare.</p>

			<p>Quisque sit amet turpis tellus. Nam sodales elit rhoncus, rutrum nulla a, vulputate mi. Fusce quam massa, ultrices vel risus sollicitudin, rutrum congue nisi. Proin pulvinar lectus quis faucibus varius. In ligula libero, lacinia a commodo maximus, mollis interdum neque. Nunc venenatis hendrerit ipsum, ac aliquet lacus. Quisque scelerisque ornare mauris in egestas. Nunc in sagittis massa. Phasellus tincidunt venenatis elit, at vehicula erat bibendum venenatis. Mauris ac mollis risus, in tempor diam. Sed tincidunt pharetra nisl et ultrices. Integer ut massa sit amet orci placerat sagittis quis non purus. Donec convallis, felis eget varius porta, metus sapien facilisis quam, vel congue sapien lectus sed mi.</p>

			<p>Proin semper cursus vehicula. Mauris vulputate vehicula neque ac imperdiet. Duis mattis nisl vitae mauris vehicula, non consectetur ligula tempor. In molestie, sapien id tincidunt bibendum, erat magna molestie nisi, venenatis tincidunt tellus leo finibus justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Aenean id vulputate odio, non porttitor sem. Donec eu ipsum massa. Phasellus viverra consectetur quam sit amet eleifend. Pellentesque elementum odio sit amet tortor laoreet varius. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur viverra imperdiet facilisis. Cras tristique congue magna, sed vulputate ligula porta in. Vestibulum a interdum est. Duis mattis tempus dui sed tempus.</p>

			<p>Fusce dictum nunc orci, sed mattis orci imperdiet a. Nullam ornare tincidunt augue. Vivamus vel porta nisl. Vivamus tempor ullamcorper semper. In fringilla vitae dui at rutrum. Ut ornare elit quis ex ullamcorper hendrerit. Phasellus sed turpis ut neque facilisis tincidunt sit amet nec nisl.</p>

			<p>Nunc eget luctus nibh. Vivamus vel lacus a sem tristique condimentum. Phasellus a arcu at lacus vestibulum efficitur vitae eget tellus. Nunc porttitor mauris sed congue ullamcorper. Cras non quam et ligula semper bibendum at laoreet arcu. Vestibulum sollicitudin mauris quis turpis hendrerit, imperdiet laoreet enim aliquam. Praesent mollis dolor lacinia elit fermentum aliquam. In id urna ex. Duis egestas, dui laoreet rhoncus varius, arcu elit tempus nulla, nec porttitor augue massa ut lacus. Vestibulum non metus accumsan, egestas lacus suscipit, faucibus metus. Donec nibh elit, condimentum vel imperdiet at, interdum vel purus. Sed imperdiet, magna vitae imperdiet tristique, quam nisi accumsan erat, ut efficitur neque nulla ut ligula. Nulla quis lorem sed libero elementum ultrices eu eu augue. Morbi malesuada nibh non ex faucibus, et egestas magna varius. Mauris varius fermentum velit ac fermentum. Pellentesque consequat consectetur erat, eget elementum nisi lacinia quis.</p>
		</aside>
	</section>
	<script type="text/javascript">
		$(document).scroll(function(){
			$('body').css({'background-position':'0px -'+$(window).scrollTop()/10+'px'});
			$('figure img').css({'transform':'translate3d(0,'+(-1*$(window).scrollTop()/5)+'px,0)'});
		});
	</script>
</body>
</html>