
<!doctype html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>Звітна документація за проживання у квартирі</title>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="assets/jquery-2.0.3.js"></script>
	<script src="assets/bootstrap.js"></script>
	<script src="assets/contacts-form.js"></script>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="contacts">
				<p class="text-center lead">Бажаєте замовити звітну документацію?</p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="contacts">
				<p class="text-center lead">Телефонуйте прямо зараз +380987707957</p>
			</div>
		</div>
	</div>

  <br/>

  

	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center">Звітна документація за проживання<br/><small>у Хмельницьку, а також у будь-якому іншому місті України</small></h1>
		</div>
	</div>

	<hr/>

	<div class="row">
		<div class="col-sm-4">
			<p class="text-center">
				<img src="images/question.png" alt="Документи за проживання"/>
			</p>
		</div>

		<div class="col-sm-8">
			<h2>Потрібна звітна документація за проживання?</h2>
			<p class="lead">Ви часто їздите у відрядженні по території України і Вам необхідна звітна документація за проживання в орендованій квартирі, 
			а власники квартир не завжди надають потрібні Вам документи? Ми з задоволенням допоможемо Вам і зробимо увесь необхідний пакет документів за проживання
			в будь-якому місті України.</p>
		</div>
	</div>

	<hr/>

	<div class="row">
		<div class="col-sm-4">
			<p class="text-center">
				<img src="images/checklist.png" alt="Документи за проживання"/>
			</p>
		</div>

		<div class="col-sm-8">
			<h2>Який пакет документів Ви отримаєте?</h2>
			<ul class="lead">
				<li>Квитанція прохідного касового ордера - чек з мокрою печаткою.</li>
				<li>Копія свідоцтва платника єдиного податку.</li>
				<li>Копія Свідоцтва про державну реєстрацію.</li>
				<li>Копію виписки з єдиного державного реєстру юридичних особин та фізичних особин &ndash; підприємця.</li>
				<li>Квитанція за проживанняз мокрою печаткою та підписом підприємця з вказанням дати заселення та виселення, загальна кількість діб 
				проживання, ціни за добу проживання і за весь період.</li>
			</ul>
		</div>
	</div>

	<hr/>

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="contacts-footer">
				<p class="lead text-center">Виникли питання?</p>
				<p class="lead text-center">Телефонуйте: +380987707957</p>
			</div>
      <br/>
		</div>
	</div>
<p>
	<a href="kiev.php">Київ</a> 
	<a href="kharkov.php">Харків</a> 
	<a href="odessa.php">Одеса</a> 
	<a href="dnepr.php">Дніпро</a> 
	<a href="lvov.php">Львів</a> 
	<a href="nikolaev.php">Миколаїв</a> 
	<a href="poltava.php">Полтава</a> 
	<a href="chmelnyck.php">Хмельницьк</a> 
	<a href="czerkasy.php">Черкаси</a>
	<a href="czernigiw.php">Чернігів</a>
	<a href="czernywci.php">Чернівці</a>
	<a href="ivano-frankiwsk.php">Івано-Франківськ</a>
	<a href="kropywnyck.php">Кропивницький</a>
	<a href="luck.php">Луцьк</a>
	<a href="riwne.php">Рівне</a>
	<a href="sumy.php">Суми</a>
	<a href="uzhgorod.php">Ужгород</a>
	<a href="vinnyca.php">Вінниця</a>
	<a href="zaporyzha.php">Запоріжжя</a>
	<a href="zhytomyr.php">Житомир</a>

</p>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Форма заказа</h4>
      </div>
      <div class="modal-body">
        <p class="form-tips">Всі поля обов'язкові до заповнення!</p>
        <div class="messages"></div>

        <div class="form-group" id="nameitem">
          <label class="control-label" for="user_name">Ім'я</label>
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Вкажіть Ваше ім'я">
        </div>

        <div class="form-group" id="phoneitem">
          <label class="control-label" for="user_phone">Телефон</label>
          <input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="Вкажіть Ваш номер телефону">
        </div>

        <div class="form-group" id="emailitem">
          <label class="control-label" for="user_email">Email</label>
          <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Вкажіть Ваш email">
        </div>

        <div class="form-group" id="messageitem">
          <label class="control-label" for="user_message">Повідомлення</label>
          <textarea class="form-control" rows="3" name="user_message" id="user_message" placeholder="Повідомлення"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
        <button type="submit" class="btn btn-primary" id="btn_submit">Відправити замовлення</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>