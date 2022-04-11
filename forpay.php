<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Сайт СНТ "Ромашка"</title>
    
    <link rel="stylesheet" href="css/stylepage.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
  </head>
  <body style="background-image: url(https://wallbox.ru/wallpapers/main/201549/f46f582d9ee2d92.jpg); background-position: top center;">
    <header>
    <nav  class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="http://mominro.beget.tech/cnt-romashka/start.php">На главную<i class="fa fa-reply-all" aria-hidden="true"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="http://mominro.beget.tech/cnt-romashka/documents.php">Сметы, отчеты правления <i class="fa fa-file-text" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://mominro.beget.tech/cnt-romashka/forpay.php">Должники, реквизиты для оплаты<i class="fa fa-credit-card" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://mominro.beget.tech/cnt-romashka/kontakts.php">Контакты<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </nav>
 <p></p> 
 <div class="header-container text">
      <div class="header-image">
        <img class ="header-image" src="https://gifok.net/images/2015/10/15/Camomile_1_082.png" alt="Ромашки"> 
         <h2 style="color:Cornsilk; text-align: right; display: inline-block; margin: 15px; font-style: oblique;text-shadow: 7px 4px 5px rgba(151, 203, 150, 1); " >СНТ "Ромашка"</h2>
      </div>
      <div class="header-text"> 
         <p class="text-adress"><i class="fa fa-location-arrow" aria-hidden="true"></i>141052, Московская область, городской округ Павловский Посад, деревня Улитино</p>
         <div>
           <p class ="text-phone" mt="0" ><i class="fa fa-phone" aria-hidden="true"></i>+7(916)8873391</p>
           <p class ="phone-name">Председатель: Матченко Елена Филиповна</p>
         </div>
      </div>
    </div>
    
<nav aria-label="breadcrumb mt-3 ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ><a href="http://mominro.beget.tech/cnt-romashka/start.php">На главную</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="http://mominro.beget.tech/cnt-romashka/documents.php">Документы</a></li>
    <li class="breadcrumb-item active" aria-current="page">Должники, Реквизиты для оплаты</li>
    <li class="breadcrumb-item active" aria-current="page"><a href="http://mominro.beget.tech/cnt-romashka/kontakts.php">Контакты</a></li>
  </ol>
</nav>

    
    </header>   
<main>
	
	<h1 class="title" style="text-align: center; margin: 40px; font-size:21pt">Проверка задолженности</h1>
     	<p></p>
	<p class = "text" style ="margin: 20px; font-size: 17pt"><strong>Проверка осуществляется на момент 01.06.2021. Обновления списка должников: каждый календарный месяц в 21-27х числах</strong></p>
	    <p></p>
	    
<form id="form">   
<div class="input-group input-group-lg" style="margin: 160px; padding: 13px; width: 670px">
  <select class="custom-select" id="select">
    <option selected >Введите номер вашего участка</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
    <option value="3">7</option>
    <option value="3">8</option>
    <option value="3">9</option>
    <option value="3">10</option>
    <option value="3">11</option>
    <option value="3">12</option>
  
  </select>
 </form>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" onclick="getDebt()" type="button">Проверить </button>
  </div>
</div>

<p></p>

<div class="alert alert-warning d-none" role="alert">
  Вы должны 5000 руб!
</div>
	
 <h2 class ="title" style="text-align: center; margin: 40px; font-size:21pt">Реквизиты для оплаты</h2>
 <p></p>
  <table style="background-color: white; margin: 80px; padding: 60px; " border="1" cellpadding="0" cellspacing="0" style="width:90%;">
	<tbody>
		<tr>
			<td style="width:500px;">
			<h3>Полное наименование фирмы (в соответствии с учредительными документами)</h3>
			</td>
			<td style="width:500px;">
			<p>Садоводческое некоммерческое товарищество «Ромашка»</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Фирменное сокращенное наименование</h3>
			</td>
			<td style="width:500px;">
			<p>СНТ «Ромашка»</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Юридический адрес</h3>
			</td>
			<td style="width:500px;">
			<p>142460 М.О. Павлово Посадский р-н, дер. Улитино, СНТ «Ромашка»</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Фактический адрес</h3>
			</td>
			<td style="width:500px;">
			<p>142460 М.О. Павлово Посадский р-н, дер. Улитино, СНТ «Ромашка»</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Телефон по фактическому адресу</h3>
			</td>
			<td style="width:500px;">
			<p>905&nbsp;557-05-08</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>ИНН/КПП</h3>
			</td>
			<td style="width:500px;">
			<p>5031017596/503101001</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Код отрасли по ОКПО</h3>
			</td>
			<td style="width:500px;">
			<p>ХХХХХ</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Код отрасли по ОКОГУ</h3>
			</td>
			<td style="width:500px;">
			<p>4210014</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Код отрасли по ОКАТО</h3>
			</td>
			<td style="width:500px;">
			<p>46239154051</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Код отрасли по ОКВЭД</h3>
			</td>
			<td style="width:500px;">
			<p>68.32.1</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>ОГРН</h3>
			</td>
			<td style="width:500px;">
			<p>1ХХХХХХХ</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Код отрасли по ОКОПФ</h3>
			</td>
			<td style="width:500px;">
			<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="width:1360px;">
			<h2 style="text-align: center;">Платежные реквизиты</h2>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Расчетный счет</h3>
			</td>
			<td style="width:500px;">
			<p>40703810840000001304</p>

			<p>&nbsp;в ПАО «Сбербанк России» г. Москва</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>К/счет</h3>
			</td>
			<td style="width:500px;">
			<p>30101810400000000225&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>БИК</h3>
			</td>
			<td style="width:500px;">
			<p>0445хххх</p>
			</td>
		</tr>
		<tr>
			<td style="width:500px;">
			<h3>Полное наименование банка</h3>
			</td>
			<td style="width:500px;">
			<p>СБЕРБАНК РОССИИ ПАО Г. МОСКВА</p>
			</td>
		</tr>
	</tbody>
</table>
</main>

 <script>
 
function getDebt() {
	if (document.querySelector("#select").value<="1") {
		alert('Вы должны' +' '+'2000 руб.');
		} else if (document.querySelector("#select").value<="2") {
		 alert('Вы должны' +' '+'5000 руб.');
		} else if (document.querySelector("#select").value<="3") {
		 alert('Вы должны' +' '+'34500 руб.'); 
		} else if (document.querySelector("#select").value<="4") {
		alert('Вы должны' +' '+'60000 руб.');
		}

  };

 	
 	
 </script>

<?php require_once("components/footer.php"); ?>
 