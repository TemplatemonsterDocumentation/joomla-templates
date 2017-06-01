<h3>Joomla Social Login</h3>

<p align="justify"><strong>Social Login</strong>, składnik uwierzytelniania sieci społecznościowych umożliwia zalogowanie się na stronie Joomla poprzez korzystanie z sieci społecznościowych: Vkontakte, Twitter, FaceBook, Odnoklassniki, LinkedIn, Yandex services, Google, oraz Mail.ru.</p>
<h5>Ustawienie Slogin dla usługi Slogin.info</h5>
<ol class="marked-list">
  <li>Po instalacji należy przejść do ustawień komponetów (składników): <strong>Komponenty</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Następnie trzeba uzyskać<strong> ID </strong>oraz<strong> hasło</strong>, gdzie można ich uzyskać?</li>
  <li>Należy przejść na stronę internetową: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>Jeśli nie masz jeszcze zarejestrowanego konta, po prostu zaloguj się przez sieć społecznościową.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Należy kliknąć przycisk <strong>Dodaj witrynę</strong>.</li>
  <li>W referencyjnym formacie <strong>Callback</strong>  http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service.    </li>
     <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>
  <li><strong>Site.ru</strong> można wymienić na swojej stronie internetowej lub skopiować link z gotowego pola <strong>Callback URL</strong> w ustawiniach Slogin.</li>
</br>
  Należy przejść do <strong>Komponenty</strong> &gt; <strong>Slogin</strong>. Otwórz dowolne ustawienia wtyczki.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Należy znaleźć pole opcji <strong>Callback URL </strong>i skopiować ścieżkę URL.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>W polu <strong>Hasło</strong>, należy wprowadzić tajemny wyraz.</li>
  <li>Kliknij przycisk <strong>Dodaj</strong>.</li>
  <li>Po dodaniu serwisu pobiera się <strong>ID</strong> oraz <strong>hasło</strong> jego użytkownika, które zostały wprowadzone w poprzednim kroku.</li>
  <li>Należy wybrać potrzebną sieć i zapisać ustawienia.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Teraz trzeba opublikować wtyczki i moduł.</li>
  <li>Można opublikować wtyczki [ 	Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, itd] poprzez okno ustawień komponentów [<strong>Komponenty</strong> &gt; <strong>Slogin</strong>].</li>
</ol>
<ol class="marked-list">
  <p>W tym celu należy otworzyć dowolne ustawienia wtyczki.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>I zmienić <strong>wtyczka Slogin</strong> na <strong>Włączone (Enable)</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>Bieżący stan wtyczki <strong>Slogin</strong> będzie widoczny w kolumnie <strong>Publikowanie</strong>.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>Aby opublikować moduł <strong>Slogin</strong>, należy przejść do <strong>Rozszerzenia</strong> &gt; <strong>Moduły</strong>. Za pomocą filtrów można odnaleźć moduł <strong>Slogin</strong>. Trzeba wybrać typ modułu<strong> Slolin </strong>w rozwijanej liście &quot;<strong>-Wybierz typ-</strong>&quot;, a na tej liście zobaczysz moduł <strong>Slogin </strong>.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Należy nacisnąć link tytułu modułu, aby zostać przekierowanym do interfejsu ustawień modułu.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Dowiedzmy się więcej o ustawieniach modułu<strong> Slogin </strong>:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Pokaż formularz logowania (Show Login Form)</strong></td>
        <td width="29">-</td>
      <td width="781"> Czy pokazać <span class="col-1"> formularz logowania.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Łącze do scalania kont (Link to the accounts merge)</strong></td>
        <td>-</td>
        <td><div align="justify">Pokaż link do zarządzania połączonymi profilami portali społecznościowych. Link jest wyświetlany w module Slogin dla autoryzowanego użytkownika.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Łącze do profilu (Link to profile) </strong></td>
        <td>-</td>
        <td><div align="justify">Pokaż łącze profilu. Link jest wyświetlany w module Slogin dla autoryzowanego użytkownika.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Tekst wprowadzający (Intro Text)</strong></td>
        <td>-</td>
        <td>Tekst HTML wyświetlany przed autoryzacją w sieciach społecznościowych.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Pretekst (Pre-text) </strong></td>
        <td>-</td>
        <td>To jest tekst lub HTML, który jest wyświetlany powyżej formularza logowania.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Post-tekst (Post-text) </strong></td>
        <td>-</td>
        <td>To jest tekst lub HTML, który jest wyświetlany poniżej formularza logowania.</td>
    </tr>
          <td class="col-1"><strong>Strona przekierowania logowania (Login Redirection Page)</strong></td>
        <td>-</td>
        <td><div align="justify">Należy wybrać stronę, na którą użytkownik zostanie przekierowany po pomyślnym zalogowaniu. Dla tego trzeba wybrać jedną ze stron wymienionych w menu rozwijanym. Wybierając <strong> Domyślny </strong>, powróci do tej samej strony.</div></td>
    </tr>    <td class="col-1"><strong> Strona przekierowania wylogowania (Logout Redirection Page) </strong></td>
        <td>-</td>
        <td><div align="justify">Należy wybrać stronę, na którą użytkownik zostanie przekierowany po pomyślnym zalogowaniu. Dla tego trzeba wybrać jedną ze stron wymienionych w menu rozwijanym. Wybierając <strong> Domyślny </strong>, powróci do tej samej strony.</div></td>
    </tr>
</table>
<p></p>
<li>Należy wybrać pozycję modułu. Wybierzmy pozycję <strong> megamenu </strong>.</li>
<li>
  <div align="justify">Opublikowanie modułu [Moduł można opublikować za pośrednictwem Zarządzania modułami, naciskając czerwony przycisk &quot;x&quot; tuż obok tytułu modułu.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Zapisz ustawienia.</li>
<li>
  <div align="justify">Teraz trzeba wrócić do swojej witryny i odświeżyć stronę. Teraz można zalogować się na swojej stronie Joomla za pośrednictwem licznych sieci społecznościowych.</div>
</li>
</ol>
<div class="alert alert-warning">
<p>Więcej informacji można znaleźć w oficjalnej dokumentacji <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a>. </p></div>