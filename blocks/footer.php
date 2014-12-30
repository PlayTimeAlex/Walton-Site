<?php if($_SERVER['REQUEST_URI'] == '/' OR $_SERVER['REQUEST_URI'] == '/index.php') : ?>
        <div class="b-footer__copyrights">
            <div class="container">
                СДЕЛАНО С ЛЮБОВЬЮ В <a href="//mymediapromo.ru">MyMediaPro</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
<?php else: ?>
	<footer class="footer">
		<div class="f-black">
			<div class="container clearfix">
				<div class="f-black__logo pull-left"><a href="/"><img width="124" height="38" src="images/logo-white.png"  alt="Walton"/></a></div>
				<div class="pull-left">
					<div class="f-black__copyright">
						ООО “Волтон Юниверсал”
						<br/>
						Все права защищенны
					</div>
					<div class="f-black__create">Сделано с любовью в <a target="_blank" href="http://mymediapro.ru/">MMPRO</a></div>
				</div>
				<div class="f-black__right pull-right">
					<nav class="f-black__nav">
						<ul class="f-black__nav__list horizontal">
							<li class="f-black__nav__item"><a href="#">Торговые платформы</a></li>
							<li class="f-black__nav__item"><a href="#">Вопросы и ответы</a></li>
							<li class="f-black__nav__item"><a href="#">Книги</a></li>
							<li class="f-black__nav__item"><a href="#">Уведомление о рисках</a></li>
							<li class="f-black__nav__item"><a href="#">Отмывание денег</a></li>
							<li class="f-black__nav__item"><a href="#">Контракт (публичная оферта)</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer><!--end footer-->
</body>
</html>
<?php endif; ?>