<h3>Moduł Formularz kontaktowy TM Ajax (TM Ajax Contact Form Module)</h3>

<p align="justify"><strong>Moduł Formularz kontaktowy TM Ajax</strong> jest modułem formularza kontaktowego dla silnika Joomla.
Ten moduł umożliwia dodawanie formularza kontaktowego do dowolnej strony twojej witryny Joomla.</p>
<p align="justify"><strong>Formularz kontaktowy </strong>jest w zasadzie zestawem pytań, wypełnianych na twojej stronie internetowej przez użytkownika, który jest automatycznie wysyłany na twój adres e-mail, gdy zostanie wypełniony. Zwykle formularz kontaktowy zawiera pola do wypełnienia nazwiska, adresu, telefonu, e-maila i rodzaju komentarza. Gdy użytkownicy witryny wypełnią pola formularza kontaktowego, klikną przycisk Potwierdź [Wyślij], aby przesłać informacje.</p>
<figure class="img-polaroid">
    <img src="img/contact-form-1.png" alt="">
</figure>

<p>Pojawią się następujące opcje:</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong> Pretekst (Pretext) </strong></td>
        <td width="29">-</td>
        <td width="781"> Należy wprowadić tekst, który ma zostać wyświetlony przed treścią modułu. Nie obsługuje żadnych znaczników HTML.</td>
  </tr>
    <tr>
        <td class="col-1"><strong> Pola (Fields) </strong></td>
        <td>-</td>
        <td><div align="justify">Należy wybrać i skonfigurować pola do wyświetlenia. Można wprowadzić etykietę pola, nazwę pola, wybrać typ pola [tekst/email/telefon/adres url/obszar tekstowy].</div></td>
    </tr> <tr>
        <td height="45" class="col-1"><strong>Etykieta (Label) </strong></td>
        <td>-</td>
        <td>Należy wprowadić etykietę pola.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Nazwa (Name) </strong></td>
        <td>-</td>
        <td>Należy wprowadić nazwę pola.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Rodzaj (Type) </strong></td>
        <td>-</td>
        <td>Należy wprowadić rodzaj pola.</td>
    </tr>
            <td class="col-1"><strong>Tytuł (Title) </strong></td>
        <td>-</td>
        <td>Należy wprowadić tytuł pola. Jeśli puste, nazwa będzie taka sama jak etykiety.</td>
    </tr>      <td class="col-1"><strong>Wymagane (Required) </strong></td>
        <td>-</td>
        <td>Czy pole ma być wymagane [tak/nie].</td>
    </tr>      <td class="col-1"><strong>Rozmiar bootstrap (Bootstrap Size) </strong></td>
        <td>-</td>
        <td>Ustaw potrzebną liczbę kolumn w polu.</td>
    </tr>    <td height="26" class="col-1"><strong>Email Administratora (Admin E-Mail)</strong></td>
      <td>-</td>
        <td> Zawiera aktualny adres e-mail, na który będą wysyłane wiadomości e-mail.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CC/BCC</strong></td>
        <td>-</td>
        <td>Pola, dostępne dla dodatkowych adresów e-mail.</td>
    </tr>
          <td class="col-1"><strong>Powiadomienie o sukcesie (Notification on Success)</strong></td>
        <td>-</td>
        <td> Jest to pole, w którym wiadomość dotycząca pomyślnego wysyłania jest przechowywana, i można ją zostać zmienione na tę, która będzie potrzebna.</td>
    </tr>      <td class="col-1"><strong>Powiadomienie o niepowodzeniu (Notification on Failure) </strong></td>
        <td>-</td>
        <td>W przypadku pojawienia się problemów podczas wysyłania e-mailu, można zmienić wiadomość na odpowiednią.</td>
    </tr>      <td class="col-1"><strong>Powiadomienie o nieudanym kodzie weryfikacyjnym (Notification on Captcha Failure)</strong></td>
        <td>-</td>
        <td> <div align="justify">Jeśli osoba wpisuje nieprawidłowy kod captcha, można zmienić tę wiadomość. Uwaga!!! Aby użyć captcha, należy włączyć wtyczkę recaptcha.</div></td>
    </tr>      <td height="" class="col-1"><strong>Captcha</strong></td>
        <td>-</td>
        <td>Należy określić, czy pole Captcha jest wymagane, czy też nie.</td>
    </tr>
          <td class="col-1"><strong>Przycisk reset (Reset button) </strong></td>
        <td>-</td>
        <td><span class="col-1">Może być widoczny lub też nie.</span></td>
    </tr>      <td class="col-1"><strong>Nazwa przycisków Reset/Potwierdź (Name of Reset/Submit buttons)</strong></td>
        <td>-</td>
        <td>Można edytować nazwy ze standardowych na niestandardowe.</td>
    </tr>      <td class="col-1"><strong>Położenie etykiety (Labels position)</strong></td>
        <td>-</td>
        <td> To pole umożliwia zmianę położenia na jedną z następujących opcji: Wewnątrz/Na zewnątrz.</td>
    </tr>      <td class="col-1"><strong>Minimalna długość wiadomości (Message min.length)</strong></td>
        <td>-</td>
        <td>W celu określenia ilości symboli, można zmienić limit na inny.</td>
    </tr>    
</table>
<h5>W jaki sposób można dodać nowe pole w module Formularz kontaktowy TM Ajax (How to add a new field in TM AJAX Contact Form module) </h5>
<p align="justify">Każdy szablon Joomla 3 zawiera stronę kontaktów, w swoją kolej zawierającą formularz kontaktowy. Zwykle formularz kontaktowy zawiera standardowe pola, na przykład, &quot;<strong>Nazwa</strong>&quot;, &quot;<strong>E-mail</strong>&quot; oraz &quot;<strong>Wiadomość</strong>&quot;:</p>
 <figure class="img-polaroid">
<p><img src="img/contact-form-6.png" alt=""></p></figure>
<p>Aby dodać nowe pole w module <strong>Formularz kontaktowy TM Ajax</strong>, należy wykonać następujące czynności:</p>
<ol class="marked-list">
      <li>
        <p>Należy przejść do zakładki <strong>Rozszerzenia</strong> &gt; <strong>Moduły</strong>:</p>
      </li>
      <figure class="img-polaroid">
    <p><img src="img/contact-form-7.png" alt=""></p></figure>
      <li>
        <p>Następnie należy wybrać moduł <strong>Formularz kontaktowy TM Ajax</strong> do edytowania.</p>
      </li>
    <div class="alert alert-warning">
 <div align="justify"><strong>Wskazówka:</strong> Jeśli chcesz znaleźć wszystkie moduły <strong>Formularz kontaktowy TM Ajax</strong>, użyj filtrów w celu uproszczenia procesu. Należy nacisnąć przycisk &quot;<strong>Narzędzia wyszukiwania</strong>&quot; oraz wybrać typ &quot;<strong>Formularz kontaktowy TM Ajax</strong>&quot; z rozwijanej listy filtrów &quot;<strong>- Wybierz typ -</strong>&quot;. Zostanie wyświetlona lista wszystkich modułów, w których jest używany <strong>AJAX Formularz kontaktowy</strong>.</div>
  <figure class="img-polaroid">
    <p><img src="img/contact-form-8.png" alt=""></p></figure></div>
      <li>Aby otworzyć dowolne zmiany wymaganych ustawień modułu, trzeba kliknąć jego tytuł.</li>
      <li>
        <div align="justify">      Interfejs edycji <strong>Formularz kontaktowy TM Ajax</strong> jest otwarty przed tobą. Teraz należy kliknąć zakładkę <strong>Ustawienia modułu</strong>, aby otworzyć stronę z głównymi ustawieniami formularza kontaktowego:</div>
      </li>
      <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-9.png" alt=""></p></figure>
    <p>Pojawią się następujące opcje:</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong> Pretekst (Pretext) </strong></td>
        <td width="29">-</td>
        <td width="781"> Należy wprowadić tekst, który ma zostać wyświetlony przed treścią modułu. Nie obsługuje żadnych znaczników HTML.</td>
  </tr>
    <tr>
        <td class="col-1"><strong> Pola (Fields) </strong></td>
        <td>-</td>
        <td><div align="justify">Należy wybrać i skonfigurować pola do wyświetlenia. Można wprowadzić etykietę pola, nazwę pola, wybrać typ pola [tekst/email/telefon/adres url/obszar tekstowy].</div></td>
    </tr> <tr>
        <td height="45" class="col-1"><strong>Etykieta (Label) </strong></td>
        <td>-</td>
        <td>Należy wprowadić etykietę pola.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Nazwa (Name) </strong></td>
        <td>-</td>
        <td>Należy wprowadić nazwę pola.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Rodzaj (Type) </strong></td>
        <td>-</td>
        <td>Należy wprowadić rodzaj pola.</td>
    </tr>
            <td class="col-1"><strong>Tytuł (Title) </strong></td>
        <td>-</td>
        <td>Należy wprowadić tytuł pola. Jeśli puste, nazwa będzie taka sama jak etykiety.</td>
    </tr>      <td class="col-1"><strong>Wymagane (Required) </strong></td>
        <td>-</td>
        <td>Czy pole ma być wymagane [tak/nie].</td>
    </tr>      <td class="col-1"><strong>Rozmiar bootstrap (Bootstrap Size) </strong></td>
        <td>-</td>
        <td>Ustaw potrzebną liczbę kolumn w polu.</td>
    </tr>    <td height="26" class="col-1"><strong>Email Administratora (Admin E-Mail)</strong></td>
      <td>-</td>
        <td> Zawiera aktualny adres e-mail, na który będą wysyłane wiadomości e-mail.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CC/BCC</strong></td>
        <td>-</td>
        <td>Pola, dostępne dla dodatkowych adresów e-mail.</td>
    </tr>
          <td class="col-1"><strong>Powiadomienie o sukcesie (Notification on Success)</strong></td>
        <td>-</td>
        <td> Jest to pole, w którym wiadomość dotycząca pomyślnego wysyłania jest przechowywana, i można ją zostać zmienione na tę, która będzie potrzebna.</td>
    </tr>      <td class="col-1"><strong>Powiadomienie o niepowodzeniu (Notification on Failure) </strong></td>
        <td>-</td>
        <td>W przypadku pojawienia się problemów podczas wysyłania e-mailu, można zmienić wiadomość na odpowiednią.</td>
    </tr>      <td class="col-1"><strong>Powiadomienie o nieudanym kodzie weryfikacyjnym (Notification on Captcha Failure)</strong></td>
        <td>-</td>
        <td> <div align="justify">Jeśli osoba wpisuje nieprawidłowy kod captcha, można zmienić tę wiadomość. Uwaga!!! Aby użyć captcha, należy włączyć wtyczkę recaptcha.</div></td>
    </tr>      <td height="" class="col-1"><strong>Captcha</strong></td>
        <td>-</td>
        <td>Należy określić, czy pole Captcha jest wymagane, czy też nie.</td>
    </tr>
          <td class="col-1"><strong>Przycisk reset (Reset button) </strong></td>
        <td>-</td>
        <td><span class="col-1">Może być widoczny lub też nie.</span></td>
    </tr>      <td class="col-1"><strong>Nazwa przycisków Reset/Potwierdź (Name of Reset/Submit buttons)</strong></td>
        <td>-</td>
        <td>Można edytować nazwy ze standardowych na niestandardowe.</td>
    </tr>      <td class="col-1"><strong>Położenie etykiety (Labels position)</strong></td>
        <td>-</td>
        <td> To pole umożliwia zmianę położenia na jedną z następujących opcji: Wewnątrz/Na zewnątrz.</td>
    </tr>      <td class="col-1"><strong>Minimalna długość wiadomości (Message min.length)</strong></td>
        <td>-</td>
        <td>W celu określenia ilości symboli, można zmienić limit na inny.</td>
    </tr>    
</table>
      <li>
        <div align="justify">Pierwszą rzeczą, którą zobaczysz będzie pole <strong>Pretekst</strong>, poniżej są dostępne pola formularzy kontaktowych - w tym miejscu należy wprowadzić zmiany.</div></li>
      <li>
        <div align="justify">Należy kliknąć przycisk <strong>plus</strong> [+] obok pola, po którym chcesz dodać  nowe pole. Załóżmy, że chcesz dodać pole <strong>Temat (Subject)</strong> po polu <strong>Twój email</strong>. Można zobaczyć nowe puste pole, które teraz pojawiło się:</div>
      </li>
       <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-10.png" alt=""></p></figure>
  <li>
    <div align="justify">Należy wypełnić pola <strong>Etykieta </strong>oraz <strong>Nazwa</strong> i ustawić opcję <strong>Rodzaj</strong> dla nowo dodanego pola formularza - w naszym przypadku powinien to być rodzaj <strong>tekst</strong>.</div></li>
  <li>
    <div align="justify">Należy również wybrać, czy pole jest <strong>wymagane czy też nie</strong> ustawiając odpowiednią opcję. Zróbmy tak, że pole tematu nie jest wymagane.</div></li>
  <li>
    <div align="justify">Prawdopodobnie zauważyłeś opcję<strong> Rozmiar Bootstrap</strong>, która również musi być ustawiona. Poprzez wybranie tej opcji ustawiamy wielkość pola - wybierając <strong>8</strong>, pole zajmuje całą szerokość formularza kontaktowego kontenera, podobnie jak pole <strong> Message </strong>.
    Numer <strong>4</strong> oznacza pole zajmujące trzecią część pojemnika formularza, numer <strong>3</strong> – czwartą część i tak dalej. Ustawmy pole zajmujące trzecią część szerokości pojemnika formularza, wybierając <strong>4</strong>. Należy ustawić szerokość <strong>12</strong> pola formularza <strong>Wiadomość</strong> dla lepszej aranżacji wyglądu kontenerów.</div>
  </li>
  <figure class="img-polaroid">
    <p><img src="img/contact-form-11.png" alt=""></p></figure>
  <li>
    <div align="justify">Teraz należy przewinąć stronę i kliknąć zielony przycisk <strong>Zapisz</strong> w lewym górnym rogu ekranu, aby zmiany zostały zastosowane:</div></li>
    <figure class="img-polaroid">
    <p><img src="img/contact-form-12.png" alt=""></p></figure>
  <li>
    <div align="justify">Aby zobacyć te zmiany, trzeba przejść na swoją stronę kontaktów oraz odświeżyć tę stronę. Pole <strong>Temat (Subject)</strong> zostało pomyślnie dodane:</div>
  </li>
   <figure class="img-polaroid">
    <p><img src="img/contact-form-13.png" alt=""></p></figure>
  <div class="alert alert-info">
<p align="justify"><strong>Wskazówka</strong></p>
    <div align="justify">
      <p>W przypadku problemów z wyświetlaniem formularza kontaktowego, należy zastosować <strong>domyślny układ</strong>. Aby to zrobić, trzeba przejść na zakładkę ustawień <strong>Zaawansowane</strong> i wybrać <strong>Domyślne</strong> w rozwijanej liście opcji <strong>Alternatywny układ</strong>. </p>
</div>
<figure class="img-polaroid">
  <p><img src="img/contact-form-14.png" alt=""></p></figure></div>

  
</ol>
