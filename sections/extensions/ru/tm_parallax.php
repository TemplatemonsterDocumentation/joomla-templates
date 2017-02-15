<h3>TM Parallax Module</h3>

<<<<<<< HEAD
<p><strong>TM Parallax</strong>   – это модуль, который использует RD Parallax script для реализации параллакс-эффекта в шаблоне.</p>
<figure class="img-polaroid">
<p> <img src="img/tm-parallax-20.jpg" alt=""></p></figure>
<p align="justify">Теперь модуль  доступен из <strong>Module Manager</strong>, перейти к которому можно через вкладку <strong>Extension</strong>,  в верхнем меню админ-панели сайта. Создавайте дополнительные модули, нажав на кнопку<strong> New</strong>. Редактируйте ранее созданные модули. Не забудьте опубликовать модуль на нужной, выбрав желаемую позицию на данной странице.</p>

<h5>
  <p>Чтобы перейти к настройке модуля <strong>TM Parallax</strong>, следуйте указаниям ниже:</p></h5>
<ol class="marked-list">
<li>
<p>Перейдите к разделу <strong>Extensions</strong> &gt; <strong>Modules</strong>:</p></li>
<figure class="img-polaroid">
<p><img src="img/contact-form-7.png" alt=""></p></figure>
      <li>
        <p>В таблице менеджера найдите модуль типа<strong> TM Parallax</strong>, который вы хотели бы изменить.</p>
      </li>
    <div class="alert alert-warning">
 <div align="justify">
   <p><strong>Совет: </strong>для упрощения процесса поиска всех модулей типа <strong>TM Parallax</strong>, пользуйтесь поисковыми фильтрами. Нажмите кнопку &quot;<strong>Search Tool</strong>&quot; и выберите &quot;<strong>TM Parallax</strong>&quot; в списке фильтра &quot;<strong>- Select Type -</strong>&quot;. </p>
</div>
  <figure class="img-polaroid">
<p> <img src="img/tm-parallax-1.jpg" alt=""></p></figure></div>
<ol class="marked-list">
      <li>Перейдите в окно настроек любого модуля, кликнув по ссылке его заголовка. [Перейдем к настройкам модуля   <strong>Home parallax</strong>, в качестве примера.]</li>
<li>
  <div align="justify">Перед вами откроется окно настроек модуля типа <strong> TM Parallax</strong>.            
  </div>
  <figure class="img-polaroid">
    <p> <img src="img/tm-parallax-2.jpg" alt=""></p></figure>
<li>
  <div align="justify">Нажмите кнопку <strong>Article</strong>. Откроется окно [см. изображение ниже], в котором вы можете выбрать статью для модуля. </div>
</li>
</ol>
<figure class="img-polaroid">
<p align="justify"> <img src="img/tm-parallax-3.jpg" alt=""></p></figure>
<div class="alert alert-warning">
    
  <p align="justify">В большинстве наших шаблонов содержимое модуля <strong>TM Parallax</strong> представлено в виде подключения определенного модуля или позиции, например, &quot;{loadmodule articles_single, Home parallax article}&quot;. Для предотвращения возникновения ошибки 404 на сайте, убедитесь, что название подключаемого модуля совпадает с тем, которое указано при подключении. В данном случае модуль &quot;<strong>Home parallax article</strong>&quot; должен быть в состоянии published и не содержать более одного пробела в названии.
        Вы можете получить детальную информацию про loadmodule/loadposition на <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">этом сайте</a>. </p>
          <div align="justify">Подробдую информации о функциях loadmodule/loadposition, вы можете узнать на <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">oфициальном веб-сайте</a>.
 
          </div>
</div>
  <p align="justify">Если вы хотите изменить модуль <strong>Home parallax article</strong>, перейдите к разделу <strong>Extensions</strong> &gt; <strong>Modules</strong>. И вбейте в поле поиска текст: <strong>Home parallax article</strong>. Перейдите по ссылке заголовка модуля <strong>Home parallax article</strong> и вы окажетесь на странице настроек этого модуля.</p>
 <figure class="img-polaroid"> <p> <img src="img/tm-parallax-4.jpg" alt=""></p></figure>
  <p align="justify">Редактируйте текст статьи модуля [статьи You and your business look ravishing]. Для этого, нажмите кнопку <strong> Edit</strong> и перед вами появится окно редактора. С помощью редактора вы можете редактировать текст статьи, добавлять изображения и ссылки [внесите нужные изменения, а после не забудьте сохранить их].</p>
  <div class="alert alert-warning">
  <p>Добавить новую статью вы можете пройде к разделу <strong>Content</strong> &gt; <strong>Articles</strong> &gt; <strong>Add New Article</strong>.</p>
  <figure class="img-polaroid">
    <img src="img/articles-single-9.jpg" alt="">
  </figure>
  </div>
<p></p>
<ol class="marked-list">
<li>Откройте вкладку <strong>Advanced</strong>.</li>
<figure class="img-polaroid">
     <p><img src="img/tm-parallax-5.jpg" alt=""></p>
  </figure>
  </ol>
Здесь вы сможете настраивать  следующие параметры:
<table width="980"  class="options-table">
<tr>
        <td width="154" class="col-1"><strong> Prepare Content </strong></td>
        <td width="29">-</td>
        <td width="781">Подготовьте контент для модуля.</td>
  </tr>
    <tr>
        <td class="col-1"><strong>Select a Background Image</strong></td>
        <td>-</td>
        <td>  Выбранное  изображение будет автоматически встроено, как  inline стиль обёрточного div элемента. Для удобства, храните изображения в папке images/<strong>parallax</strong>. [Загружать изображения можно через  <strong>Content</strong> &gt; <strong>Media</strong>.]</td>
    </tr> <tr>
        <td height="45" class="col-1"><strong> Parallax speed </strong></td>
        <td>-</td>
        <td>Задайте значение  скорости  эффекта  parallax относительно скорости прокрутки. Значение должно быть в пределах от  0 до 2.</td>
    </tr>
    <tr>
        <td height="45" class="col-1"><strong>  Parallax direction  </strong></td>
        <td>-</td>
        <td><div align="justify">Укажите направления движения  parallax. Normal — в противоположную сторону относительно движения прокрутки, Inverse - по направлению движения прокрутки.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong> Show on Mobile </strong></td>
        <td>-</td>
        <td>Вы можете отключить отображения parallax эффекта для мобильной версии сайта.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Blur</strong></td>
        <td>-</td>
        <td>Вы можете активировать эффект размытия слишком маленьких изображений [относительно размера контейнера].</td>
    </tr>    
</table>
=======
<p>TM Parallax – это модуль, который использует RD Parallax script для реализации параллакс-эффекта в шаблоне.</p>

<h6>Все доступные опции модуля:</h6>

<ol class="index-list">
<li>Настройки  изображения;</li>
    <li>Настройки скорости параллакс-эффекта;</li>
    <li>Настройки направления параллакс-эффекта.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/tm-parallax.jpg" alt="">
</figure>

<p align="justify" class="alert alert-warning">
В большинстве наших шаблонов содержимое модуля TM Parallax представлено в виде подключения определенного модуля или позиции, например, "{loadmodule articles_single, About us}". Для предотвращения возникновения ошибки 404 на сайте, убедитесь, что название подключаемого модуля совпадает с тем, которое указано при подключении. В данном случае модуль "About us" должен быть в состоянии published и не содержать более одного пробела в названии.
    Вы можете получить детальную информацию про loadmodule/loadposition на <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">этом сайте</a>.
</p>
>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a
