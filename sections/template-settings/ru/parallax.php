<h3>Использование параллакс-эффекта (Parallax effect)</h3>

<p>Для реализации параллакс-эффекта в шаблоне используется jQuery-плагин <a
        href="http://markdalgleish.com/projects/stellar.js/" target="_blank"
        rel="nofollow">Stellar</a>.</p>

<p align="justify">Чтобы использовать параллакс-эффект на странице, необходимо перейти в "Менеджер
    шаблонов > Шаблоны", затем перейти в используемый шаблон (Theme**** Details and
    Files) и открыть файл "index.php". На соответствующем блоке, например "folio-row,
    добавьте следующий параметр:</p>
<code><code>data-stellar-background-ratio="[значение]"</code></code>

<p>где [значение] – это коэффициент относительно естественной скорости скроллинга, более
    детально можно прочитать в <a
        href="http://markdalgleish.com/projects/stellar.js/docs/" target="_blank"
        rel="nofollow">документации</a> к плагину.</p>

<p>После проделанных операций на выбранной странице появится параллакс-эффект в соответствуещем блоке.</p>

<figure class="img-polaroid">
    <img src="img/parallax-1.png" alt="">
</figure>